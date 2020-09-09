<template>
    <select class="form-select form-select-sm form-select-border"
            :name="field.name"
            :class="{'w-full': !field.inline}"
    >
        <option v-if="field.default_title" disabled selected>
            {{ field.default_title }}
        </option>
        <option v-for="{label, value} in field.options" :value="value" :selected="value == field.value">
            {{ label }}
        </option>
    </select>
</template>

<script>
    export default {
        props: {
            field: Object
        }
    }
</script>
