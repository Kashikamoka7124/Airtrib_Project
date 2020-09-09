<template>
    <flat-pickr class="form-input border-0 w-full text-15 placeholder-primary-darker bg-white-90"
                v-model="date"
                :placeholder="placeholder"
                :config="config"
                name="ddate"
    ></flat-pickr>
</template>

<script>
    import flatPickr from 'vue-flatpickr-component'
    import { useFlightStore } from 'Store/flight'

    export default {
        components: {
            flatPickr
        },

        data() {
            return {
                config: {
                    minDate: 'today',
                    altFormat: 'D M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d'
                }
            }
        },

        created() {
            if (this.name == 'returnDate') {
                this.config.minDate = this.minDate
            }
        },

        props: {
            name: String,
            placeholder: String,
            minDate: String
        },

        watch: {
            minDate: function(val) {
                this.config.minDate = val
            }
        },

        computed: {
            date: {
                get() {
                    const store = useFlightStore()

                    return store.state[this.name]
                    return this.$store.state.flight[this.name]
                },
                set(val) {
                    const store = useFlightStore()

                    if (this.name == 'departureDate') {
                        store.state['returnDate'] = null
                        store.state['isReturnDate'] = false

                        setTimeout(function () {
                            store.state['isReturnDate'] = true
                        })
                    }

                    store.state[this.name] = val
                }
            }
        },

        methods: {
            onOpens() {
                let name = this.name

                return [
                    function(selectedDates, dateStr, instance) {
                        console.log('open ')
                        instance.minDate = '2020-02-02'
                        instance.defaultDate = '2020-01-01'
                        if (name == 'returnDate') {
                            // instance.changeMonth('jan')
                        }
                    }
                ]
            }
        }
    }
</script>
