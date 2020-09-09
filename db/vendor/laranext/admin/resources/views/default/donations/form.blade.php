@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Donations
    </div>
@endsection

@section('content')
    <v-form name="donation"
            uri="admin/donations"
            title="Donation"
            id="{{ $donation->id }}"
    ></v-form>
@endsection
