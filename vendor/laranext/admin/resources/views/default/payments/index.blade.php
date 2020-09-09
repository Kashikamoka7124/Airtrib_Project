@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Payments
    </div>
@endsection

@section('content')
    <v-index name="payment"
             uri="admin/payments"
             title="Payment"
             no-actions
             no-filters
             no-create
             no-edit
             no-delete
             no-select
    ></v-index>
@endsection
