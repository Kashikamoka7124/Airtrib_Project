@extends('layouts.page')

@section('content')
    <flight-search-form :request="{{ json_encode(request()->all()) }}"></flight-search-form>

    <travelers></travelers>
@stop
