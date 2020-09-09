<template>
    <div id="payment-main" class="bg-white-90 rounded py-35 px-30 mt-80 mx-auto" style="width: 800px;">
        <div class="bg-white rounded p-15">
            <div class="flex justify-between">
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

            <div class="flex items-center mt-15">
                <div class="w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.34 11.4" width="41" height="11"><path d="M34.13,0,28.08,8.76a5.19,5.19,0,0,1-3.65,2.38v.26h6.73a4.93,4.93,0,0,0,4-2.44l6.21-9Z" fill="#e20e1c" fill-rule="evenodd"/><path d="M5.29,6.3h3.4L6.92,3.12,5.29,6.3Zm6,4.47L10,8.48H4.12L2.91,10.77H0L5.81.34H8.46l6.59,10.43Zm5.48,0V.33H27V2.57H19.82V5.16h7V7.4h-7v3.37Z" fill="#323374" fill-rule="evenodd"/></svg>
                </div>
                <div class="w-40">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.65 21.35" width="20" height="19"><path d="M22,10.68a1.63,1.63,0,0,0-1.58-1.59H14.6L9.31.63H7.19L9.84,9.09H4L2.43,7H.84l1.06,3.7L.84,14.37H2.43L4,12.26H9.84L7.19,20.72H9.31l5.29-8.46h5.83A1.62,1.62,0,0,0,22,10.68Z" fill="none" stroke="#ab8a56" stroke-miterlimit="10" stroke-width="1.27"/></svg>
                </div>
                <div>
                    <p class="text-primary-darker text-15">
                        {{ state.selectedFlight.itineraries[0].segments.length == 1 ? 'Non Stop' : (state.selectedFlight.itineraries[0].segments.length - 1) + ' Stop'}}
                        -
                        {{ isoToDuration(state.selectedFlight.itineraries[0].duration) }}
                        |
                        {{ new Date(state.selectedFlight.itineraries[0].segments[0].departure.at).toUTCDateString() }}
                        |
                        {{ getTime(state.selectedFlight.itineraries[0].segments[0].departure.at) }}
                        {{ state.selectedFlight.itineraries[0].segments[0].departure.iataCode }}
                        -
                        {{ getTime(state.selectedFlight.itineraries[0].segments.last().arrival.at) }}
                        {{ state.selectedFlight.itineraries[0].segments.last().arrival.iataCode }}
                    </p>
                </div>
            </div>

            <div class="flex items-center mt-10" v-if="state.selectedFlight.itineraries.length > 1">
                <div class="w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.34 11.4" width="41" height="11"><path d="M34.13,0,28.08,8.76a5.19,5.19,0,0,1-3.65,2.38v.26h6.73a4.93,4.93,0,0,0,4-2.44l6.21-9Z" fill="#e20e1c" fill-rule="evenodd"/><path d="M5.29,6.3h3.4L6.92,3.12,5.29,6.3Zm6,4.47L10,8.48H4.12L2.91,10.77H0L5.81.34H8.46l6.59,10.43Zm5.48,0V.33H27V2.57H19.82V5.16h7V7.4h-7v3.37Z" fill="#323374" fill-rule="evenodd"/></svg>
                </div>
                <div class="w-40">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.65 21.35" width="20" height="19"><path d="M22,10.68a1.63,1.63,0,0,0-1.58-1.59H14.6L9.31.63H7.19L9.84,9.09H4L2.43,7H.84l1.06,3.7L.84,14.37H2.43L4,12.26H9.84L7.19,20.72H9.31l5.29-8.46h5.83A1.62,1.62,0,0,0,22,10.68Z" fill="none" stroke="#ab8a56" stroke-miterlimit="10" stroke-width="1.27"/></svg>
                </div>
                <div>
                    <p class="text-primary-darker text-15">
                        {{ state.selectedFlight.itineraries[1].segments.length == 1 ? 'Non Stop' : (state.selectedFlight.itineraries[1].segments.length - 1) + ' Stop'}}
                        -
                        {{ isoToDuration(state.selectedFlight.itineraries[1].duration) }}
                        |
                        {{ new Date(state.selectedFlight.itineraries[1].segments[0].departure.at).toUTCDateString() }}
                        |
                        {{ getTime(state.selectedFlight.itineraries[1].segments[0].departure.at) }}
                        {{ state.selectedFlight.itineraries[1].segments[0].departure.iataCode }}
                        -
                        {{ getTime(state.selectedFlight.itineraries[1].segments.last().arrival.at) }}
                        {{ state.selectedFlight.itineraries[1].segments.last().arrival.iataCode }}
                    </p>
                </div>
            </div>

            <div class="flex items-center mt-10">
                <div class="w-60">
                    &nbsp;
                </div>
                <div class="w-40">
                    <img src="/img/2-bags.svg" class="h-20">
                </div>
                <div>
                    <p class="text-primary-darker text-15">
                        {{ state.selectedFlight.travelerPricings[0]['fareDetailsBySegment'][0]['includedCheckedBags']['quantity'] }} checked bags included + 1 cabin bag / per person
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-primary-dark-90 rounded border border-primary-light mt-20">
            <payment-form></payment-form>
        </div>
    </div>
</template>

<script>
    import PaymentForm from 'Component/PaymentForm'
    import { ref } from '@vue/composition-api'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            PaymentForm
        },

        setup() {
            let { state, tripType } = useFlightStore()

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

            return {
                state,
                travelers,
                stops,
                getTime,
                tripType,
            }
        }
    }
</script>
