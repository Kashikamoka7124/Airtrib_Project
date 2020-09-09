<template>
    <collapsible class="mt-40">
        <template #header="{ show }">
            <div class="mx-auto" style="max-width: 75%;">
                <div class="flex items-center bg-primary text-center rounded-t h-40">
                    <div class="flex-1 font-playfair text-white text-20">Organizations to support</div>
                    <div class="pr-20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.61 13.46" width="16" height="16" :class="{ 'rotate-180': !show }"><polyline points="21.11 11.96 11.04 1.5 1.5 11.96" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>
                    </div>
                </div>
            </div>
        </template>

        <div class="border border-primary rounded pt-20 pb-10 px-40">
            <p class="font-bold text-15 text-primary mb-20 text-center">
                Please choose the organizations you wish to support (Optional)
            </p>
            <p class="text-15 text-primary-darker text-center mb-5">
                Humanitarian and environmentally concerned, progressive organizations
            </p>
            <p class="text-secondary-light text-13 text-center">
                For each ticket purchased, AirTrib agrees to donate a third of its part to the organizations of your choice. Add up to three organizations supporting the tribal causes to your account.
            </p>

            <input type="hidden" name="organizations[]" :value="id" v-for="id in selected">

            <div class="flex flex-wrap mt-50">
                <div class="w-1/4 mb-50" v-for="organization in organizations">
                    <div class="relative pb-16" :class="{ 'organization-hover': isOrganizationHoverable(organization.id) }">
                        <div class="flex justify-center">
                            <div class="bg-white border border-primary flex justify-center items-center p-30" style="width: 130px; height: 130px;">
                                <img :src="organization.image">
                            </div>
                        </div>

                        <div class="organization-hover-info">
                            <p class="uppercase text-14 text-secondary">MONGABAY</p>
                            <p class="mt-15 text-13 text-secondary-light px-15">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            </p>
                            <a href="#" class="text-13 text-primary mt-10">Learn more</a>
                        </div>
                    </div>

                    <div class="flex justify-center relative">
                        <div class="hover-fill w-26 h-26 border-2 rounded-full"
                             @click="select(organization.id)"
                             :class="organizationSelectClasses(organization.id)"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.89 22.89" width="14" height="14"><line x1="1.5" y1="11.44" x2="21.39" y2="11.44" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/><line x1="11.44" y1="21.39" x2="11.44" y2="1.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"/></svg>
                        </div>

                        <div class="organization-popup organization-tooltip">
                            <p class="text-11 text-secondary-light px-10">
                                You can choose up to 3 organizations to support.
                            </p>
                        </div>

                        <div class="organization-popup organization-tooltip-limit-reached text-red text-11 px-10">
                            <p>
                                You have reached the maximum of the three organizations to support.
                            </p>
                            <p class="mt-10">
                                You must delete some to be able to choose another organization.
                            </p>
                        </div>

                        <div class="organization-popup organization-tooltip-selected">
                            <p class="text-11 text-secondary-light px-10">
                                Thank you for your choice !
                                MONGABAY has been added to the organizations you support.
                            </p>

                            <p class="text-11 text-primary px-10 mt-10">
                                {{ additionalSelectedTooltipMessage(organization.id) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </collapsible>
</template>

<script>
    import Collapsible from '@/components/Collapsible'

    export default {
        components: {
            Collapsible
        },

        props: {
            old: '',
            organizations: Array
        },

        data() {
            return {
                selected: []
            }
        },

        mounted() {
            if (this.old) {
                for (let i = 0; i < this.old.length; i++) {
                    this.selected.push(parseInt(this.old[i]))
                }
            }
        },

        methods: {
            select(item) {
                let index = this.selected.indexOf(item)

                if (index === -1)
                    return this.add(item)

                this.remove(index)
            },

            add(item) {
                if (this.selected.length < 3)
                    this.selected.push(item)
            },

            remove(index) {
                this.selected.splice(index, 1)
            },

            isOrganizationHoverable(id) {
                return !this.selected.includes(id)
            },

            organizationSelectClasses(id) {
                return {
                    'organization-selected': this.selected.includes(id),
                    'organization-select-tooltip': !this.selected.includes(id) && this.selected.length < 3,
                    'organization-select-tooltip-limit-reached': !this.selected.includes(id) && this.selected.length >= 3,
                }
            },

            additionalSelectedTooltipMessage(id) {
                let messages = [
                    'You can still choose two additional organizations.',
                    'You can still choose one additional organization.',
                    'You have reached the quota of organizations to support.',
                ]

                let index = this.selected.indexOf(id)

                return messages[index]
            }
        }
    }
</script>

<style scoped>
    .organization-selected {
        transform: rotate(45deg);
        color: #ffffff;
        background-color: #AB8A56;
    }
    .organization-selected ~ .organization-tooltip-selected {
        display: block;
    }
</style>
