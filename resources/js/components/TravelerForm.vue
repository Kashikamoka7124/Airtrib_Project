<template>
    <div class="mt-30">
        <p class="uppercase text-white text-20 text-center">
            <!-- FIRST <br> -->
            PASSENGER INFORMATION
        </p>

        <div class="mx-auto max-w-500 mt-15">
            <div class="bg-white-90 rounded mb-10">
                <p class="px-15 py-5 first:pt-15 last:pb-15 text-red" v-for="(error, key) in flight.travelersErrors" v-if="key.includes(name)">
                    {{ error[0] }}
                </p>
            </div>

            <div class="flex">
                <select class="form-field form-field-select mr-8" style="width: 150px;" v-model="state.gender">
                    <option value="male">Mr.</option>
                    <option value="female">Mrs.</option>
                </select>

                <input class="flex-1 form-field" type="text" placeholder="First Name" v-model="state.firstName">
            </div>
            <input type="text" class="form-field" placeholder="Last name" v-model="state.lastName">
            <input type="text" class="form-field" placeholder="Email address" v-model="state.email">
            <!-- <input type="password" class="form-field" placeholder="Password" v-model="password" v-if="name == 0"> -->

            <div class="flex items-center custom-select-group-wrap mb-8">
                Birth date

                <div class="flex ml-auto">
                    <select class="sm-custom-select" @change="birthDate" v-model="birthdate.month">
                        <option selected disabled value="">MM</option>
                        <option v-for="month in months" :value="month">
                            {{ month }}
                        </option>
                    </select>

                    <select class="sm-custom-select" @change="birthDate" v-model="birthdate.date">
                        <option selected disabled value="">DD</option>
                        <option v-for="date in dates" :value="date">
                            {{ date }}
                        </option>
                    </select>

                    <select class="sm-custom-select" @change="birthDate" v-model="birthdate.year">
                        <option selected disabled value="">YYYY</option>
                        <option v-for="year in birthYears" :value="year">
                            {{ year }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="flex">
                <input class="form-field mr-8" style="width: 150px;" placeholder="Country code" v-model="state.countryCode">

                <input class="flex-1 form-field" placeholder="Phone number" v-model="state.phone">
            </div>
        </div>
    </div>
</template>

<script>
    import { ref } from '@vue/composition-api'
    import { useTravelerStore } from 'Store/traveler'
    import { useFlightStore } from 'Store/flight'

    export default {
        props: {
            name: ''
        },

        setup({name}) {
            let { state } = useTravelerStore(name)()
            let { state: flight } = useFlightStore()

            let birthdate = {
                date: '',
                month: '',
                year: '',
            }
            let passportDate = {
                date: '',
                month: '',
                year: '',
            }
            let dates = []
            let months = []
            let birthYears = []
            let passportYears = []

            createDates()
            createMonths()
            createBirthYears()
            createPassportYears()

            function createDates() {
                for (let i = 1; i <= 31; i++) {
                    let date =  (i < 10) ? '0' + i : i
                    dates.push(date)
                }
            }

            function createMonths() {
                for (let i = 1; i <= 12; i++) {
                    let month =  (i < 10) ? '0' + i : i
                    months.push(month)
                }
            }

            function createBirthYears() {
                let total = flight.adults + flight.children
                let childStartFrom = flight.adults

                if (childStartFrom == name) {
                    for (let i = 2008; i <= 2019; i++) {
                        birthYears.push(i)
                    }
                }
                else {
                    for (let i = 1940; i <= 2019; i++) {
                        birthYears.push(i)
                    }
                }
            }

            function createPassportYears() {
                for (let i = 2020; i <= 2040; i++) {
                    passportYears.push(i)
                }
            }

            function birthDate() {
                if (birthdate.year && birthdate.month && birthdate.date) {
                    state.birthDate = `${birthdate.year}-${birthdate.month}-${birthdate.date}`
                }
            }

            function passportExpire() {
                if (passportDate.year && passportDate.month && passportDate.date) {
                    state.passportExpire = `${passportDate.year}-${passportDate.month}-${passportDate.date}`
                }
            }

            return {
                birthdate,
                passportDate,
                dates,
                months,
                birthYears,
                passportYears,
                state,
                flight,
                birthDate,
                passportExpire,
            }
        }

        // computed: {
        //     gender: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].gender
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'gender',
        //                 val
        //             })
        //         }
        //     },

        //     firstName: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].firstName
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'firstName',
        //                 val
        //             })
        //         }
        //     },

        //     lastName: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].lastName
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'lastName',
        //                 val
        //             })
        //         }
        //     },

        //     email: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].email
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'email',
        //                 val
        //             })
        //         }
        //     },

        //     passport: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].passport
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'passport',
        //                 val
        //             })
        //         }
        //     },

        //     password: {
        //         get() {
        //             return this.$store.state['traveler' + this.name].password
        //         },
        //         set(val) {
        //             this.$store.dispatch('traveler' + this.name + '/updateState', {
        //                 key: 'password',
        //                 val
        //             })
        //         }
        //     }
        // },
    }
</script>

<style lang="sass" scoped>
    .form-field
        width: 100%
        height: 54px
        line-height: 54px
        padding: 0 15px
        background-color: rgba(255,255,255,.9)
        border-radius: 0.25rem
        &:not(:last-child)
            margin-bottom: 8px
        &::placeholder
            color: #231C12

    .form-field-select
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.61 13.46'%3E%3Cpolyline points='21.11 1.5 11.04 11.96 1.5 1.5' fill='none' stroke='%23ab8a56' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'/%3E%3C/svg%3E%0A")
        -webkit-appearance: none
         -moz-appearance: none
              appearance: none
        -webkit-print-color-adjust: exact
              color-adjust: exact
        background-repeat: no-repeat
        background-position: right 0.6rem center
        background-size: 1em 1em

    .custom-select-group-wrap
        width: 100%
        height: 54px
        padding: 0 15px
        background-color: rgba(255,255,255,.9)
        border-radius: 0.25rem

    .sm-custom-select
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22.61 13.46'%3E%3Cpolyline points='21.11 1.5 11.04 11.96 1.5 1.5' fill='none' stroke='%23ab8a56' stroke-linecap='round' stroke-linejoin='round' stroke-width='3'/%3E%3C/svg%3E%0A")
        -webkit-appearance: none
         -moz-appearance: none
              appearance: none
        -webkit-print-color-adjust: exact
              color-adjust: exact
        background-repeat: no-repeat
        background-position: right 0.4rem center
        background-size: .75em .75em

        border: 2px solid #AB8A56
        border-radius: 0.25rem
        height: 30px
        width: 100%
        padding-right: 20px
        padding-left: 5px
        font-family: Roboto Condensed, serif
        font-size: 15px
        // display: block
        background-color: transparent
        min-width: 70px
        &:not(:last-child)
            margin-right: 5px
</style>
