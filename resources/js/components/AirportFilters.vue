<template>
    <collapsible class="mt-20">
        <template #header="{ show }">
            <div class="flex items-center h-42 bg-white rounded px-15">
                <p class="text-primary text-14">Airports</p>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-if="show" key="collapse-arrow"><polyline points="21.11 11.96 11.04 1.5 1.5 11.96" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-else key="collapse-arrow"><polyline points="21.11 1.5 11.04 11.96 1.5 1.5" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
            </div>
        </template>

        <div class="pt-20 px-15">
            <label class="flex items-center">
                <input type="checkbox" class="form-checkbox">

                <span class="ml-10">Fly out and back using the same</span>
            </label>
        </div>
    </collapsible>
</template>

<script>
    import { useFlightStore } from 'Store/flight'
    import { ref } from '@vue/composition-api'
    import Collapsible from '@/components/Collapsible'

    export default {
        components: {
            Collapsible
        },

        setup() {
            let { state, filter } = useFlightStore()

            let isOpen = ref(false)

            function same() {
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
                isOpen,
                show,
                same
            }
        }
    }
</script>
