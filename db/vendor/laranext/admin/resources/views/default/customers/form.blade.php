@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Customers
    </div>
@endsection

@section('content')
    <v-form name="customer"
            uri="admin/customers"
            title="Customer"
            id="{{ $customer->id }}"
    ></v-form>
@endsection
