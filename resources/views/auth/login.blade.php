@extends('layouts.page')

@section('content')
<div class="bg-white-90 rounded mt-80 py-80">
    <div class="flex justify-center mb-40">
        <div>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
            <h1 class="text-primary-darker text-30 tracking-wider uppercase py-6">
                Login
            </h1>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        @if ($errors->any())
            <div class="flex justify-center mb-20">
                <div>
                    <ul class="text-red text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="flex justify-center mt-10">
            <div class="flex">
                <input class="form-input text-center border-0 mr-6" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                <input class="form-input text-center border-0" type="password" name="password" placeholder="Password" required>
            </div>
        </div>

        <div class="flex justify-center mt-40">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    <div class="flex justify-center mt-20">
        <a href="/password/reset" class="font-bold text-14 text-primary">Click here if you forgot your password</a>
    </div>

    <div class="text-center text-14 mb-15 mt-40 text-black">
        Don't have an account yet?
    </div>

    <div class="flex justify-center">
        <a href="/register" class="btn btn-outline">
            Create an account
        </a>
    </div>
</div>
@stop
