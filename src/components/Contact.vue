<template>
    <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <svg
            class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true"
        >
            <defs>
                <pattern
                    id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527"
                    width="200"
                    height="200"
                    x="50%"
                    y="-64"
                    patternUnits="userSpaceOnUse"
                >
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-64" class="overflow-visible fill-gray-50">
                <path
                    d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M299.5 800h201v201h-201Z"
                    stroke-width="0"
                />
            </svg>
            <rect
                width="100%"
                height="100%"
                stroke-width="0"
                fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)"
            />
        </svg>
        <div class="mx-auto max-w-xl lg:max-w-2xl">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900">
                Let’s talk about your project
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                We help companies and individuals build out their brand
                Curabitur tempus sed velit euismod finibus. Nam ac mauris mi.
                Vestibulum massa lectus.
            </p>
            <form
                method="POST"
                class="lg:flex-auto mt-14"
                netlify
                name="contact"
            >
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label
                            for="first-name"
                            class="block text-sm font-semibold leading-6 text-gray-900"
                            >First name</label
                        >
                        <div class="mt-2.5">
                            <input
                                type="text"
                                name="first-name"
                                id="first-name"
                                autocomplete="given-name"
                                required
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 outline-none"
                            />
                        </div>
                    </div>
                    <div>
                        <label
                            for="last-name"
                            class="block text-sm font-semibold leading-6 text-gray-900"
                            >Last name</label
                        >
                        <div class="mt-2.5">
                            <input
                                type="text"
                                name="last-name"
                                id="last-name"
                                autocomplete="family-name"
                                required
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 outline-none"
                            />
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label
                            for="budget"
                            class="block text-sm font-semibold leading-6 text-gray-900"
                            >Budget</label
                        >
                        <div class="mt-2.5">
                            <input
                                id="budget"
                                name="budget"
                                type="text"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 outline-none"
                            />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label
                            for="description"
                            class="block text-sm font-semibold leading-6 text-gray-900"
                            >A little bit about the project</label
                        >
                        <div class="mt-2.5">
                            <textarea
                                id="message"
                                name="message"
                                rows="4"
                                required
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6 outline-none"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button
                        type="submit"
                        class="block w-full md:w-auto rounded-md bg-orange-600 px-10 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
