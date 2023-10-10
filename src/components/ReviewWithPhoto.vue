<template>
    <div class="h-screen">
        <div class="h-full relative my-32 mx-40">
            <div
                class="absolute z-10 inset-0 h-full w-full flex flex-col justify-center"
            >
                <div class="p-10 w-full">
                    <div
                        :class="[
                            'bg-white p-14',
                            'shadow-lg',
                            'max-w-4xl',
                            { 'ml-48 mr-auto': !flip },
                            { 'mr-48 ml-auto': flip },
                        ]"
                    >
                        <h3 class="text-4xl font-semibold mb-5">{{ title }}</h3>
                        <figure>
                            <blockquote class="mb-2 text-lg">
                                <slot></slot>
                            </blockquote>
                            <figcaption>
                                <span class="font-semibold text-lg text-gray-800">{{
                                    name
                                }}</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <img class="absolute inset-0 h-full w-full object-cover" :src="img" />
        </div>
    </div>
</template>

<script>
import { ref } from "vue";

export default {
    props: {
        name: {
            type: String,
            required: true,
        },
        img: {
            type: String,
            required: true,
        },
        title: {
            type: String,
            required: true,
        },
        flip: {
            type: Boolean,
            default: false,
        },
    },
    setup(props) {
        // Destructure the props
        const { name, img, title, flip } = props;

        return {
            name,
            img,
            title,
            flip,
        };
    },
};
</script>

<style>
/* Add the necessary styles here */
</style>
