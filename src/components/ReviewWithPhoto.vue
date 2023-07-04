<template>
    <section>
        <div class="h-screen relative">
            <div
                class="absolute z-10 inset-0 h-full w-full flex flex-col justify-center"
            >
                <div class="grid grid-cols-2 gap-8 p-10">
                    <div
                        :class="[
                            'bg-white p-5',
                            'shadow-lg',
                            'max-w-2xl',
                            'mx-auto',
                            { 'col-start-2': flip },
                        ]"
                    >
                        <h3 class="text-4xl font-semibold mb-5">{{ title }}</h3>
                        <figure>
                            <blockquote class="mb-2 text-lg">
                                <slot></slot>
                            </blockquote>
                            <figcaption>
                                <span
                                    class="font-semibold text-lg text-gray-800"
                                    >{{ name }}</span
                                >
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <img
                class="absolute inset-0 h-full w-full object-cover"
                :src="img"
            />
        </div>
    </section>
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
