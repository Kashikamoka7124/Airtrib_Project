@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Bookings
    </div>
@endsection

@section('content')
    <v-form name="booking"
            uri="admin/bookings"
            title="Booking"
            id="{{ $booking->id }}"
    ></v-form>
@endsection
