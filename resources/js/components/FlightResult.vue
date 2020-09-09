<template>
    <div class="bg-white rounded px-15 py-15" v-if="detail" key="flight-result">
        <div v-for="(itinerarie, itinerarieIndex) in flight.itineraries" class="mb-20">
            <p class="text-15 text-primary font-bold" v-if="state.tripType != 'multicity' && itinerarieIndex == 0">
                Outbound
            </p>
            <p class="text-15 text-primary font-bold" v-if="state.tripType != 'multicity' && itinerarieIndex == 1">
                Return
            </p>
            <p class="text-15 text-primary-darker mt-4">
                {{ new Date(itinerarie.segments[0].departure.at).toUTCDateString() }} |
                Duration {{ duration(itinerarie.duration) }} |
                Arrives {{ new Date(itinerarie.segments.last().arrival.at).toUTCDateString() }}
            </p>

            <div class="border border-primary-light rounded mt-8 p-15">
                <div v-for="(segment, index) in itinerarie.segments">
                    <flight-detail-segment :segment="segment"
                                           :index="index + 1"
                                           :total="itinerarie.segments.length"
                    ></flight-detail-segment>

                    <flight-detail-segment-stop v-if="(itinerarie.segments.length - 1) != index"
                                                :departure="itinerarie.segments[index + 1].departure.at"
                                                :arrival="segment.arrival.at"
                    ></flight-detail-segment-stop>
                </div>
            </div>
        </div>

        <div class="flex">
            <div class="flex-1 pr-15">
                <div class="flex mt-20">
                    <p class="text-15 text-primary font-bold">Baggage</p>
                    <p class="text-14 text-secondary-light pl-20">Price include per person</p>
                </div>

                <div class="flex items-center mt-15">
                    <div>
                        <img src="img/2-bags.svg" class="h-30">
                    </div>
                    <div>
                        <p class="font-roboto text-15 text-secondary-light ml-15">
                            {{ flight.travelerPricings[0]['fareDetailsBySegment'][0]['includedCheckedBags']['quantity'] }} free checked bags. Max 32 kg - 158 cm (h+w+l) <br>
                            Cabin bag free. Max 10kg - 55 x 35 x 25 cm
                        </p>
                    </div>
                </div>

                <div class="border border-primary-light rounded px-15 py-10 mt-20">
                    <p class="text-secondary-light text-13">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutquis nostrud exerci tation ullamcorper
                    </p>
                </div>
            </div>

            <div class="flex flex-col bg-white rounded px-15 py-13 mt-20" style="width: 170px;">
                <button class="btn btn-primary mb-15 w-full" @click="selectFlight(flight)">
                    Select
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.62 17.39" width="7" height="13" class="ml-10"><polyline points="0.5 0.5 8.92 8.92 0.94 16.89" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"/></svg>
                </button>
                <p class="text-24 mt-15 font-bold text-primary text-center">
                    $ {{ flight.price.total }}
                </p>
                <p class="text-10 text-secondary-light text-center">
                    No ticket refund <br>
                    or changes
                </p>

                <div class="flex justify-center cursor-pointer mt-15" @click="detail = false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="22" height="22"><circle cx="15" cy="15" r="15" fill="#603b3f"/><polyline points="20.99 17.21 14.84 10.82 9.01 17.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>

                    <p class="font-roboto text-15 text-secondary pl-18">Detail</p>
                </div>
            </div>
        </div>
    </div><!-- /.detail -->

    <div class="flex bg-primary-light rounded" v-else key="flight-result">
        <div class="flex-1 bg-white rounded border-r border-dashed border-primary-light pt-25 px-15 pb-15">
            <div class="flex items-center" v-for="(flight, index) in flight.itineraries">
                <div class="mr-20" style="width: 30%;">
                    <img :src="'/img/logos/' + flight.segments[0].carrierCode + '.png'"
                         class="w-full"
                         v-if="airLineLogos.includes(flight.segments[0].carrierCode)"
                    >
                    <p v-else>
                        {{ state.response.dictionaries.carriers[flight.segments[0].carrierCode] }}
                    </p>
                </div>

                <div class="flex flex-1 pl-15">
                    <div>
                        <p class="font-roboto text-secondary-light text-13">
                            {{ flight.segments[0].departure.at.replace(/^[^:]*([0-2]\d:[0-5]\d).*$/, '$1') }}
                        </p>
                        <p class="text-15 text-primary-darker">
                            {{ flight.segments[0].departure.iataCode }}
                        </p>
                    </div>
                    <div class="flex flex-1 items-center px-15">
                        <div class="flex-1">
                            <p class="font-roboto text-center text-secondary-light text-13">
                                {{ duration(flight.duration) }}
                            </p>
                            <div class="flex items-center justify-center w-full h-2 bg-primary-light my-5">
                                <div class="bg-white px-5 stop-dott" v-for="stopPoint in flight.segments.length - 1">
                                    <div class="w-9 h-9 bg-primary-light rounded-full">&nbsp;</div>
                                </div>
                            </div>

                            <p class="font-roboto text-green text-center text-12" v-if="flight.segments.length == 1" key="flight-stops">
                                Non stop
                            </p>

                            <div class="flex items-center justify-center" v-else key="flight-stops">
                                <span class="font-roboto text-red text-center text-12">
                                    {{ flight.segments.length - 1}} {{ flight.segments.length == 2 ? 'stop' : 'stops' }}
                                </span>
                                <span class="ml-10 text-13 text-primary-darker uppercase">
                                    {{ flight.segments[0].arrival.iataCode }}
                                    {{ flight.segments.length > 2 ? ' - ' + flight.segments[1].arrival.iataCode : '' }}
                                </span>
                            </div>
                        </div>
                        <div class="ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.65 21.35" width="22" height="20"><path d="M22,10.68a1.63,1.63,0,0,0-1.58-1.59H14.6L9.31.63H7.19L9.84,9.09H4L2.43,7H.84l1.06,3.7L.84,14.37H2.43L4,12.26H9.84L7.19,20.72H9.31l5.29-8.46h5.83A1.62,1.62,0,0,0,22,10.68Z" fill="none" stroke="#ab8a56" stroke-miterlimit="10" stroke-width="1.27"/></svg>
                        </div>
                    </div>
                    <div>
                        <p class="font-roboto text-secondary-light text-13">
                            {{ flight.segments.slice(-1)[0].arrival.at.replace(/^[^:]*([0-2]\d:[0-5]\d).*$/, '$1') }}
                        </p>
                        <p class="text-15 text-primary-darker">
                            {{ flight.segments.slice(-1)[0].arrival.iataCode }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-end mt-30">
                <div class="h-30">
                    <img src="img/2-bags.svg" class="h-full">
                </div>
                <p class="border-t border-primary-light ml-15 pt-5 pr-20 text-12 text-secondary-light">
                    {{ flight.travelerPricings[0]['fareDetailsBySegment'][0]['includedCheckedBags']['quantity'] }} checked bags included + 1 cabin bag
                </p>
                <div>
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white rounded px-15 py-13" style="width: 170px;">
            <button class="btn btn-primary mb-15 w-full" @click="selectFlight(flight)">
                Select
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.62 17.39" width="7" height="13" class="ml-10"><polyline points="0.5 0.5 8.92 8.92 0.94 16.89" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"/></svg>
            </button>
            <p class="text-24 mt-15 font-bold text-primary text-center">
                $ {{ flight.price.total }}
            </p>
            <p class="text-10 text-secondary-light text-center">
                No ticket refund <br>
                or changes
            </p>

            <div class="flex justify-center cursor-pointer mt-15" @click="detail = true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="22" height="22"><circle cx="15" cy="15" r="15" fill="#603b3f"/><polyline points="20.99 12.79 14.84 19.18 9.01 12.79" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>

                <p class="font-roboto text-15 text-secondary pl-18">Detail</p>
            </div>
        </div>
    </div>
</template>

<script>
    import FlightDetailSegment from '@/components/FlightDetailSegment'
    import FlightDetailSegmentStop from '@/components/FlightDetailSegmentStop'
    import { ref } from '@vue/composition-api'
    import { useFlightStore } from 'Store/flight'
    import router from '@/router'

    export default {
        components: {
            FlightDetailSegment,
            FlightDetailSegmentStop
        },

        props: {
            flight: Object
        },

        setup() {
            let { state } = useFlightStore()
            let detail = ref(false)
            let airLineLogos = [
                'AF',
                'LX',
                'BA',
                'LH',
            ]

            function duration(duration) {
                const result = /([0-9]+H)((?:[0-9]+M)?)/i.exec(duration)

                return result[1].replace('H', 'h') + ' ' + (result[2].replace('M', '') || '')
            }

            function selectFlight(flight) {
                // request for confirm price
                // after response we will show travelers form page.

                state.selectedFlight = flight
                router.push('flights/flight' + window.location.search)
            }

            return {
                state,
                detail,
                airLineLogos,
                duration,
                selectFlight
            }
        }
    }
</script>

<style>
    .stop-dott:not(:first-child) {
        margin-left: 30px;
    }
</style>
