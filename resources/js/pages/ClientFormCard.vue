<template>
    <div class="border border-primary rounded mt-30">
        <h3 class="border-b border-primary h-40 px-20 flex items-center text-primary-darker text-20">
            {{ data.meta.title }}
        </h3>

        <div class="py-20">
            <client-form-row v-for="field in data.fields"
                             :label="field.label"
                             :key="field.name"

            >
                <component :is="field.component" :field="field"></component>
            </client-form-row>
        </div>
    </div>
</template>

<script>
    import ClientFormFieldGrid from 'Component/ClientFormFieldGrid'
    import ClientFormInput from 'Component/ClientFormInput'
    import ClientFormRow from 'Component/ClientFormRow'
    import ClientFormRowBlank from 'Component/ClientFormRowBlank'
    import ClientFormSelect from 'Component/ClientFormSelect'

    export default {
        components: {
            ClientFormFieldGrid,
            ClientFormInput,
            ClientFormRow,
            ClientFormRowBlank,
            ClientFormSelect,
        },

        props: {
            data: Object,
            title: String
        },

        mounted() {
            console.log(this.data)
        }
    }
</script>
