@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Organizations
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $organization->id }}"></data-row>
        <data-row name="Name" data="{{ $organization->name }}"></data-row>
        <data-row name="Image">
            <img src="/{{ $organization->image }}">
        </data-row>
    </div>
@endsection
