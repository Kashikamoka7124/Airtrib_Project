<template>
    <div>
        <flight-search-form></flight-search-form>

        <slot></slot>
    </div>
</template>

<script>
    import FlightSearchForm from 'Component/FlightSearchForm'

    export default {
        components: {
            FlightSearchForm
        }
    }
</script>
