@extends('layouts.page')

@section('content')
<div class="bg-white-90 rounded mt-80 py-80">
    <div class="flex justify-center mb-40">
        <div>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
            <h1 class="text-primary-darker text-30 tracking-wider uppercase py-6">
                Verify Your Email Address
            </h1>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
        </div>
    </div>

    @if (session('resent'))
        <div class="text-22 tracking-wider text-primary-darker text-center font-playfair mb-40">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <div class="mx-auto text-center" style="max-width: 70%;">
        <p class="">
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </p>
        <p class="mt-8">
            {{ __('If you did not receive the email') }},
        </p>

        <form class="mt-15" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="p-0 m-0 text-primary">{{ __('click here to request another') }}</button>.
        </form>
    </div>
</div>
@endsection
