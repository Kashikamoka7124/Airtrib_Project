<template>
    <div id="payment-form-main" class="mt-30">
        <p class="uppercase text-white text-20 text-center">
            Payment Card
        </p>

        <div class="mx-auto max-w-500 mt-15">
            <div class="form-field text-red" v-if="error.message">
                {{ error.message }}
            </div>

            <input type="text" class="form-field" placeholder="Name on Card" v-model="name">
            <div class="card-field mb-8">
                <div id="cardNumber"></div>
            </div>
            <div class="flex">
                <div class="flex-1 card-field mr-8 relative">
                    <span class="absolute z-40 text-primary-darker" style="top: 14px;">Expire</span>
                    <div id="cardExpiry"></div>
                </div>
                <div class="card-field" style="width: 30%;">
                    <div id="cardCvc"></div>
                </div>
            </div>
        </div>

        <div class="my-10 text-red rounded bg-white-90 px-15 py-10 max-w-500 mx-auto" v-if="accept_terms_error">
            Please accept the terms!
        </div>

        <div class="mt-30 flex justify-center my-20">
            <label class="flex items-center">
                <input type="checkbox" class="form-checkbox text-white items-start" v-model="accept_terms">

                <span class="ml-10 text-white">Accept the terms of legal policies</span>
            </label>
        </div>

        <div class="flex justify-center mb-50">
            <button class="btn btn-primary border-primary-light" @click="pay" :disabled="processing">
                <span v-if="processing" key="booking-process">...</span>
                <span v-else key="booking-process">Pay Now</span>
            </button>
        </div>
    </div>
</template>

<script>
    import { ref, onMounted } from '@vue/composition-api'
    import { useFlightStore } from 'Store/flight'
    import { useTravelerStore } from 'Store/traveler'
    import { useFlashStore } from 'Store/flash'

    export default {
        setup(props, ctx) {
            const style = function (right = false) {
                return {
                    base: {
                        color: "#231C12",
                        fontSize: '16px',
                        fontFamily: 'Merriweather, serif',
                        fontSmoothing: 'antialiased',
                        textAlign: right ? 'right' : 'left',
                        '::placeholder': {
                            color: '#231C12',
                        },
                    }
                }
            }

            const stripe = Stripe(App.stripeKey),
                  elements = stripe.elements(),
                  cardNumber = elements.create('cardNumber', {style: style()}),
                  cardExpiry = elements.create('cardExpiry', {style: style(true)}),
                  cardCvc = elements.create('cardCvc', {style: style()})

            onMounted(() => {
                cardNumber.mount(document.querySelector('#cardNumber'))
                cardExpiry.mount(document.querySelector('#cardExpiry'))
                cardCvc.mount(document.querySelector('#cardCvc'))
            })

            let name = ref('')
            let error = ref({})
            let processing = ref(false)
            let accept_terms = ref(false)
            let accept_terms_error = ref(false)
            let { state, totalTravelers } = useFlightStore()
            let flash = useFlashStore()

            function pay() {
                if (!accept_terms.value) {
                    accept_terms_error.value = true
                    return
                }
                else {
                    accept_terms_error.value = false
                }

                processing.value = true

                // return temp()

                error.value = {}

                stripe.createToken(cardNumber, {
                    name: name.value
                })
                    .then(response => {
                        console.log(response)
                        if (response.error) {
                            error.value = response.error
                            processing.value = false
                        }
                        else {
                            console.log('else')
                            console.log(response.token)
                            book(response.token)
                        }
                    })
            }

            function book(token) {
                console.log('book')
                console.log(token)

                let summary = {
                    'from': state.from,
                    'to': state.to,
                    'departureDate': state.departureDate,
                    'returnDate': state.returnDate,
                    'adults': state.adults,
                    'children': state.children,
                    'stop': state.stop,
                    'tripTypes': state.tripTypes,
                    'tripType': state.tripType,
                    'selectedFlight': state.selectedFlight,
                    'response': {
                        airLines: state.response.airLines,
                        dictionaries: state.response.dictionaries,
                    },
                }

                let travelers = []

                for (let i = 0; i < totalTravelers.value; i++) {
                    let { state: travelerState } = useTravelerStore(i)()
                    travelers.push(travelerState)
                }

                axios.post('book', {
                    stripe: token,
                    travelers,
                    flight: state.currentConfirmedFlight,
                    summary
                })
                    .then(response => {
                        console.log(response)
                        processing.value = false
                        ctx.root.$router.push('/flights/confirmation' + window.location.search)
                    })
                    .catch(error => {
                        // flash.danger(error.response.data.message)
                        flash.danger("We couldn't book this flight!")
                        processing.value = false
                    })
            }

            function temp() {
                let token = {
                    card: {
                        address_city: null,
                        address_country: null,
                        address_line1: null,
                        address_line1_check: null,
                        address_line2: null,
                        address_state: null,
                        address_zip: null,
                        address_zip_check: null,
                        brand: "MasterCard",
                        country: "US",
                        cvc_check: "unchecked",
                        dynamic_last4: null,
                        exp_month: 10,
                        exp_year: 2020,
                        funding: "credit",
                        id: "card_1FoU5aHHXEuPgfWUxJu83uUf",
                        last4: "4444",
                        metadata: {},
                        name: "John Doe",
                        object: "card",
                        tokenization_method: null,
                    },
                    client_ip: "137.59.225.162",
                    created: 1576066487,
                    id: "tok_1FoU5bHHXEuPgfWUy9PYqjbD",
                    livemode: false,
                    object: "token",
                    type: "card",
                    used: false,
                }

                book(token)

                return
            }

            return {
                name,
                error,
                pay,
                processing,
                accept_terms,
                accept_terms_error,
            }
        }
    }
</script>

<style lang="sass" scoped>
    .card-field
        width: 100%
        padding: 16px 15px
        background-color: rgba(255,255,255,.9)
        border-radius: 0.25rem

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
