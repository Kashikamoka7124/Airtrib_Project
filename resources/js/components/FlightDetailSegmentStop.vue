<template>
    <div class="flex items-center py-4">
        <div class="w-40 flex items-center justify-end pr-5">
            <p class="font-roboto text-15 text-red">
                {{ duration() }}
            </p>
        </div>
        <div class="w-20">
            &nbsp;
        </div>
        <div class="ml-15">
            <p class="text-red font-roboto text-13">Connect in airport</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            arrival: String,
            departure: String
        },

        methods: {
            duration() {
                const diff = (new Date(this.departure) - new Date(this.arrival)) / 3.6e+6

                if (Number.isInteger(diff)) {
                    return diff + 'h 0'
                }
                else {
                    const hour = (diff + '').split('.')
                    return hour[0] + 'h ' + Math.round(parseFloat('.' + hour[1]) * 60)
                }
            }
        }
    }
</script>
