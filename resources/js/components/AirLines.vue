<template>
    <collapsible class="mt-20">
        <template #header="{ show }">
            <div class="flex items-center h-42 bg-white rounded px-15">
                <p class="text-primary text-14">Airlines</p>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-if="show" key="collapse-arrow"><polyline points="21.11 11.96 11.04 1.5 1.5 11.96" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-else key="collapse-arrow"><polyline points="21.11 1.5 11.04 11.96 1.5 1.5" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
            </div>
        </template>

        <div>
            <div class="px-15 text-12 mt-15">
                <span class="cursor-pointer" @click="clear">Clear All</span>
                <span class="px-20 text-primary">|</span>
                <span class="text-primary cursor-pointer" @click="selectAll">Select All</span>
            </div>

            <div class="flex flex-wrap mt-25 px-15">
                <div class="w-1/2 pb-10" v-for="(airline) in state.response.airLines">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" v-model="state.selectedAirLines" :value="airline.value" @change="filter">

                        <span class="ml-10">{{ state.response.dictionaries.carriers[airline.value] }}</span>
                    </label>
                </div>
            </div>
        </div>
    </collapsible>
</template>

<script>
    import Collapsible from '@/components/Collapsible'
    import { useFlightStore } from 'Store/flight'
    import { ref } from '@vue/composition-api'

    export default {
        components: {
            Collapsible
        },

        setup() {
            let { state, filter } = useFlightStore()
            let isOpen = ref(false)

            function clear() {
                state.selectedAirLines = []
                filter()
            }

            function selectAll() {
                state.selectedAirLines = Object.keys(state.response.dictionaries.carriers)
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
                show,
                filter,
                clear,
                selectAll,
            }
        }
    }
</script>
