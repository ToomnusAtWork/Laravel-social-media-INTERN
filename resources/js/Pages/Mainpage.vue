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
                    <div class="flex h-16 justify-between">
                            <div class="shrink-0 flex items-center mt-2">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
                                </Link>
                            </div>
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
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
                    </div>
                </div>
            </nav>
            <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-24 xl:py-30">
                <div class="lg:w-3/5 xl:w-2/5 flex flex-col items-start relative z-10">
                    <span class="uppercase text-black-100 text-xl">Socialsociety</span>
                    <h1 class="font-roboto-slab text-4xl sm:text-6xl text-red-400 leading-tight mt-4">
                        Start engage with your <br> team now!
                    </h1>
                    <div class="max-w-md">
                        <p class="font-source-sans-pro text-indigo-500 mt-6 text-lg">
                            SocialSociety can enhance team collaboration and productivity, 
                            thereby leading to greater success in organizing efforts.
                        </p>
                    </div>
                    <a href="#" class="block bg-indigo-500 hover:bg-purple-300 py-2 px-4 rounded-full text-sm font-mitr text-white uppercase mt-10">Get started</a>
                </div>
                <div class="lg:w-2/5 xl:3/5 flex flex-col items-end relative ml-16">
                    <img src="../../image/BG.png" alt="BG">
                </div>
            </div>
        </div>
    </div>
</template>