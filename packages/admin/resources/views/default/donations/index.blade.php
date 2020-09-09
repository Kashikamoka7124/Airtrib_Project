@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Donations
    </div>
@endsection

@section('content')
    <v-index name="donation"
             uri="admin/donations"
             title="Donation"
             search-column="amount"
             no-actions
             no-filters
             no-create
             no-edit
             no-delete
             no-select
             no-view
    ></v-index>
@endsection
