<template>
    <Head :title="'All House |'"/>

    <AppLayout>
        <SessionMessage :status="status"/>

        <template #header>
            <p>DD House</p>
        </template>

        <div class="flex items-center justify-between mb-3">
            <Link :href="route('ddHouse.create')" class="border border-green-400 px-4 py-2 rounded-lg hover:bg-green-400 hover:text-white">
                Add New
            </Link>

            <input v-model="search" type="search" placeholder="Type something...">
        </div>

        <table class="w-full">
            <thead>
            <tr>
                <th>SL</th>
                <th>DD Code</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Last Update</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="(ddHouse, i) in ddHouses.data" :key="ddHouse.id">
                <td>{{++i}}</td>
                <td>{{ddHouse.code}}</td>
                <td>{{ddHouse.name}}</td>
                <td>{{ddHouse.created}}</td>
                <td>{{ddHouse.updated}}</td>
                <td class="text-center space-x-2">
                    <Link :href="route('ddHouse.show', ddHouse.id)" class="hover:text-green-400">Show</Link>
                    <Link :href="route('ddHouse.edit', ddHouse.id)" class="hover:text-green-400">Edit</Link>
                    <span>Delete</span>
                </td>
            </tr>
            </tbody>
        </table>

        <Pagination :links="ddHouses"/>

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
    ddHouses: Object,
    searchTerm: String,
    status: String,
})

const search = ref(props.searchTerm)

watch(search, debounce(
    (query) => router.get('/ddHouse', { search: query }, { preserveState:true }),
    500
))

</script>

<style lang="scss" scoped>

</style>
