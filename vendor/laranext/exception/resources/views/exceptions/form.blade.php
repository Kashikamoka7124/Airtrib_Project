@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Exceptions
    </div>
@endsection

@section('content')
    <v-form name="exception"
            uri="exceptions"
            title="Exception"
            id="{{ $exception->id }}"
    ></v-form>
@endsection
