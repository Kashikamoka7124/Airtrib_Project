<template>
    <div class="relative autocomplete-container" :class="name">
        <input type="search"
               autocomplete="autocomplete_off_hack_xfr456!k"
               class="form-input border-0 w-full text-primary-darker text-15 placeholder-primary-darker bg-white-90"
               v-model="value"
               :placeholder="placeholder"
               @keydown.up.prevent="move(-1)"
               @keydown.down.prevent="move(1)"
               @keydown.enter.prevent="select()"
               @keydown.tab="hide"
               @keydown.esc="hide"
               @input="onInput"
               @focus="onFocus"
        >

        <div class="absolute z-40 w-full mt-5 bg-primary-dark-90 rounded border border-primary-light overflow-hidden"
             v-if="isOpen"
        >
            <div v-if="processing || !items.length" key="autocomplete-dropdown" class="py-6 text-15 text-white text-center">
                {{ status }}
            </div>

            <div v-else key="autocomplete-dropdown">
                <div class="block cursor-pointer border-b last:border-b-0 border-primary-light text-white text-15 py-5 hover:bg-white-90 hover:text-primary-dark hover:font-bold px-20"
                     v-for="(item, index) in items"
                     :class="{ 'bg-white-90 text-primary-dark font-bold': index === current }"
                     @click="select(item)"
                >
                    {{ item.name }} ({{ item.iata }})
                    <p class="text-10">{{ item.country }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import useFlightSearchAutocomplete from 'Use/flightSearchAutocomplete'

    export default {
        props: {
            name: String,
            placeholder: String
        },

        setup ({name, placeholder}) {
            return { ...useFlightSearchAutocomplete(name, placeholder) }
        }
    }
</script>
