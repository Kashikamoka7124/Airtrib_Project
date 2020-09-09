<template>
    <flight-search-form-dropdown>
        <template #toggle>
            {{ value() }}
        </template>

        <div class="flex items-center justify-end border-b border-primary-light text-white h-48">
            <div class="text-15 flex items-center">
                Adult <span class="text-10 ml-5">(+ 16 years)</span>
            </div>

            <div class="flex items-center ml-16">
                <span @click="decrement('adult')" class="block cursor-pointer w-20 h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.42 22.42"><circle cx="11.21" cy="11.21" r="10.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="6.13" y1="11.21" x2="16.28" y2="11.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                </span>

                <span class="text-18 text-center w-40">{{ state.adults }}</span>

                <span @click="increment('adult')" class="block cursor-pointer w-20 h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.42 22.42"><circle cx="11.21" cy="11.21" r="10.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="6.13" y1="11.21" x2="16.28" y2="11.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="11.21" y1="16.28" x2="11.21" y2="6.13" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                </span>
            </div>
        </div>

        <div class="flex items-center justify-end border-b border-primary-light text-white h-48">
            <div class="text-15 flex items-center">
                Children <span class="text-10 ml-5">(- 16 years)</span>
            </div>

            <div class="flex items-center ml-16">
                <span @click="decrement('children')" class="block cursor-pointer w-20 h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.42 22.42"><circle cx="11.21" cy="11.21" r="10.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="6.13" y1="11.21" x2="16.28" y2="11.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                </span>

                <span class="text-18 text-center w-40">{{ state.children }}</span>

                <span @click="increment('children')" class="block cursor-pointer w-20 h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.42 22.42"><circle cx="11.21" cy="11.21" r="10.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="6.13" y1="11.21" x2="16.28" y2="11.21" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="11.21" y1="16.28" x2="11.21" y2="6.13" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                </span>
            </div>
        </div>

        <template #text>
            Your age at time of travel must be valid for the age category booked. Airlines have restrictions on under 18s traveling alone.
        </template>
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
            const store = useFlightStore()

            let value = function() {
                if (store.state.children)
                    return store.state.adults + store.state.children + ' Travelers'

                return store.state.adults > 1 ? store.state.adults + ' Adults' : store.state.adults + ' Adult'
            }

            let increment = function(type) {
                if (type == 'adult' && store.state.adults < 9)
                    store.state.adults = store.state.adults + 1

                if (type == 'children' && store.state.children < 9)
                    store.state.children = store.state.children + 1
            }

            let decrement = function(type) {
                if (type == 'adult' && store.state.adults > 1)
                    store.state.adults = store.state.adults - 1

                if (type == 'children' && store.state.children > 0)
                    store.state.children = store.state.children - 1
            }

            return {
                value,
                increment,
                decrement,
                state: store.state
            }
        }
    }
</script>
