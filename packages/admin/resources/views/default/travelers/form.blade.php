@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Travelers
    </div>
@endsection

@section('content')
    <v-form name="traveler"
            uri="admin/travelers"
            title="Traveler"
            id="{{ $traveler->id }}"
    ></v-form>
@endsection
