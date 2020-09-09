<template>
    <div class="flex bg-white-90 rounded py-35 px-30 mt-6">
        <div class="w-1/3 px-10">
            <top-3></top-3>

            <sort-by></sort-by>

            <airport-filters></airport-filters>

            <departure-time-filters></departure-time-filters>

            <air-lines></air-lines>
        </div><!-- ./sidebar -->

        <div class="w-2/3 px-10">
            <div class="flex bg-white rounded">
                <div class="flex-1 flex items-center px-15 h-120">
                    <div>
                        <p class="text-primary-darker text-16 font-bold">
                            {{ state.from.name }} ({{ state.from.iata }}) - {{ state.to.name }} ({{ state.to.iata }})
                        </p>
                        <p class="text-15 text-primary-darker mt-10">
                            {{ tripType }} | {{ travelers() }} | Business class {{ stops() }}
                        </p>
                        <p class="text-15 text-primary-darker mt-5">
                            {{ new Date(state.departureDate).toUTCDateString() }} - {{ new Date(state.returnDate).toUTCDateString() }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col bg-primary rounded-r" style="width: 140px;">
                    <div class="flex flex-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.71 29.02" width="28" height="28"><path d="M28.13,25.65l-7.46-7.47a11.27,11.27,0,0,0,2.21-6.74,11.47,11.47,0,1,0-5.06,9.48l7.52,7.52a2,2,0,0,0,1.4.58,2,2,0,0,0,2-2A1.93,1.93,0,0,0,28.13,25.65ZM19.68,11.44a8.21,8.21,0,0,1-2.45,5.86l-.16.11-.08.1a8.23,8.23,0,1,1,2.69-6.07Z" fill="#ffffff"/></svg>
                    </div>

                    <p class="text-13 text-white text-center mb-18">{{ state.response.total }} flights result</p>
                </div>
            </div>

            <flight-result class="mt-20"
                           v-for="flight in state.response.data"
                           :key="flight.id"
                           :flight="flight"
            ></flight-result>

            <div class="flex justify-center mt-20" v-if="state.response.next_page">
                <button class="btn btn-outline" @click="fetchMore" :disabled="state.fetchingMore">
                    <span v-if="state.fetchingMore" key="fetch-more-results">...</span>
                    <span v-else key="fetch-more-results">Show more results</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'
    import Top3 from '@/components/Top3'
    import SortBy from '@/components/SortBy'
    import AirLines from '@/components/AirLines'
    import Collapsible from '@/components/Collapsible'
    import FlightResult from '@/components/FlightResult'
    import AirportFilters from '@/components/AirportFilters'
    import DepartureTimeFilters from '@/components/DepartureTimeFilters'

    export default {
        components: {
            Top3,
            SortBy,
            AirLines,
            Collapsible,
            FlightResult,
            AirportFilters,
            DepartureTimeFilters,
        },

        setup() {
            let { state, tripType, fetchMore } = useFlightStore()

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
                fetchMore,
                travelers,
                stops,
                tripType
            }
        }
    }
</script>
