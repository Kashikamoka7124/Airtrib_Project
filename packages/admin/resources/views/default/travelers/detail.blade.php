@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Travelers
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $traveler->id }}"></data-row>
        <data-row name="Gender" data="{{ ucfirst($traveler->gender) }}"></data-row>
        <data-row name="Name" data="{{ $traveler->name }}"></data-row>
        <data-row name="Email" data="{{ $traveler->email }}"></data-row>
        <data-row name="Phone" data="{{ $traveler->phone }}"></data-row>
        <data-row name="Birth Date" data="{{ $traveler->birth_date }}"></data-row>
    </div>
@endsection
