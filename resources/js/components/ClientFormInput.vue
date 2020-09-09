<template>
    <input :type="field.type || 'text'"
           class="form-input form-input-sm form-input-border"
           :name="field.name"
           :class="{'w-full': !field.inline}"
           :placeholder="field.placeholder"
           :value="field.value"
           :readonly="field.readonly"
    >
</template>

<script>
    import useOldValue from 'Use/oldValue'

    export default {
        props: {
            field: Object
        },

        setup() {
            return { ...useOldValue() }
        }
    }
</script>
