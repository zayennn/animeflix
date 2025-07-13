<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        $query = http_build_query([
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
            'response_type' => 'code',
            'scope' => 'openid email profile',
            'access_type' => 'offline',
            'prompt' => 'consent',
        ]);

        $authUrl = 'https://accounts.google.com/o/oauth2/v2/auth?' . $query;

        return redirect($authUrl);
    }

    public function handleGoogleCallback(Request $request)
    {
        $code = $request->get('code');

        if (empty($code)) {
            return redirect()->route('login')->withErrors(['error' => 'Authorization code not found']);
        }

        try {
            $response = Http::post('https://oauth2.googleapis.com/token', [
                'code' => $code,
                'client_id' => env('GOOGLE_CLIENT_ID'),
                'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
                'grant_type' => 'authorization_code',
            ]);

            if ($response->failed()) {
                throw new \Exception('Failed to get access token: ' . $response->body());
            }

            $accessToken = $response->json()['access_token'];

            $userInfo = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get('https://www.googleapis.com/oauth2/v3/userinfo');

            if ($userInfo->failed()) {
                throw new \Exception('Failed to get user info: ' . $userInfo->body());
            }

            $userData = $userInfo->json();

            if (!isset($userData['sub'])) {
                throw new \Exception('Google did not return user ID');
            }

            $userData['id'] = $userData['sub'];

            return $this->handleSocialUser($userData, 'google');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function redirectToDiscord()
    {
        $query = http_build_query([
            'client_id' => env('DISCORD_CLIENT_ID'),
            'redirect_uri' => env('DISCORD_REDIRECT_URI'),
            'response_type' => 'code',
            'scope' => 'identify email',
        ]);

        return redirect('https://discord.com/api/oauth2/authorize?' . $query);
    }

    public function handleDiscordCallback(Request $request)
    {
        $code = $request->get('code');

        $response = Http::asForm()->post('https://discord.com/api/oauth2/token', [
            'client_id' => env('DISCORD_CLIENT_ID'),
            'client_secret' => env('DISCORD_CLIENT_SECRET'),
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => env('DISCORD_REDIRECT_URI'),
            'scope' => 'identify email',
        ]);

        $accessToken = $response->json()['access_token'];

        $userInfo = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get('https://discord.com/api/users/@me');

        $userData = $userInfo->json();

        return $this->handleSocialUser($userData, 'discord');
    }

    protected function handleSocialUser(array $userData, string $provider)
    {
        try {
            if (!isset($userData['email'])) {
                throw new \Exception('Email not provided by ' . $provider);
            }

            $providerId = $userData['sub'] ?? $userData['id'] ?? null;

            if (!$providerId) {
                throw new \Exception('User identifier not provided by ' . $provider);
            }

            $user = User::where(function ($query) use ($providerId, $userData) {
                $query->where('provider_id', $providerId)
                    ->orWhere('email', $userData['email']);
            })->first();

            if (!$user) {
                $username = $this->generateUsername($userData);

                $user = User::create([
                    'username' => $username,
                    'email' => $userData['email'],
                    'password' => bcrypt(Str::random(32)),
                    'role_id' => 1,
                    'provider' => $provider,
                    'provider_id' => $providerId,
                ]);
            } else {
                if (empty($user->provider)) {
                    $user->update([
                        'provider' => $provider,
                        'provider_id' => $providerId,
                    ]);
                }
            }

            Auth::login($user, true);

            return $this->redirectToDashboard($user);
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => $e->getMessage()]);
        }
    }

    protected function generateUsername(array $userData): string
    {
        if (!empty($userData['name'])) {
            return Str::slug($userData['name']) . rand(100, 999);
        }

        if (!empty($userData['email'])) {
            return Str::before($userData['email'], '@') . rand(100, 999);
        }

        return 'user' . rand(1000, 9999);
    }

    protected function redirectToDashboard(User $user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('dashboard');
        } elseif ($user->isPetugas()) {
            return redirect()->route('dashboard');
        }

        return redirect('/');
    }

    protected function generateUniqueUsername(array $userData): string
    {
        $username = $userData['name'] ?? $userData['username'] ?? Str::before($userData['email'], '@');
        $username = Str::slug($username);
        $originalUsername = $username;

        $counter = 1;
        while (User::where('username', $username)->exists()) {
            $username = $originalUsername . $counter;
            $counter++;
        }

        return $username;
    }

    protected function redirectBasedOnRole(User $user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isPetugas()) {
            return redirect()->route('petugas.dashboard');
        }

        return redirect('/');
    }
}
