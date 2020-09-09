@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Airports
    </div>
@endsection

@section('content')
    <v-form name="airport"
            uri="admin/airports"
            title="Airport"
            id="{{ $airport->id }}"
    ></v-form>
@endsection
