<template>
    <div class="fixed h-40 px-16 rounded flex items-center text-white text-16"
         :class="[state.type]"
         style="right: 5%; bottom: 7%; touch-action: pan-y; z-index: 200;"
         v-if="state.message"
    >
        {{ state.message }}

        <inline-svg name="close" class="ml-8 cursor-pointer text-white" width="20" height="20" @click.native="hide()"></inline-svg>
    </div>
</template>

<script>
    import { useFlashStore } from 'Store/flash'
    import { ref } from '@vue/composition-api'

    export default {
        setup() {
            const { state, hide } = useFlashStore()

            return {
                state,
                hide,
            }
        }
    }
</script>

<style lang="sass" scoped>
    .success
        background: #009245
    .danger
        background: #D81330
    .info
        background: #4299E1
    .warning
        background: #ECC94B
</style>
