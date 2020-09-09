@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Users
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $user->id }}"></data-row>
        <data-row name="Name" data="{{ $user->name }}"></data-row>
        <data-row name="Email" data="{{ $user->email }}"></data-row>
    </div>
@endsection
