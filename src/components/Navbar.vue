<template>
    <header class="relative z-50" :class="{ 'bg-orange': !transparent }">
        <nav
            class="flex items-center justify-between h-24 px-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Bouch Contracting</span>
                    <img class="h-16 w-auto" src="/logo-white.png" alt="" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-100"
                    @click="openNav()"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        ></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a
                    class="text-sm font-semibold leading-6 text-white"
                    v-for="link in links"
                    v-text="link.label"
                    v-bind:href="link.href"
                ></a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div class="text-sm font-semibold leading-6 text-white">
                    (434) 922-2500
                </div>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true" v-show="open">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50" v-show="open"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10"
            >
                <div class="flex items-center justify-between">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Bouch Contracting</span>
                        <img
                            class="h-14 w-auto"
                            src="/logo-orange.png"
                            alt=""
                        />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-100"
                        @click="closeNav()"
                    >
                        <span class="sr-only">Close menu</span>
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/25">
                        <div class="space-y-2 py-6">
                            <a
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800"
                                v-for="link in links"
                                v-text="link.label"
                                v-bind:href="link.href"
                            ></a>
                        </div>
                        <div class="py-6">
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800"
                                >(434) 922-2500</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    props: ["transparent"],
    data() {
        return {
            open: false,
            links: [
                {
                    label: "Home",
                    href: "/",
                },
                {
                    label: "Our Work",
                    href: "/our-work",
                },
                {
                    label: "Meet the Team",
                    href: "/meet-the-team",
                },
            ],
        };
    },
    methods: {
        openNav() {
            this.open = true;
        },
        closeNav() {
            this.open = false;
        },
    },
};
</script>
