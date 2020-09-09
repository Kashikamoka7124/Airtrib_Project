@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Users
    </div>
@endsection

@section('content')
    <v-form name="user"
            uri="admin/users"
            title="User"
            id="{{ $user->id }}"
    ></v-form>
@endsection
