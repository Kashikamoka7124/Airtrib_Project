<template>
    <flight-search-form-dropdown>
        <template #toggle>
            {{ tripType }}
        </template>

        <div>
            <div class="border-b border-primary-light"
                 v-for="(label, value) in tripTypes"
            >
                <label class="flex items-center h-48">
                    <input type="radio" class="form-radio form-radio-primary" :value="value" v-model="state.tripType" @change="resetForm">

                    <span class="ml-10 text-12 text-white" v-html="label"></span>
                </label>
            </div>
        </div>

        <div class="mt-30">
            <div class="border-b border-primary-light"
                 v-for="(label, value) in stops"
            >
                <label class="flex items-center h-48">
                    <input type="radio" class="form-radio form-radio-primary" :value="value" v-model="state.stop">

                    <span class="ml-10 text-12 text-white" v-html="label"></span>
                </label>
            </div>
        </div>
    </flight-search-form-dropdown>
</template>

<script>
    import FlightSearchFormDropdown from 'Component/FlightSearchFormDropdown'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            FlightSearchFormDropdown,
        },

        setup() {
            const { state, tripTypes, tripType, stops } = useFlightStore()

            function resetForm() {
                console.log('resetForm')
            }

            return {
                tripTypes: tripTypes(),
                stops: stops(),
                tripType,
                state,
                resetForm,
            }
        }
    }
</script>
