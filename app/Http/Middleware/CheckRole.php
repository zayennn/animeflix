<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        switch ($role) {
            case 'admin':
                if (!$user->isAdmin()) {
                    abort(403, 'Unauthorized action.');
                }
                break;
            case 'petugas':
                if (!$user->isPetugas()) {
                    abort(403, 'Unauthorized action.');
                }
                break;
            case 'user':
                if (!$user->isUser()) {
                    abort(403, 'Unauthorized action.');
                }
                break;
            default:
                abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}