@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Organizations
    </div>
@endsection

@section('content')
    <v-form name="organization"
            uri="admin/organizations"
            title="Organization"
            id="{{ $organization->id }}"
    ></v-form>
@endsection
