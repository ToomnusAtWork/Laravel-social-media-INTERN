<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/NavLink.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>


<template>
    <Head title="Home" />

    <div>
        <div class="min-h-screen bg-white">
            <nav class="bg-white border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-wrap h-16 justify-between">
                        <Link :href="route('home')">
                            <div class="flex mt-5 w-auto">
                                <ApplicationLogo/>
                                <div class="mx-3 relative content-center">
                                    <span class="font-bold text-xl">SocialSociety</span>
                                </div>
                            </div>
                        </Link>
                        <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex ">
                            <NavLink :href="route('home')" :active="route().current('home')">
                                Forum
                            </NavLink>
                            <NavLink :href="route('chat')" :active="route().current('chat')" >
                                Chat
                            </NavLink>
                            <NavLink>
                                Login
                            </NavLink>
                            <NavLink>
                                Sign up
                            </NavLink>
                        </div>

                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>

                        
                    </div>
                </div>
            </nav>
            <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-24 xl:py-30">
                <div class="lg:w-3/5 xl:w-2/5 flex flex-col items-start relative z-10">
                    <!-- <span class="uppercase text-black-100 text-xl">Socialsociety</span> -->
                    <h1 class="font-roboto-slab text-4xl sm:text-6xl text-red-400 leading-tight mt-4">
                        Start engaging with your <br> team now!
                    </h1>
                    <div class="max-w-md">
                        <p class="font-source-sans-pro text-indigo-500 mt-6 text-lg">
                            SocialSociety can enhance team collaboration and productivity, 
                            thereby leading to greater success in organizing efforts.
                        </p>
                    </div>
                    <a href="#" class="block bg-indigo-500 hover:bg-purple-300 py-2 px-4 rounded-full text-sm font-mitr transition duration-150 ease-in-out text-white uppercase mt-10">Get started</a>
                </div>
                <div class="lg:w-2/5 xl:3/5 flex flex-col items-end relative ml-16">
                    <img src="../../image/BG.png" alt="BG">
                </div>
            </div>
        </div>
    </div>
</template>