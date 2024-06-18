<?php

namespace App\Http\Controllers;

use App\Models\Site;
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

    // Profile Routes
    public function profile(Request $request)
    {
        return view('users.profile');
    }
}
