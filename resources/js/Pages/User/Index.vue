<template>
    <Head :title="'All User |'"/>

    <AppLayout>
        <SessionMessage :status="status"/>

        <template #header>
            <p>Users</p>
        </template>

        <div class="flex items-center justify-between mb-3">
            <Link :href="route('user.create')" class="border border-green-400 px-4 py-2 rounded-lg hover:bg-green-400 hover:text-white">
                Add New
            </Link>

            <input v-model="search" type="search" placeholder="Type something...">
        </div>

        <table class="w-full">
            <thead>
            <tr>
                <th>SL</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Update</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="(user, i) in users.data" :key="user.id">
                <td>{{++i}}</td>
                <td>
                    <img class="w-[35px]" :src="user.avatar ? ('storage/' + user.avatar) : ('https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png')" alt="User Avatar">
                </td>
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.phone}}</td>
                <td>{{user.role}}</td>
                <td>{{user.status}}</td>
                <td>{{user.created}}</td>
                <td>{{user.updated}}</td>
            </tr>
            </tbody>
        </table>

        <Pagination :links="users"/>

    </AppLayout>
</template>

<script setup>
import Pagination from "@/Components/Pagination.vue";
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import {debounce} from "lodash";
import AppLayout from "@/Layouts/AppLayout.vue";
import SessionMessage from "@/Components/SessionMessage.vue";

const props = defineProps({
    users: Object,
    searchTerm: String,
    status: String,
})

const search = ref(props.searchTerm)

watch(search, debounce(
    (query) => router.get('/user', { search: query }, { preserveState:true }),
    500
))

</script>

<style lang="scss" scoped>

</style>
