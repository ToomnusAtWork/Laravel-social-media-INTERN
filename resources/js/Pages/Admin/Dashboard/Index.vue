<template>
    <Head title="Admin Dashbooard" />
    <div>
        <AdminNav>
        </AdminNav>
        <AdminMenu/>
        <div class="py-12">
            <div class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <div class="w-full grid grid-cols-1">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                        <AdminDashboard></AdminDashboard>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import { Head } from '@inertiajs/vue3';
    import AdminDashboard from '@/Components/Admin/AdminDashboard.vue';
    import AdminMenu from '@/Components/Admin/AdminMenu.vue';
    import AdminNav from '@/Components/Admin/AdminNavigation.vue';
</script>