@extends('theme::layouts.default')

@section('topbar')
    <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest py-6">
        Users
    </div>
@endsection

@section('content')
    <v-index name="user"
             uri="admin/users"
             title="User"
             no-actions
             no-filters
             no-delete
             no-create
             no-select
             no-view
    ></v-index>
@endsection
