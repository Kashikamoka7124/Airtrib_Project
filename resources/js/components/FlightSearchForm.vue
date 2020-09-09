<template>
    <div class="pt-80">
        <div class="bg-white-90 text-red rounded px-15 py-10 mb-6 text-14" v-if="state.errors.length">
            <p class="py-2" v-for="error in state.errors">
                {{ error }}
            </p>
        </div>

        <div class="flex">
            <div class="flex-1 mr-6 relative">
                <div class="flex">
                    <FlightSearchOptions class="flex-1 mr-6"/>
                    <FlightSearchTravelers class="flex-1"/>
                </div>
            </div>
            <div class="flex-1 mr-6 relative">
                <FlightSearchStops v-if="state.tripType != 'multicity'" key="stop-or-row"/>
                <FlightSearchAddRow v-else key="stop-or-row"/>
            </div>
            <div class="flex-1 mr-6">

            </div>
            <div class="flex-1 mr-6">
                &nbsp;
            </div>
            <div class="w-41">
                &nbsp;
            </div>
        </div>

        <div class="flex mt-6" v-if="state.tripType != 'multicity'" key="flight-search-multicity">
            <div class="flex-1 mr-6">
                <FlightSearchAutocomplete name="from" placeholder="From"/>
            </div>
            <div class="flex-1 mr-6 relative">
                <FlightSearchAutocomplete name="to" placeholder="To"/>
            </div>
            <div class="flex-1 mr-6">
                <FlightSearchDate name="departureDate" placeholder="Departure Date"/>
            </div>
            <div class="flex-1 mr-6" :class="{ 'order-last': state.tripType != 'roundtrip' }">
                <div v-if="state.tripType == 'roundtrip'">
                    <FlightSearchDate name="returnDate" placeholder="Return Date" :min-date="state.departureDate" v-if="state.isReturnDate"/>
                </div>
            </div>
            <button class="w-40 h-40 -mt-1 rounded border-2 border-primary text-primary hover-fill" @click="search">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.71 29.02" width="20" height="20"><path d="M28.13,25.65l-7.46-7.47a11.27,11.27,0,0,0,2.21-6.74,11.47,11.47,0,1,0-5.06,9.48l7.52,7.52a2,2,0,0,0,1.4.58,2,2,0,0,0,2-2A1.93,1.93,0,0,0,28.13,25.65ZM19.68,11.44a8.21,8.21,0,0,1-2.45,5.86l-.16.11-.08.1a8.23,8.23,0,1,1,2.69-6.07Z" fill="currentColor"/></svg>
            </button>
        </div>

        <div v-else key="flight-search-multicity">
            <div class="flex mt-6" v-for="i in state.flightSearchRows">
                <div class="flex-1 mr-6">
                    <FlightSearchAutocomplete :name="'from' + (i > 1 ? i : '')" placeholder="From"/>
                </div>
                <div class="flex-1 mr-6 relative">
                    <FlightSearchAutocomplete :name="'to' + (i > 1 ? i : '')" placeholder="To"/>
                </div>
                <div class="flex-1 mr-6">
                    <FlightSearchDate :name="'departureDate' + (i > 1 ? i : '')" placeholder="Departure Date"/>
                </div>
                <button class="w-41 h-41 rounded border-2 border-primary text-primary hover-fill" v-if="i == state.flightSearchRows" @click="search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.71 29.02" width="20" height="20"><path d="M28.13,25.65l-7.46-7.47a11.27,11.27,0,0,0,2.21-6.74,11.47,11.47,0,1,0-5.06,9.48l7.52,7.52a2,2,0,0,0,1.4.58,2,2,0,0,0,2-2A1.93,1.93,0,0,0,28.13,25.65ZM19.68,11.44a8.21,8.21,0,0,1-2.45,5.86l-.16.11-.08.1a8.23,8.23,0,1,1,2.69-6.07Z" fill="currentColor"/></svg>
                </button>
                <div class="w-41" v-else>
                    &nbsp;
                </div>
                <div class="flex-1 mr-6">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FlightSearchAddRow from 'Component/FlightSearchAddRow'
    import FlightSearchAutocomplete from 'Component/FlightSearchAutocomplete'
    import FlightSearchDate from 'Component/FlightSearchDate'
    import FlightSearchOptions from 'Component/FlightSearchOptions'
    import FlightSearchStops from 'Component/FlightSearchStops'
    import FlightSearchTravelers from 'Component/FlightSearchTravelers'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            FlightSearchAddRow,
            FlightSearchAutocomplete,
            FlightSearchDate,
            FlightSearchOptions,
            FlightSearchStops,
            FlightSearchTravelers,
        },

        setup() {
            const { state, search } = useFlightStore()

            return {
                state,
                search
            }
        }
    }
</script>
