<template>
    <div>
        <div class="flex items-center justify-center border border-primary border-b-0 mx-auto mt-60 rounded-t h-40 font-playfair text-primary-darker text-20 tracking-wider" style="max-width: 75%;">
            <span>Make a donation</span>
        </div>

        <div class="border border-primary rounded pt-20 pb-40 px-40 mb-30">
            <p class="text-secondary-light text-12">
                You can further support the cause of the tribes by making a donation. AirTrib will donate the full amount of this donation to partner organizations working to protect the environment and the culture of the tribes.
            </p>

            <div class="mx-auto mt-40" style="max-width: 50%;">
                <div class="text-red text-center mb-15" v-if="error.message">
                    {{ error.message }}
                </div>

                <div class="bg-primary text-white form-input border-0 w-full mb-10" v-if="success">
                    Thankyou, for your donation.
                </div>

                <div>
                    <select class="form-select form-input-border w-full" v-model="organization">
                        <option value="all">Whole organizations</option>
                        <option :value="organization.id" v-for="organization in organizations">
                            {{ organization.name }}
                        </option>
                    </select>
                </div>
                <div class="mt-5">
                    <input type="number" class="form-input form-input-border w-full" placeholder="Amount ($)" v-model="amount">
                </div>
                <div class="mt-5">
                    <input type="text" class="form-input form-input-border w-full" placeholder="Name on Card" v-model="name">
                </div>
                <div class="form-input form-input-border w-full mt-5">
                    <div id="cardNumber"></div>
                </div>
                <div class="flex mt-5">
                    <div class="flex-1 flex items-center border border-primary rounded pl-12 mr-5">
                        <span>Expire</span>
                        <div class="form-input border-transparent w-full ml-auto">
                            <div id="cardExpiry"></div>
                        </div>
                    </div>
                    <div class="form-input form-input-border w-1/3">
                        <div id="cardCvc"></div>
                    </div>
                </div>

                <div class="flex justify-center mt-40">
                    <button class="btn btn-primary border-primary-light" @click="pay" :disabled="processing">
                        <span v-if="processing" key="booking-process">...</span>
                        <span v-else key="booking-process">Donate</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { ref, onMounted } from '@vue/composition-api'

    export default {
        props: {
            organizations: ''
        },

        setup({organizations}) {
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
            let amount = ref('')
            let organization = ref('all')
            let error = ref({})
            let processing = ref(false)
            let success = ref(false)

            function pay() {
                if (!amount.value) {
                    error.value = { message: 'Please enter donation amount.' }

                    return
                }
                else {
                    error.value = {}
                }

                processing.value = true

                return temp()

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
                            donate(response.token)
                        }
                    })
            }

            function donate(stripe) {
                console.log('donate')
                console.log(stripe)

                axios.post('donate', {
                    stripe,
                    amount: amount.value,
                    organization: organization.value,
                    organizations: Array.from(organizations, x => x.id)
                })
                    .then(response => {
                        console.log(response)
                        processing.value = false
                        success.value = true
                        // location.reload()
                    })
                    .catch(error => {
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

                donate(token)

                return
            }

            return {
                name,
                amount,
                organization,
                error,
                pay,
                processing,
                success,
            }
        }
    }
</script>
