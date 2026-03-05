@extends('layouts.dashboard')

@section('title', 'Ticket Details')
@section('header', 'Ticket Details')

@section('content')
    <div class="bg-white shadow-sm rounded-lg">
        <div class="p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-900">Ticket Details</h2>
                <a href="{{ route('customer.tickets') }}" class="text-blue-600 hover:text-blue-900">← Back to Tickets</a>
            </div>

            <div class="mt-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Title</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $ticket->title }}</dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $ticket->status === 'open' ? 'bg-green-100 text-green-800' : 
                                   ($ticket->status === 'in_progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                {{ ucfirst(str_replace('_', ' ', $ticket->status)) }}
                            </span>
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">Description</dt>
                        <dd class="mt-1 text-sm text-gray-900 whitespace-pre-line">{{ $ticket->description }}</dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Created</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $ticket->created_at->format('F j, Y g:i A') }}</dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $ticket->updated_at->format('F j, Y g:i A') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection