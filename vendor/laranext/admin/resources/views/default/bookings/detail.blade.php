@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Bookings
    </div>
@endsection

@section('content')
    @php($summary = $booking->summary)

    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $booking->id }}"></data-row>
        <data-row name="Customer" href="/admin/customers/{{ $booking->customer_id }}" data="{{ $booking->customer->name }}"></data-row>
        <data-row name="Journey">
            {{ $summary['from']['name'] }} ({{ $summary['from']['iata'] }}) - {{ $summary['to']['name'] }} ({{ $summary['to']['iata'] }})
        </data-row>
        <data-row name="Departure Date" data="{{ Carbon\Carbon::parse($booking->summary['departureDate'])->toFormattedDateString() }}"></data-row>
        <data-row name="Amount" data="${{ $booking->payment->amount }}"></data-row>
    </div>

    <h3 class="text-sm text-gray-700 uppercase font-bold tracking-widest pt-12">Travelers</h3>

    <v-index name="traveler"
             uri="admin/travelers?booking={{ $booking->id }}"
             title="Traveler"
             no-actions
             no-filters
             no-create
             no-edit
             no-delete
             no-select
             no-search
    ></v-index>
@endsection
