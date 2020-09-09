@extends('layouts.client')

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@stop

@section('client-content')
    <div class="px-100">
        @if($userOrganizations->isEmpty())
            <p class="pt-40 text-red text-center">
                You have not yet chosen the organizations to support ! <br>
                Please select your favorite tribal causes. So you can change your choice at any time
            </p>
        @else
            <h3 class="text-primary-darker text-24 tracking-wider text-center mt-30">The organizations that you support</h3>

            <div class="flex justify-center mx-auto mt-40 mb-20" style="max-width: 75%;">
                @foreach($userOrganizations as $userOrganization)
                    <div class="mx-10">
                        <div class="bg-white border border-primary flex justify-center items-center p-30" style="width: 130px; height: 130px;">
                            <img src="/{{ $userOrganization->image }}">
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/client/update-organizations">
            @csrf

            <tribes-organizations :organizations="{{ $organizations }}" :old="{{ json_encode(old('organizations')) }}"></tribes-organizations>

            <div class="flex justify-center mt-20">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>

        <div class="flex items-center justify-center border border-primary border-b-0 mx-auto mt-60 rounded-t h-40 font-playfair text-primary-darker text-20 tracking-wider" style="max-width: 75%;">
            <span>Organizations to support</span>
        </div>

        <div class="border border-primary rounded pt-20 pb-30 px-40">
            <p class="text-secondary-light text-12">
                AirTrib systematically transfers a third of its parts to organizations. Either fairly to all organizations if you have not made a choice, or to the organizations of your choice.
            </p>

            <div class="flex border-b border-primary-darker pb-5 mt-30">
                <div class="flex-1">
                    <h3 class="font-bold text-16 tracking-wider text-primary">Organisations</h3>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-16 tracking-wider text-primary">Date</h3>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-16 tracking-wider text-primary">Part</h3>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-16 tracking-wider text-primary">Amount</h3>
                </div>
            </div>

            <div class="border-b border-primary-darker py-5">
                <div class="flex">
                    <div class="flex-1">
                        <h3>Whole</h3>
                    </div>
                    <div class="flex-1">
                        <h3>4-01-20</h3>
                    </div>
                    <div class="flex-1">
                        <h3>33%</h3>
                    </div>
                    <div class="flex-1">
                        <h3>$33</h3>
                    </div>
                </div>

                <div class="flex">
                    <div class="" style="width: 25%;">
                        <h3>Whole</h3>
                    </div>
                    <div class="flex-1 flex">
                        <div class="flex-1">
                            <h3>4-01-20</h3>
                        </div>
                        <div class="flex-1">
                            <h3>33%</h3>
                        </div>
                        <div class="flex-1">
                            <h3>$33</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($userOrganizations->isNotEmpty())
            <make-donation :organizations="{{ json_encode($userOrganizations) }}"></make-donation>
        @endif
    </div>
@endsection
