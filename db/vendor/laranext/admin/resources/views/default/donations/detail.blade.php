@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Donations
    </div>
@endsection

@section('content')
    <div class="card py-3 px-6">
        <data-row name="ID" data="{{ $donation->id }}"></data-row>
    </div>
@endsection
