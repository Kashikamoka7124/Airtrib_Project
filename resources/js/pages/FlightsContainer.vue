<template>
    <router-view></router-view>
</template>

<script>
    import { isObject } from 'Util'
    import { useFlightStore } from 'Store/flight'

    export default {
        setup() {
            const { setSession, setInitialState } = useFlightStore()

            console.log('hit flights container & setInitialState')

            if (isObject(App.request)) {
                setInitialState(App.request)
            }
            else {
                setSession(App.session)
            }
        }
    }
</script>
