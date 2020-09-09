<template>
    <page-layout>
        <component :is="state.selectedFlightPageComponent"></component>
    </page-layout>
</template>

<script>
    import Travelers from 'Component/Travelers'
    import ConfirmPriceLoader from 'Component/ConfirmPriceLoader'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            Travelers,
            ConfirmPriceLoader
        },

        setup() {
            let { state, confirmPrice } = useFlightStore()

            confirmPrice()

            return {
                state
            }
        }
    }
</script>
