<?php

namespace App\Http\Controllers\Customer;

use App\Models\SupportTicket;
use Illuminate\View\View;

class DashboardController extends BaseCustomerController
{

    public function index(): View
    {
        $tickets = SupportTicket::where('user_id', auth()->id())
            ->latest()
            ->take(5)
            ->get();

        return view('customer.dashboard', compact('tickets'));
    }
}