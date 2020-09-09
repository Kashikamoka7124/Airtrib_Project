@extends('layouts.client')

@section('client-content')
    @if(!$booking)
        <div class="py-50">
            <p class="text-center">You haven't booked any flight yet.</p>
        </div>
    @else
        <div class="flex mt-40">
            <div class="w-1/3">
                @foreach($customer->bookings as $bookingSummary)
                    <a href="/client/travels/{{ $bookingSummary->id }}" class="block px-15 py-15 border-b border-primary text-12 text-white bg-primary-darker">
                        <p>{{ Carbon\Carbon::parse($bookingSummary->summary['departureDate'])->format('D M d, Y') }}</p>
                        <p class="font-bold mt-5">
                            {{ $bookingSummary->summary['from']['name'] }} ({{ $bookingSummary->summary['from']['iata'] }})
                            -
                            {{ $bookingSummary->summary['to']['name'] }} ({{ $bookingSummary->summary['to']['iata'] }})
                        </p>
                    </a>
                @endforeach
            </div>

            <div class="w-2/3 pl-40 pr-20">
                <div class="border border-primary rounded mt-30">
                    <h3 class="border-b border-primary h-40 px-20 flex items-center text-primary-darker text-20">
                        Travelers
                    </h3>

                    <div class="py-20">
                        @foreach($booking->travelers as $traveler)
                            <div class="flex">
                                <div class="w-2/5 pl-30">{{ $traveler->first_name }} {{ $traveler->last_name }}</div>
                                <div class="w-3/5">Adult / 16+ years</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="border border-primary rounded mt-30">
                    <h3 class="border-b border-primary h-40 px-20 flex items-center text-primary-darker text-20">
                        Summary of your flight
                    </h3>

                    <div class="py-20">
                        <booking-summary :summary="{{ json_encode($booking->summary) }}"></booking-summary>
                    </div>
                </div>

                <div class="border border-primary rounded mt-30">
                    <h3 class="border-b border-primary h-40 px-20 flex items-center text-primary-darker text-20">
                        Payment
                    </h3>

                    <div class="py-20">
                        <div class="flex">
                            <div class="w-2/5 pl-30">Amount</div>
                            <div class="w-3/5">{{ $booking->payment->amount }} USD</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
