<template>
    <div id="booking-confirmation-main" class="bg-white-90 rounded py-35 px-30 mt-80 mx-auto" style="width: 800px;">
        <div class="flex justify-center cursor-pointer" @click="reload">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.58 26.59" width="36" height="36"><ellipse cx="13.29" cy="13.3" rx="12.24" ry="12.25" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.1"/><line x1="17.43" y1="9.16" x2="9.16" y2="17.43" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="17.43" y1="17.43" x2="9.16" y2="9.16" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
        </div>

        <h2 class="text-primary-darker text-36 text-center tracking-widest mt-20">Booking confirmation</h2>

        <p class="text-primary-darker text-18 mt-10 text-center">
            Thank you for trusting us and supporting <br>
            the tribal causes
        </p>

        <div class="bg-white rounded p-15 mt-20">
            <p class="text-22 text-primary-darker text-center">Summary of your flight</p>
            <p class="text-15 text-primary-darker text-center">Your e-ticket has been sent by email</p>

            <div class="flex justify-between mt-20">
                <div>
                    <p class="text-16 text-primary-darker font-bold">
                        {{ state.from.name }} ({{ state.from.iata }}) - {{ state.to.name }} ({{ state.to.iata }})
                    </p>
                    <p class="text-15 text-primary-darker mt-5">
                        {{ tripType }} | {{ travelers() }} | Business class {{ stops() }}
                    </p>
                </div>
                <div>
                    <p class="text-26 text-primary font-bold">
                        $ {{ state.selectedFlight.price.total }}
                    </p>
                </div>
            </div>

            <div class="mt-30">
                <div>
                    <p class="text-15 text-primary font-bold">Outbound</p>
                    <p class="text-15 text-primary-darker mt-4">
                        {{ new Date(state.selectedFlight.itineraries[0].segments[0].departure.at).toUTCDateString() }} |
                        Duration {{ isoToDuration(state.selectedFlight.itineraries[0].duration) }} |
                        Arrives {{ new Date(state.selectedFlight.itineraries[0].segments.last().arrival.at).toUTCDateString() }}
                    </p>

                    <div class="border border-primary-light rounded mt-8 p-15">
                        <div v-for="(segment, index) in state.selectedFlight.itineraries[0].segments">
                            <flight-detail-segment :segment="segment"
                                                   :index="index + 1"
                                                   :total="state.selectedFlight.itineraries[0].segments.length"
                            ></flight-detail-segment>

                            <flight-detail-segment-stop v-if="(state.selectedFlight.itineraries[0].segments.length - 1) != index"
                                                        :departure="state.selectedFlight.itineraries[0].segments[index + 1].departure.at"
                                                        :arrival="segment.arrival.at"
                            ></flight-detail-segment-stop>
                        </div>
                    </div>
                </div>

                <div class="mt-20" v-if="state.selectedFlight.itineraries.length > 1">
                    <p class="text-15 text-primary font-bold">Return</p>
                    <p class="text-15 text-primary-darker mt-4">
                        {{ new Date(state.selectedFlight.itineraries[1].segments[0].departure.at).toUTCDateString() }} |
                        Duration {{ isoToDuration(state.selectedFlight.itineraries[1].duration) }} |
                        Arrives {{ new Date(state.selectedFlight.itineraries[1].segments.last().arrival.at).toUTCDateString() }}
                    </p>

                    <div class="border border-primary-light rounded mt-8 p-15">
                        <div v-for="(segment, index) in state.selectedFlight.itineraries[1].segments">
                            <flight-detail-segment :segment="segment"
                                                   :index="index + 1"
                                                   :total="state.selectedFlight.itineraries[1].segments.length"
                            ></flight-detail-segment>

                            <flight-detail-segment-stop v-if="(state.selectedFlight.itineraries[1].segments.length - 1) != index"
                                                        :departure="state.selectedFlight.itineraries[1].segments[index + 1].departure.at"
                                                        :arrival="segment.arrival.at"
                            ></flight-detail-segment-stop>
                        </div>
                    </div>
                </div>

                <div class="flex mt-20">
                    <p class="text-15 text-primary font-bold">Baggage</p>
                    <p class="text-14 text-secondary-light pl-20">Price include per person</p>
                </div>

                <div class="flex items-center mt-15">
                    <div>
                        <img src="/img/2-bags.svg" class="h-30">
                    </div>
                    <div>
                        <p class="font-roboto text-15 text-secondary-light ml-15">
                            {{ state.selectedFlight.travelerPricings[0]['fareDetailsBySegment'][0]['includedCheckedBags']['quantity'] }} free checked bags. Max 32 kg - 158 cm (h+w+l) <br>
                            Cabin bag free. Max 10kg - 55 x 35 x 25 cm
                        </p>
                    </div>
                </div>

                <p class="text-15 text-primary font-bold mt-15">Cancellation insurance</p>

                <div class="border border-primary-light rounded px-15 py-10 mt-10">
                    <p class="text-secondary-light text-13">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostr ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    </p>
                </div>
            </div>
        </div>

        <ConfirmationOrganizations/>
    </div>
</template>

<script>
    import FlightDetailSegment from 'Component/FlightDetailSegment'
    import FlightDetailSegmentStop from 'Component/FlightDetailSegmentStop'
    import ConfirmationOrganizations from 'Component/ConfirmationOrganizations'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            FlightDetailSegment,
            FlightDetailSegmentStop,
            ConfirmationOrganizations
        },

        setup() {
            let { state, tripType } = useFlightStore()

            function reload() {
                window.location = '/'
            }

            function select(item) {
                console.log('item: ' + item)

                if (this.selected.includes(item)) {
                    var index = this.selected.indexOf(item)
                    this.selected.splice(index, 1)

                    return
                }

                if (this.selected.length < 3) {
                    this.selected.push(item)
                }
            }

            function getTime(time) {
                return time.match(/([0-9]+:[0-9]+)/g)[0]
            }

            function travelers() {
                if (state.children)
                    return state.adults + state.children + ' Travelers'

                return state.adults > 1 ? state.adults + ' Adults' : state.adults + ' Adult'
            }

            function stops() {
                if (state.stop === 0)
                    return '| Non Stop'

                if (state.stop) {
                    const stop = state.stop > 1 ? ' Stops' : ' Stop'

                    return '| ' + state.stop + stop
                }

                return ''
            }

            function getTripType() {
                const currentType = this.tripType

                let result = this.tripTypes.find(function (type) {
                    return type.value == currentType
                })

                return result.label
            }

            return {
                state,
                organizations: [],
                selected: [],
                getTime,
                travelers,
                stops,
                reload,
                tripType
            }
        }
    }
</script>

<style scoped>
    .selected {
        transform: rotate(45deg);
        color: #ffffff;
        background-color: #AB8A56;
    }
</style>
