<template>
    <div>
        <div class="form-select border-0 cursor-pointer w-full text-15 focus:outline-none focus:shadow-none focus:border-transparent whitespace-no-wrap bg-white-90"
            :class="{ 'text-primary-dark': isOpen, 'text-primary-darker': !isOpen }"
            @click="toggle"
        >
            <slot name="toggle"></slot>
        </div>

        <div id="dropdown-container"
             class="absolute z-40 w-full bg-primary-dark-90 rounded border border-primary-light px-20 mt-6"
             v-if="isOpen"
        >
            <slot></slot>

            <button class="btn btn-full btn-primary opacity-90 my-30 text-15" @click="toggle">
                Done
            </button>

            <p class="mt-20 mb-20 text-9 text-white">
                <slot name="text"></slot>
            </p>
        </div>
    </div>
</template>

<script>
    import { createComponent } from '@vue/composition-api'
    import useDropdown from 'Use/dropdown'

    export default createComponent({
        setup() {
            return { ...useDropdown() }
        }
    })
</script>
