@extends('layouts.page')

@section('content')
<div id="client" class="bg-white-90 rounded mt-80 px-30 pt-30 pb-30">
    <div class="flex justify-center mb-40">
        <div class="text-primary-darker font-playfair">
            <p class="text-20 text-center mb-20">{{ auth()->user()->name }}</p>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
            <h1 class="text-30 tracking-wider uppercase py-6">Account</h1>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
        </div>
    </div>

    <div>
        <div class="flex">
            <a href="/client/profile" class="flex-1 flex items-center justify-center border rounded-t h-40 font-playfair text-20 {{  request()->segment(2) == 'profile' ? 'bg-primary text-white border-transparent' : 'border-primary-darker text-primary-darker' }}">
                Profile
            </a>
            <a href="/client/travels" class="flex-1 flex items-center justify-center border border-primary-darker rounded-t h-40 font-playfair text-20 {{  request()->segment(2) == 'travels' ? 'bg-primary text-white' : 'text-primary-darker' }}">
                Travels
            </a>
            <a href="/client/tribes" class="flex-1 flex items-center justify-center border border-primary-darker rounded-t h-40 font-playfair text-20 {{  request()->segment(2) == 'tribes' ? 'bg-primary text-white' : 'text-primary-darker' }}">
                Tribes
            </a>
            <a href="/client/settings" class="flex-1 flex items-center justify-center border border-primary-darker rounded-t h-40 font-playfair text-20 {{  request()->segment(2) == 'settings' ? 'bg-primary text-white' : 'text-primary-darker' }}">
                Settings
            </a>
        </div>

        <div class="bg-white rounded-b py-20">
            @yield('client-content')
        </div>
    </div>
</div>
@stop

@section('scripts')
    <script>
        window.Form = {
            old: @json(old()),
        }
    </script>
@stop
