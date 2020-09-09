<template>
    <div class="w-full bg-white-90 rounded px-12 py-8 text-15 text-primary-darker flex items-center justify-between" v-if="state.stop != null">
        {{ stop }}

        <span @click="remove" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.58 26.59" width="18" height="18"><ellipse cx="13.29" cy="13.3" rx="12.24" ry="12.25" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.1"/><line x1="17.43" y1="9.16" x2="9.16" y2="17.43" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line x1="17.43" y1="17.43" x2="9.16" y2="9.16" fill="none" stroke="#231c12" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/></svg>
        </span>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'

    export default {
        setup() {
            const {state, stop} = useFlightStore()

            let remove = function () {
                state.stop = null
            }

            return {
                remove,
                state,
                stop,
            }
        }
    }
</script>
