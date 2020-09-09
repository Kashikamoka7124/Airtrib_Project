<template>
    <page-layout>
        <component :is="state.component"></component>
    </page-layout>
</template>

<script>
    import FlightResults from 'Component/FlightResults'
    import FlightSearchLoader from 'Component/FlightSearchLoader'
    import NoFlights from 'Component/NoFlights'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            FlightResults,
            FlightSearchLoader,
            NoFlights,
        },

        setup() {
            let { state, findFlights } = useFlightStore()

            findFlights()

            return {
                state
            }
        }
    }
</script>
