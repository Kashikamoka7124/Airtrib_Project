<template>
    <div>
        <div class="flex justify-center">
            <div class="flex-1">&nbsp;</div>
            <button class="flex-1 flex items-center justify-center border border-primary rounded-t text-center h-40 font-playfair text-20 mr-1 border-b-0" @click.prevent="updateTab('particular')" :class="{ 'bg-primary text-white': tab == 'particular', 'text-primary-darker': tab != 'particular' }">
                Particular
            </button>
            <button class="flex-1 flex items-center justify-center border border-primary rounded-t text-center h-40 font-playfair text-20 border-b-0" @click.prevent="updateTab('corporate')" :class="{ 'bg-primary text-white': tab == 'corporate', 'text-primary-darker': tab != 'corporate' }">
                Corporate
            </button>
            <div class="flex-1">&nbsp;</div>
        </div>

        <div class="border border-primary rounded">
            <div class="py-30 px-50" v-if="tab == 'particular'" key="register-form-fields">
                <div class="flex mb-4">
                    <div class="flex-1 flex mr-6">
                        <select class="form-select text-center border-0 mr-4" name="gender" style="text-align-last: center;">
                            <option value="male" :selected="old.gender == 'male'">Mr.</option>
                            <option value="female" :selected="old.gender == 'female'">Mrs.</option>
                        </select>

                        <div class="flex-1">
                            <input class="form-input text-center border-0 w-full" type="text" name="first_name" :value="old.first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="flex-1">
                        <input class="form-input text-center border-0 w-full" type="text" name="last_name" :value="old.last_name" placeholder="Last name">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex-1 mr-6">
                        <input class="form-input text-center border-0 w-full" type="email" name="email" :value="old.email" placeholder="Email">
                    </div>
                    <div class="flex-1">
                        <input class="form-input text-center border-0 w-full" type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex-1 mr-6">
                        <select class="form-select text-center border-0 w-full" name="country" style="text-align-last: center;">
                            <option :value="null" disabled selected>Country</option>
                            <option :value="country.key" :selected="parseInt(old.country) === country.key" v-for="country in countries">
                                {{ country.value }}
                            </option>
                        </select>
                    </div>
                    <div class="flex-1 flex">
                        <input class="w-1/3 form-input text-center border-0 mr-4" type="text" name="country_code" :value="old.country_code" placeholder="Country Code">

                        <div class="flex-1">
                            <input class="form-input text-center border-0 w-full" type="text" name="phone" :value="old.phone" placeholder="Phone number">
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-30 px-50" v-else key="register-form-fields">
                <div class="flex mb-4">
                    <div class="flex-1 mr-6">
                        <input class="form-input text-center border-0 w-full" name="corporate_name" :value="old.corporate_name" placeholder="Corporate name">
                    </div>
                    <div class="flex-1">
                        <select class="form-select text-center border-0 w-full" name="corporate_type" style="text-align-last: center;">
                            <option disabled selected>Type of organization</option>
                            <option :value="corporateType.key" :selected="parseInt(old.corporate_type) === corporateType.key" v-for="corporateType in corporateTypes">
                                {{ corporateType.value }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex-1 flex mr-6">
                        <select class="form-select text-center border-0 mr-4" name="gender" style="text-align-last: center;">
                            <option value="male" :selected="old.gender == 'male'">Mr.</option>
                            <option value="female" :selected="old.gender == 'female'">Mrs.</option>
                        </select>

                        <div class="flex-1">
                            <input class="form-input text-center border-0 w-full" type="text" name="first_name" :value="old.first_name" placeholder="First name">
                        </div>
                    </div>
                    <div class="flex-1">
                        <input class="form-input text-center border-0 w-full" type="text" name="last_name" :value="old.last_name" placeholder="Last name">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex-1 mr-6">
                        <input class="form-input text-center border-0 w-full" type="email" name="email" :value="old.email" placeholder="Email">
                    </div>
                    <div class="flex-1">
                        <input class="form-input text-center border-0 w-full" type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="flex-1 mr-6">
                        <select class="form-select text-center border-0 w-full" name="country" style="text-align-last: center;">
                            <option :value="null" disabled selected>Country</option>
                            <option :value="country.key" :selected="parseInt(old.country) === country.key" v-for="country in countries">
                                {{ country.value }}
                            </option>
                        </select>
                    </div>
                    <div class="flex-1 flex">
                        <input class="w-1/3 form-input text-center border-0 mr-4" type="text" name="country_code" :value="old.country_code" placeholder="Country Code">

                        <div class="flex-1">
                            <input class="form-input text-center border-0 w-full" type="text" name="phone" :value="old.phone" placeholder="Phone number">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { ref } from '@vue/composition-api'

    export default {
        props: {
            old: '',
            countries: '',
            corporateTypes: '',
            isCorporateForm: Boolean
        },

        setup({isCorporateForm}) {
            let tab = ref('particular')

            if (isCorporateForm) {
                tab.value = 'corporate'
            }

            function updateTab(name) {
                tab.value = name

                if (name == 'corporate')
                    history.replaceState(null, null, '?corporate')
                else
                    history.replaceState(null, null, '/register')
            }

            return {
                tab,
                updateTab
            }
        }
    }
</script>
