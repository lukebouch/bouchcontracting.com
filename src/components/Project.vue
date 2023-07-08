<template>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14">
        <img
            class="rounded-xl shadow-md"
            :src="project.images[0].src"
            :alt="project.images[0].src"
        />
        <div>
            <div class="mb-8">
                <h2 class="text-4xl font-semibold" v-text="project.title"></h2>
                <p
                    class="mt-3"
                    v-if="project.description"
                    v-text="project.description"
                ></p>
            </div>

            <div class="grid grid-cols-2 gap-10">
                <img
                    class="rounded-xl shadow-md"
                    :src="image.src"
                    :alt="image.alt"
                    v-for="image in project.images.slice(1)"
                    :id="image.src"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["project"],
};
</script>
