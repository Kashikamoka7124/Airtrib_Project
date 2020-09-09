@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Exceptions
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $exception->id }}"></data-row>
        <data-row name="View As JSON" href="{{ $exception->id }}/json" data="Show"></data-row>
        <data-row name="Date" data="{{ $exception->created_at->toDayDateTimeString() }}"></data-row>
        <data-row name="Message" data="{{ $exception->message }}"></data-row>
        <data-row name="File" data="{{ $exception->file }}"></data-row>
        <data-row name="Line #" data="{{ $exception->line }}"></data-row>
        <data-row name="Context" data="{{ $exception->context }}"></data-row>
        <data-row name="Trace" data="{{ $exception->trace }}"></data-row>
    </div>
@endsection
