<template>
    <div>
        <header @click="show = !show" class="cursor-pointer">
            <slot name="header" :show="show"></slot>
        </header>

        <transition name="slide">
            <main v-if="show">
                <slot></slot>
            </main>
        </transition>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: true
            }
        }
    }
</script>

<style>
    .slide-enter-active {
        -moz-transition-duration: .15s;
        -webkit-transition-duration: .15s;
        -o-transition-duration: .15s;
        transition-duration: .15s;
        -moz-transition-timing-function: ease-in;
        -webkit-transition-timing-function: ease-in;
        -o-transition-timing-function: ease-in;
        transition-timing-function: ease-in;
    }

    .slide-leave-active {
        -moz-transition-duration: .15s;
        -webkit-transition-duration: .15s;
        -o-transition-duration: .15s;
        transition-duration: .15s;
        -moz-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
        -webkit-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
        -o-transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
        transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    }

    .slide-enter-to, .slide-leave {
        max-height: 1000px;
        overflow: hidden;
    }

    .slide-enter, .slide-leave-to {
        overflow: hidden;
        max-height: 0;
    }
</style>
