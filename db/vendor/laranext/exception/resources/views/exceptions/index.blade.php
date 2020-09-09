@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Exceptions
    </div>

    <div class="flex items-center ml-auto">
        <refresh-button name="exception"></refresh-button>
    </div>
@endsection

@section('content')
    <v-index name="exception"
             uri="exceptions"
             title="Exception"
             no-actions
             no-filters
             no-create
    ></v-index>
@endsection
