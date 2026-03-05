<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function index(): View
    {
        $tickets = SupportTicket::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);
            
        return view('customer.tickets.index', compact('tickets'));
    }

    public function create(): View
    {
        return view('customer.tickets.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        $ticket = auth()->user()->tickets()->create($validated);

        return redirect()->route('customer.tickets.show', $ticket)
            ->with('success', 'Ticket created successfully');
    }

    public function show(SupportTicket $ticket): View
    {
        $this->authorize('view', $ticket);
        return view('customer.tickets.show', compact('ticket'));
    }
}