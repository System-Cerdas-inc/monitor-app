<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use App\Models\Validasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {
        $assets = ['chart', 'animation'];
        $sites = Site::with('opd')->get();

        $totalSites = $sites->count();
        $activeSites = $sites->where('status', 'Aktif')->count();
        $suspendSites = $sites->where('status', 'Suspend')->count();
        $nonActiveSites = $sites->where('status', 'Tidak Aktif')->count();
        $nilaiSites = $sites->where('nilai')->sum('nilai');

        $statistics = [
            'all_sites' => $totalSites,
            'active' => $activeSites,
            'suspend' => $suspendSites,
            'non_active' => $nonActiveSites,
            'nilai' => $nilaiSites,
        ];

        return view('dashboards.dashboard', compact('assets', 'sites', 'statistics'));
    }

    /*
     * Auth Routs
     */
    public function signin(Request $request)
    {
        return view('auth.login');
    }

    public function recoverpw(Request $request)
    {
        return view('auth.recoverpw');
    }

    /*
     * Profile Routs
     */
    public function profile(Request $request)
    {
        return view('users.profile');
    }

    /**
     * Update profile data
     *
     */
    public function updateProfile(Request $request)
    {
        $user = User::with('userProfile')->findOrFail(auth()->user()->id);

        $user->update([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => $request->password != '' ? bcrypt($request->password) : $user->password,
        ]);

        $user->syncRoles($request->user_type);

        return redirect()->route('profile')->withSuccess('User updated successfully');

    }
}
