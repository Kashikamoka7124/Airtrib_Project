<template>
    <div class="w-full bg-white-90 rounded px-12 py-8 text-15 text-primary-darker flex items-center justify-between cursor-pointer"
         @click="addFlightSearchRow"
    >
        Add another destination

        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.58 26.59" width="18" height="18"><ellipse cx="13.29" cy="13.3" rx="12.24" ry="12.25" style="fill:none;stroke:#231c12;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.1px"/><path d="M21.61,13.3a1.26,1.26,0,0,0-1.23-1.23H15.87l-4.1-6.54H10.13l2,6.54H7.67L6.44,10.44H5.21L6,13.3l-.82,2.86H6.44l1.23-1.63h4.51l-2,6.54h1.64l4.1-6.54h4.51a1.26,1.26,0,0,0,1.23-1.23Z" style="fill:#231c12"/></svg>
        </span>
    </div>
</template>

<script>
    import { useFlightStore } from 'Store/flight'

    export default {
        setup() {
            const { addFlightSearchRow } = useFlightStore()

            return { addFlightSearchRow }
        }
    }
</script>
