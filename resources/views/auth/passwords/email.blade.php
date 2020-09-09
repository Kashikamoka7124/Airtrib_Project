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

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        @if (session('status'))
            <div class="text-22 tracking-wider text-primary-darker text-center font-playfair mb-40">
                {{ session('status') }}
            </div>
        @endif

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

        <div class="flex justify-center mt-10 mx-auto" style="max-width: 40%;">
            <input class="form-input text-center border-0 w-full" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        </div>

        <div class="flex justify-center mt-40">
            <button type="submit" class="btn btn-primary">
                Password Reset Link
            </button>
        </div>
    </form>
</div>
@endsection
