<template>
    <div class="flex -mx-4">
        <div v-for="column in field.fields" :class="column.classes || 'flex-1'" class="px-4">
            <component :is="column.component" :field="column"></component>
        </div>
    </div>
</template>

<script>
    import ClientFormInput from './ClientFormInput'
    import ClientFormSelect from './ClientFormSelect'

    export default {
        components: {
            ClientFormInput,
            ClientFormSelect,
        },

        props: {
            field: Object
        }
    }
</script>
