<template>
    <div class="flex items-center py-6">
        <div class="w-2/5 text-right pr-50 text-15 text-primary-darker">
            {{ label }}
        </div>

        <div class="w-3/5 pr-80">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            label: String
        }
    }
</script>
