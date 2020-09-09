<template>
    <div class="px-20">
        <div class="flex justify-between mt-20">
            <div>
                <p class="text-16 text-primary-darker font-bold">
                    {{ state.from.name }} ({{ state.from.iata }}) - {{ state.to.name }} ({{ state.to.iata }})
                </p>
                <p class="text-15 text-primary-darker mt-5">
                    getTripType() | {{ travelers() }} | Business class {{ stops() }}
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
</template>

<script>
    import FlightDetailSegment from 'Component/FlightDetailSegment'
    import FlightDetailSegmentStop from 'Component/FlightDetailSegmentStop'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            FlightDetailSegment,
            FlightDetailSegmentStop
        },

        props: {
            summary: Object
        },

        setup({summary}) {
            let { state, setSummary } = useFlightStore()

            setSummary(summary)

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
            }
        }
    }
</script>
