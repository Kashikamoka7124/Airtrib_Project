@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Payments
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $payment->id }}"></data-row>
        <data-row name="Customer" href="/admin/customers/{{ $payment->customer_id }}" data="{{ $payment->customer->name }}"></data-row>
        <data-row name="Booking" href="/admin/bookings/{{ $payment->booking_id }}" data="Booking #{{ $payment->booking_id }}"></data-row>
        <data-row name="Amount" data="${{ $payment->amount }}"></data-row>
    </div>
@endsection
