@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Customers
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $customer->id }}"></data-row>

        @if(!$customer->individual)
            <data-row name="Corporate Name" data="{{ ucfirst($customer->corporate_name) }}"></data-row>
            <data-row name="Corporate Type" data="{{ ucfirst($customer->corporateType->name) }}"></data-row>
        @endif

        <data-row name="Gender" data="{{ ucfirst($customer->gender) }}"></data-row>
        <data-row name="Name" data="{{ $customer->name }}"></data-row>
        <data-row name="Email" data="{{ $customer->email }}"></data-row>
        <data-row name="Phone" data="{{ $customer->phone }}"></data-row>
        <data-row name="Birth Date" data="{{ $customer->birth_date }}"></data-row>
        <data-row name="Postcode" data="{{ $customer->postcode }}"></data-row>
        <data-row name="City" data="{{ $customer->city }}"></data-row>
        <data-row name="Country" data="{{ $customer->country->name }}"></data-row>
        <data-row name="Address" data="{{ $customer->address }}"></data-row>
        <data-row name="Address 2" data="{{ $customer->address_2 }}"></data-row>
    </div>

    <h3 class="text-sm text-gray-700 uppercase font-bold tracking-widest pt-12">Bookings</h3>

    <v-index name="booking"
             uri="admin/bookings?customer={{ $customer->id }}"
             :except="['customer']"
             title="Booking"
             search-column="amadeus_id"
             no-actions
             no-filters
             no-create
             no-edit
             no-delete
             no-select
             no-search
    ></v-index>
@endsection
