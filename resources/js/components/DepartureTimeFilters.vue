<template>
    <collapsible class="mt-20">
        <template #header="{ show }">
            <div class="flex items-center h-42 bg-white rounded px-15">
                <p class="text-primary text-14">Departure time</p>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-if="show" key="collapse-arrow"><polyline points="21.11 11.96 11.04 1.5 1.5 11.96" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="9" class="ml-auto" v-else key="collapse-arrow"><polyline points="21.11 1.5 11.04 11.96 1.5 1.5" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
            </div>
        </template>

        <div class="px-15">
            <div class="flex mt-15 mb-5">
                <div class="flex-1">&nbsp;</div>
                <div class="flex-1 flex text-center font-bold text-13 text-primary">
                    <div class="flex-1">
                        <p>From</p>
                    </div>
                    <div class="flex-1">
                        <p>To</p>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div class="flex-1">
                    <p class="text-12">Outbound</p>
                    <p class="font-bold text-12">00:00 - 23:59</p>
                </div>
                <div class="flex-1 flex">
                    <div class="flex-1 flex justify-center">
                        <custom-select-time name="outboundTimeFrom"
                                       width="70px"
                                       height="30px"
                        ></custom-select-time>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <custom-select-time name="outboundTimeTo"
                                       width="70px"
                                       height="30px"
                        ></custom-select-time>
                    </div>
                </div>
            </div>

            <div class="flex mt-10" v-if="state.returnDate">
                <div class="flex-1">
                    <p class="text-12">Return</p>
                    <p class="font-bold text-12">00:00 - 23:59</p>
                </div>
                <div class="flex-1 flex">
                    <div class="flex-1 flex justify-center">
                        <custom-select-time name="returnTimeFrom"
                                       width="70px"
                                       height="30px"
                        ></custom-select-time>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <custom-select-time name="returnTimeTo"
                                       width="70px"
                                       height="30px"
                        ></custom-select-time>
                    </div>
                </div>
            </div>
        </div>
    </collapsible>
</template>

<script>
    import Collapsible from '@/components/Collapsible'
    import CustomSelectTime from '@/components/CustomSelectTime'
    import { useFlightStore } from 'Store/flight'
    import { ref } from '@vue/composition-api'

    export default {
        components: {
            Collapsible,
            CustomSelectTime
        },

        setup() {
            let { state, filter } = useFlightStore()
            let isOpen = ref(false)

            function show() {
                isOpen.vaule = true
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
                state,
                show
            }
        }
    }
</script>
