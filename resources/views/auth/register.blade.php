@extends('layouts.page')

@section('content')
<div class="bg-white-90 rounded mt-80 py-80">
    <div class="flex justify-center mb-40">
        <div>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
            <h1 class="text-primary-darker text-30 tracking-wider uppercase py-6">
                Create an account
            </h1>
            <div class="bg-primary-darker h-1 mx-10">&nbsp;</div>
        </div>
    </div>

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

    <form method="POST" action="{{ route('register') }}" class="px-100">
        @csrf

        <register-fields :old="{{ json_encode(old()) }}"
                         :countries="{{ json_encode($countries) }}"
                         :corporate-types="{{ json_encode($corporateTypes) }}"
                         :is-corporate-form="{{ json_encode($isCorporateForm) }}"
        ></register-fields>

        <register-organizations :organizations="{{ $organizations }}" :old="{{ json_encode(old('organizations')) }}"></register-organizations>

        <div class="mt-20 text-center text-14 tracking-wider text-primary-darker">
            Would you like to receive promotions and special offers from AirTrib

            <label class="inline-flex items-center pl-20">
                <input type="radio" class="form-radio" name="offers" value="1">
                <span class="ml-8">Yes</span>
            </label>

            <label class="inline-flex items-center pl-20">
                <input type="radio" class="form-radio" name="offers" value="0" checked>
                <span class="ml-8">No</span>
            </label>
        </div>

        <div class="flex justify-center mx-auto mt-20" style="max-width: 75%;">
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox" name="accept_terms" {{ old('accept_terms') ? 'checked' : '' }}>
                </label>
            </div>

            <div class="pl-15 tracking-wider text-primary-darker">
                <p class="text-15">
                    I accept <a href="#" class="underline">the general conditions</a> of AirTrib account.
                </p>
                <p class="text-11 mt-5">
                    By accepting these conditions, you agree to receive by e-mail <br> information related to the use of your account.
                </p>
            </div>
        </div>

        <div class="flex justify-center mt-20">
            <button type="submit" class="btn btn-primary">
                Create account
            </button>
        </div>
    </form>
</div>
@endsection
