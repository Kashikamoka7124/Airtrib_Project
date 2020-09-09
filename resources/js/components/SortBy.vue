<template>
    <div class="sortby-container relative mt-20">
        <div class="flex items-center h-42 bg-white rounded px-15 cursor-pointer" @click="show">
            <span class="text-primary-darker font-bold text-14">Sort by</span>
            <span class="text-primary font-bold text-14 ml-20">{{ current() }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.49 23.49" width="18" height="18" class="ml-auto"><path d="M11.75,2A9.75,9.75,0,1,1,2,11.75,9.75,9.75,0,0,1,11.75,2m0-2A11.75,11.75,0,1,0,23.49,11.75,11.75,11.75,0,0,0,11.75,0Z" fill="#ab8a56"/><polyline points="16.44 10.01 11.62 15.02 7.05 10.01" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
        </div>

        <div class="absolute w-full bg-primary-dark-90 rounded border border-primary-light px-20 mt-6 z-40" v-if="isOpen">
            <div class="border-b border-primary-light text-right text-14 text-white cursor-pointer hover:font-bold pt-18 pb-12"
                 v-for="sort in sorts"
                 @click="sortBy(sort)"
                 v-if="shouldShow(sort)"
            >
                {{ sort.label }}
            </div>
        </div>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'
    import { ref } from '@vue/composition-api'

    export default {
        setup() {
            let { state, filter } = useFlightStore()
            let isOpen = ref(false)
            let sorts = ref([
                {
                    label: 'Best',
                    value: 'Best'
                },
                {
                    label: 'Fastest',
                    value: 'Fastest'
                },
                {
                    label: 'Cheapest',
                    value: 'Cheapest'
                },
                {
                    label: 'Outbound Departure Time',
                    value: 'OutboundDeparture'
                },
                {
                    label: 'Outbound Arrival Time',
                    value: 'OutboundArrival'
                },
                {
                    label: 'Return Departure Time',
                    value: 'ReturnDeparture'
                },
                {
                    label: 'Return Arrival Time',
                    value: 'ReturnArrival'
                }
            ])

            function shouldShow(sort) {
                if (state.response.data[0]['itineraries'].length == 1 && sort.value == 'ReturnArrival') {
                    return false
                }

                if (state.response.data[0]['itineraries'].length == 1 && sort.value == 'ReturnDeparture') {
                    return false
                }

                return true
            }

            function current() {
                let sort = state.sort
                let item = sorts.value.find(function (item) {
                    return item.value == sort
                })

                return item.label
            }

            function sortBy(sort) {
                isOpen.value = false
                state.sort = sort.value
                filter()
            }

            function show() {
                isOpen.value = true
                document.addEventListener('click', handleClickOutside)
            }

            function hide() {
                isOpen.value = false
                document.removeEventListener('click', handleClickOutside)
            }

            function handleClickOutside() {
                if (! event.target.closest('.sortby-container')) {
                    hide()
                }
            }

            return {
                state,
                isOpen,
                sorts,
                show,
                current,
                shouldShow,
                sortBy
            }
        }
    }
</script>
