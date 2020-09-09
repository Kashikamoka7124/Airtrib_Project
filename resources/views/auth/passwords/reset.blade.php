@extends('layouts.page')

@section('content')
<div class="bg-white-90 rounded mt-80 py-80">
    <div class="flex justify-center mb-40">
        <div>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
            <h1 class="text-primary-darker text-30 tracking-wider uppercase py-6">
                Reset Password
            </h1>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
        </div>
    </div>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

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
                <input class="form-input text-center border-0 mr-6" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>

                <input class="form-input text-center border-0 mr-6" type="password" name="password" placeholder="Password" required>

                <input class="form-input text-center border-0" type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
        </div>

        <div class="flex justify-center mt-40">
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </div>
    </form>
</div>
@endsection
