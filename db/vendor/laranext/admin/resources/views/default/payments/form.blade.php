@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Payments
    </div>
@endsection

@section('content')
    <v-form name="payment"
            uri="admin/payments"
            title="Payment"
            id="{{ $payment->id }}"
    ></v-form>
@endsection
