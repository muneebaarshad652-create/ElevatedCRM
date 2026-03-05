<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;

class DashboardController extends BaseAdminController
{

    public function index(): View
    {
        $totalCustomers = User::where('role', 'customer')->count();
        $recentCustomers = User::where('role', 'customer')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('totalCustomers', 'recentCustomers'));
    }
}