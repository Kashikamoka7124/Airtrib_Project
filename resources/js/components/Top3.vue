<template>
    <div class="flex bg-white rounded h-120">
        <div class="flex-1 flex items-center justify-center rounded-l cursor-pointer" :class="{ 'bg-primary': state.sort == 'Best' }" @click="sortBy('Best')">
            <div class="text-center">
                <p class="text-14 font-bold" :class="{ 'text-white': state.sort == 'Best', 'text-secondary': state.sort != 'Best' }">Best</p>
                <p class="text-18 font-bold mt-10" :class="{ 'text-white': state.sort == 'Best', 'text-primary': state.sort != 'Best' }">
                    {{ state.response.top.best.price.total }}
                </p>
                <p class="text-13 mt-8" :class="{ 'text-white': state.sort == 'Best', 'text-primary-darker': state.sort != 'Best' }">
                    Average {{ duration(state.response.top.best.itineraries[0].duration) }}
                </p>
            </div>
        </div>

        <div class="w-1 bg-primary-light my-15 rounded" v-if="state.sort == 'Fastest'">&nbsp;</div>

        <div class="flex-1 flex items-center justify-center cursor-pointer" :class="{ 'bg-primary': state.sort == 'Cheapest' }" @click="sortBy('Cheapest')">
            <div class="text-center">
                <p class="text-14 font-bold" :class="{ 'text-white': state.sort == 'Cheapest', 'text-secondary': state.sort != 'Cheapest' }">Cheapest</p>
                <p class="text-18 font-bold mt-10" :class="{ 'text-white': state.sort == 'Cheapest', 'text-primary': state.sort != 'Cheapest' }">
                    {{ state.response.top.cheapest.price.total }}
                </p>
                <p class="text-13 mt-8" :class="{ 'text-white': state.sort == 'Cheapest', 'text-primary-darker': state.sort != 'Cheapest' }">
                    Average {{ duration(state.response.top.cheapest.itineraries[0].duration) }}
                </p>
            </div>
        </div>

        <div class="w-1 bg-primary-light my-15 rounded" v-if="state.sort == 'Best'">&nbsp;</div>

        <div class="flex-1 flex items-center justify-center rounded-r cursor-pointer" :class="{ 'bg-primary': state.sort == 'Fastest' }" @click="sortBy('Fastest')">
            <div class="text-center">
                <p class="text-14 font-bold" :class="{ 'text-white': state.sort == 'Fastest', 'text-secondary': state.sort != 'Fastest' }">Fastest</p>
                <p class="text-18 font-bold mt-10" :class="{ 'text-white': state.sort == 'Fastest', 'text-primary': state.sort != 'Fastest' }">
                    {{ state.response.top.fastest.price.total }}
                </p>
                <p class="text-13 mt-8" :class="{ 'text-white': state.sort == 'Fastest', 'text-primary-darker': state.sort != 'Fastest' }">
                    Average {{ duration(state.response.top.fastest.itineraries[0].duration) }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'

    export default {
        setup() {
            let { state, filter } = useFlightStore()

            function sortBy(sort) {
                state.sort = sort
                filter()
            }

            function duration(duration) {
                const result = /([0-9]+H)((?:[0-9]+M)?)/i.exec(duration)

                return result[1].replace('H', 'h') + ' ' + (result[2].replace('M', '') || '')
            }

            return {
                state,
                sortBy,
                duration
            }
        }
    }
</script>
