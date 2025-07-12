<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isPetugas()) {
            return redirect()->route('petugas.dashboard');
        }

        return redirect('/');
    }

    public function admin()
    {
        return view('dashboard.admin', [
            "title" => "Admin Dashboard"
        ]);
    }

    public function petugas()
    {
        return view('dashboard.petugas', [
            "title" => "Petugas Dashboard"
        ]);
    }
}