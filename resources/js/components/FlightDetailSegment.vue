<template>
    <div>
        <div class="flex items-center mb-10">
            <div class="w-40">&nbsp;</div>
            <div class="w-20 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.31 21.04" width="16" height="15"><path d="M21.81,10.52a1.63,1.63,0,0,0-1.58-1.59H14.41L9.12.5H7L9.65,8.93H3.83L2.25,6.83H.66l1.06,3.69L.66,14.21H2.25L3.83,12.1H9.65L7,20.54H9.12l5.29-8.44h5.82a1.62,1.62,0,0,0,1.58-1.58Z" fill="none" stroke="#ab8a56" stroke-miterlimit="10"/></svg>
            </div>
            <div class="w-63 ml-15">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.34 11.4" width="30" height="8"><path d="M34.13,0,28.08,8.76a5.19,5.19,0,0,1-3.65,2.38v.26h6.73a4.93,4.93,0,0,0,4-2.44l6.21-9Z" fill="#e20e1c" fill-rule="evenodd"/><path d="M5.29,6.3h3.4L6.92,3.12,5.29,6.3Zm6,4.47L10,8.48H4.12L2.91,10.77H0L5.81.34H8.46l6.59,10.43Zm5.48,0V.33H27V2.57H19.82V5.16h7V7.4h-7v3.37Z" fill="#323374" fill-rule="evenodd"/></svg>
            </div>
            <div>
                <p class="font-roboto text-15 text-secondary-light">
                    {{ state.response.dictionaries.carriers[segment.carrierCode] }}
                </p>
            </div>
        </div>

        <div class="flex">
            <div class="w-40 flex items-center justify-end pr-5">
                <p class="font-roboto text-15 text-secondary-light">
                    {{ duration(segment.duration) }}
                </p>
            </div>
            <div class="w-20 flex flex-col items-center py-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.68 10.68" width="8" height="8"><path d="M5.34,2A3.34,3.34,0,1,1,2,5.34,3.35,3.35,0,0,1,5.34,2m0-2a5.34,5.34,0,1,0,5.34,5.34A5.34,5.34,0,0,0,5.34,0Z" fill="#cea472"/></svg>

                <div class="flex-1 bg-primary-light w-2">&nbsp;</div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.68 10.68" width="8" height="8"><path d="M5.34,2A3.34,3.34,0,1,1,2,5.34,3.35,3.35,0,0,1,5.34,2m0-2a5.34,5.34,0,1,0,5.34,5.34A5.34,5.34,0,0,0,5.34,0Z" fill="#cea472"/></svg>

                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.68 10.68" width="8" height="8"><circle cx="5.34" cy="5.34" r="5.34" fill="#cea472"/></svg> -->
            </div>
            <div class="w-63 ml-15 flex flex-col justify-between">
                <p class="text-secondary-light font-roboto text-15">
                    {{ getTime(segment.departure.at) }}
                </p>
                <p class="text-green font-roboto text-13" v-if="total == 1">Non stop</p>
                <p class="text-secondary-light font-roboto text-15">
                    {{ getTime(segment.arrival.at) }}
                </p>
            </div>
            <div class="flex flex-col justify-between text-15 text-primary-darker uppercase">
                <p>{{ segment.departure.iataCode }}</p>
                <p>{{ segment.arrival.iataCode }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'

    export default {
        props: {
            index: Number,
            total: Number,
            segment: Object,
        },

        setup() {
            let { state } = useFlightStore()

            function duration(duration) {
                const result = /([0-9]+H)((?:[0-9]+M)?)/i.exec(duration)

                return result[1].replace('H', 'h') + ' ' + (result[2].replace('M', '') || '')
            }

            function getTime(time) {
                return time.match(/([0-9]+:[0-9]+)/g)[0]
            }

            return {
                state,
                duration,
                getTime,
            }
        }
    }
</script>
