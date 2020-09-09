@extends('theme::layouts.split-menu')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Language Settings
    </div>
@endsection

@section('menu')
    <div class="card overflow-hidden py-2 w-56">
        <a href="/admin/languages/en" class="sub-menu-item {{ isActive('en', 3) }}">English</a>
        <a href="/admin/languages/fr" class="sub-menu-item {{ isActive('fr', 3) }}">French</a>
        <a href="/admin/languages/es" class="sub-menu-item {{ isActive('es', 3) }}">Spanish</a>
    </div>
@endsection

@section('content')
    <div class="card mb-4">
        <p class="text-sm text-gray-700 py-4 px-5">
            <span class="text-red-500">Note:</span> For pluralization please use "|" like this "There is one apple | There are many apples"
        </p>
    </div>

    <v-form namespace="setting"
            uri="admin/languages/{{ $language }}"
    ></v-form>
@endsection
