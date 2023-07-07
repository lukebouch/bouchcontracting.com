<template>
    <div>
        <img
            class="w-full rounded-lg shadow-md"
            :src="person.images.small"
            :srcset="
                person.images.medium + ' 2x, ' + person.images.large + ' 3x'
            "
        />
        <h2
            class="mt-4 text-2xl font-medium text-gray-800"
            v-text="person.name"
        ></h2>
        <p class="text-gray-600" v-text="person.title"></p>
    </div>
</template>

<script>
export default {
    props: ["person"],
};
</script>
