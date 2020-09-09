@extends('layouts.client')

@section('client-content')
    <form method="POST" action="profile/information" class="mx-auto py-50" style="max-width: 650px;">
        @csrf
        @method('PUT')

        @if ($errors->any() && old('block') == 'information')
            <div class="flex justify-center mb-10">
                <div>
                    <ul class="text-red text-sm">
                        @foreach ($errors->all() as $error)
                            <li class="py-6">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="flex items-center bg-primary text-white text-sm font-bold px-12 py-10 mb-10 rounded" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <input type="hidden" name="block" value="information">

        <client-form-card :data="{{ json_encode($information) }}"></client-form-card>

        <div class="flex justify-center mt-20">
            <button type="submit" class="btn btn-outline">Save</button>
        </div>
    </form>

    <form method="POST" action="profile/details" class="mx-auto py-50" style="max-width: 650px;">
        @csrf
        @method('PUT')

        @if ($errors->any() && old('block') == 'detail')
            <div class="flex justify-center mb-10">
                <div>
                    <ul class="text-red text-sm">
                        @foreach ($errors->all() as $error)
                            <li class="py-6">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <input type="hidden" name="block" value="detail">

        <client-form-card :data="{{ json_encode($details) }}"></client-form-card>

        <div class="flex justify-center mt-20">
            <button type="submit" class="btn btn-outline">Save</button>
        </div>
    </form>

    <form method="POST" action="profile/contact" class="mx-auto py-50" style="max-width: 650px;">
        @csrf
        @method('PUT')

        @if ($errors->any() && old('block') == 'contact')
            <div class="flex justify-center mb-10">
                <div>
                    <ul class="text-red text-sm">
                        @foreach ($errors->all() as $error)
                            <li class="py-6">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <input type="hidden" name="block" value="contact">

        <client-form-card :data="{{ json_encode($contact) }}"></client-form-card>

        <div class="flex justify-center mt-20">
            <button type="submit" class="btn btn-outline">Save</button>
        </div>
    </form>
@endsection
