@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Airports
    </div>
@endsection

@section('content')
    <v-index name="airport"
             uri="admin/airports"
             title="Airport"
             no-actions
             no-filters
    ></v-index>
@endsection
