@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Airports
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $airport->id }}"></data-row>
        <data-row name="Name" data="{{ $airport->name }}"></data-row>
        <data-row name="IATA Code" data="{{ $airport->iata }}"></data-row>
        <data-row name="City" data="{{ $airport->city }}"></data-row>
        <data-row name="City IATA Code" data="{{ $airport->city_iata }}"></data-row>
        <data-row name="Country" data="{{ $airport->country }}"></data-row>
    </div>
@endsection
