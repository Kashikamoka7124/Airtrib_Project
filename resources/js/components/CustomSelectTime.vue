<template>
    <div :class="name + '-custom-select-container relative'">
        <div class="flex items-center justify-between border-2 border-primary rounded cursor-pointer px-5"
             @click="show"
             :style="{ width, height }"
        >
            <span class="text-14 font-roboto text-primary-darker">
                {{ current }}
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="12" height="7"><polyline points="21.11 1.5 11.04 11.96 1.5 1.5" fill="none" stroke="#ab8a56" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
        </div>

        <div class="absolute w-full bg-primary rounded border border-primary-light z-40 mt-5 px-5 text-14 font-roboto text-white" v-if="isOpen">
            <p class="last:border-b-0 border-b border-primary-light py-3 cursor-pointer" v-for="time in times" @click="select(time)">
                {{ time.label }}
            </p>
        </div>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'

    export default {
        data() {
            return {
                isOpen: false,
                current: '00:00',
                times: [
                    {
                        label: '00:00',
                        value: ''
                    },
                    {
                        label: '01:00',
                        value: '1'
                    },
                    {
                        label: '02:00',
                        value: '2'
                    },
                    {
                        label: '03:00',
                        value: '3'
                    },
                    {
                        label: '04:00',
                        value: '4'
                    },
                    {
                        label: '05:00',
                        value: '5'
                    },
                    {
                        label: '06:00',
                        value: '6'
                    },
                    {
                        label: '07:00',
                        value: '7'
                    },
                    {
                        label: '08:00',
                        value: '8'
                    },
                    {
                        label: '09:00',
                        value: '9'
                    },
                    {
                        label: '10:00',
                        value: '10'
                    },
                    {
                        label: '11:00',
                        value: '11'
                    },
                    {
                        label: '12:00',
                        value: '12'
                    },
                    {
                        label: '13:00',
                        value: '13'
                    },
                    {
                        label: '14:00',
                        value: '14'
                    },
                    {
                        label: '15:00',
                        value: '15'
                    },
                    {
                        label: '16:00',
                        value: '16'
                    },
                    {
                        label: '17:00',
                        value: '17'
                    },
                    {
                        label: '18:00',
                        value: '18'
                    },
                    {
                        label: '19:00',
                        value: '19'
                    },
                    {
                        label: '20:00',
                        value: '20'
                    },
                    {
                        label: '21:00',
                        value: '21'
                    },
                    {
                        label: '22:00',
                        value: '22'
                    },
                    {
                        label: '23:00',
                        value: '23'
                    },
                    {
                        label: '23:59',
                        value: '23'
                    },
                ]
            }
        },

        props: {
            name: String,
            width: String,
            height: String
        },

        methods: {
            select(time) {
                const { state, filter } = useFlightStore()

                this.isOpen = false
                this.current = time.label
                state[this.name] = time.value
                filter()
                // this.$store.dispatch('flight/updateState', {key: this.name, val: time.value})
                // this.$store.dispatch('flight/filter')
            },

            show() {
                this.isOpen = true
                document.addEventListener('click', this.handleClickOutside)
            },

            hide() {
                this.isOpen = false
                document.removeEventListener('click', this.handleClickOutside)
            },

            handleClickOutside(evt) {
                if (! event.target.closest('.' + this.name + '-custom-select-container')) {
                    this.hide()
                }
            }
        }
    }
</script>
