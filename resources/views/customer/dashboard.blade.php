@extends('layouts.dashboard')

@section('title', 'Customer Dashboard')

@section('content')
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <!-- Welcome Card -->
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
            <h2 class="text-lg font-medium text-gray-900">Welcome back, {{ auth()->user()->name }}!</h2>
            <p class="mt-2 text-sm text-gray-600">Here's a summary of your recent activity.</p>
        </div>

        <!-- Stats Card -->
        <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <div class="ml-5">
                    <div class="text-sm font-medium text-gray-500">Active Tickets</div>
                    <div class="mt-1 text-3xl font-semibold text-gray-900">{{ $tickets->where('status', '!=', 'closed')->count() }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Tickets -->
    <div class="mt-8">
        <div class="bg-white overflow-hidden shadow-sm rounded-lg">
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-medium text-gray-900">Recent Support Tickets</h3>
                    <a href="{{ route('customer.tickets.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        New Ticket
                    </a>
                </div>
                <div class="mt-6">
                    @if($tickets->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($tickets as $ticket)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $ticket->title }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                {{ $ticket->status === 'open' ? 'bg-green-100 text-green-800' : 
                                                   ($ticket->status === 'in_progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                                {{ ucfirst(str_replace('_', ' ', $ticket->status)) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $ticket->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('customer.tickets.show', $ticket) }}" class="text-blue-600 hover:text-blue-900">View</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500 text-sm">No support tickets found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection