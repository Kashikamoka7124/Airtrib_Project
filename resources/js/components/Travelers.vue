<template>
    <div>
        <div id="selected-flight-main" class="flex bg-white-90 rounded py-35 px-30 mt-6">
            <div class="w-1/3 px-10">
                <div>
                    <div class="flex items-center h-42 bg-white rounded px-15 cursor-pointer">
                        <span class="text-primary-darker font-bold text-14">Airline program</span>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.49 23.49" width="18" height="18" class="ml-auto"><path d="M11.75,2A9.75,9.75,0,1,1,2,11.75,9.75,9.75,0,0,1,11.75,2m0-2A11.75,11.75,0,1,0,23.49,11.75,11.75,11.75,0,0,0,11.75,0Z" fill="#ab8a56"/><polyline points="16.44 10.01 11.62 15.02 7.05 10.01" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                    </div>
                </div>
            </div><!-- ./sidebar -->

            <div class="w-2/3 px-10">
                <div class="bg-white rounded p-15">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-16 text-primary-darker font-bold">
                                {{ state.from.name }} ({{ state.from.iata }}) - {{ state.to.name }} ({{ state.to.iata }})
                            </p>
                            <!-- <p class="text-15 text-primary-darker mt-5">
                                {{ getTripType() }} | {{ travelers() }} | Business class {{ stops() }}
                            </p> -->
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

                <div id="traveler-forms-container" class="bg-primary-dark-90 rounded border border-primary-light mt-20">
                    <traveler-form v-for="(traveler, index) in totalTravelers" :name="index" :key="traveler"></traveler-form>

                    <div class="my-10 text-red rounded bg-white-90 px-15 py-10 max-w-500 mx-auto" v-if="correct_traveler_info_error">
                        Please confirm first!
                    </div>

                    <div class="mt-30 flex justify-center my-20 mx-auto" style="max-width: 400px;">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox text-white items-start" v-model="correct_traveler_info">

                            <span class="ml-10 text-white">
                                I confirm that the informations of the passengers are correct and correspond to those on the travel documents.
                            </span>
                        </label>
                    </div>

                    <div class="flex justify-center mb-50">
                        <button class="btn btn-primary border-primary-light" @click="payment">
                            <span>Book your ticket</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TravelerForm from 'Component/TravelerForm'
    import { ref } from '@vue/composition-api'
    import { useFlightStore } from 'Store/flight'
    import { useTravelerStore } from 'Store/traveler'

    export default {
        components: {
            TravelerForm
        },

        setup(props, ctx) {
            let { state, totalTravelers } = useFlightStore()
            let correct_traveler_info = ref(false)
            let correct_traveler_info_error = ref(false)

            function payment() {
                if (!correct_traveler_info.value) {
                    correct_traveler_info_error.value = true
                    return
                }
                else {
                    correct_traveler_info_error.value = false
                }

                let travelers = []

                console.log( totalTravelers.value )
                // console.log( totalTravelers() )
                for (let i = 0; i < totalTravelers.value; i++) {
                    let { state: travelerState } = useTravelerStore(i)()
                    console.log(travelerState)
                    travelers.push(travelerState)
                }

                axios.post('verify-travelers', {
                    travelers
                })
                    .then(response => {
                        ctx.root.$router.push('/flights/payment' + window.location.search)
                    })
                    .catch(error => {
                        if (error.response.status == 422) {
                            state.travelersErrors = error.response.data.errors
                        }

                        let element = document.getElementById('traveler-forms-container')

                        element.scrollIntoView({behavior: "smooth"})
                    })
            }

            function getTime(time) {
                return time.match(/([0-9]+:[0-9]+)/g)[0]
            }

            function travelers() {
                if (this.children)
                    return this.adults + this.children + ' Travelers'

                return this.adults > 1 ? this.adults + ' Adults' : this.adults + ' Adult'
            }

            function stops() {
                if (this.stop === 0)
                    return '| Non Stop'

                if (this.stop) {
                    const stop = this.stop > 1 ? ' Stops' : ' Stop'

                    return '| ' + this.stop + stop
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
                correct_traveler_info,
                correct_traveler_info_error,
                totalTravelers,
                getTime,
                payment,
            }
        }
    }
</script>
