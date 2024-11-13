<template>
    <Head :title="'All Zm |'"/>

    <AppLayout>
        <template #header>
            <p>ZM</p>
        </template>

        <div class="flex items-center justify-between mb-3">
            <Link class="border border-green-400 px-4 py-2 rounded-lg hover:bg-green-400 hover:text-white">
                Add New
            </Link>

            <input v-model="search" type="search" placeholder="Type something...">
        </div>

        <table class="w-full">
            <thead>
            <tr>
                <th>SL</th>
                <th>User Name</th>
                <th>Name</th>
                <th>Number</th>
                <th>Designation</th>
                <th>Created At</th>
                <th>Last Update</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="(zm, i) in zms.data" :key="zm.id">
                <td>{{++i}}</td>
                <td>{{zm.user.name}}</td>
                <td>{{zm.name}}</td>
                <td>{{zm.number}}</td>
                <td>{{zm.designation}}</td>
                <td>{{zm.created}}</td>
                <td>{{zm.updated}}</td>
            </tr>
            </tbody>
        </table>

        <Pagination :links="zms"/>

        {{console.log(zms)}}

    </AppLayout>
</template>

<script setup>
import Pagination from "@/Components/Pagination.vue";
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import {debounce} from "lodash";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    zms: Object,
    searchTerm: String,
})

const search = ref(props.searchTerm)

watch(search, debounce(
    (query) => router.get('/zm', { search: query }, { preserveState:true }),
    500
))

</script>

<style lang="scss" scoped>

</style>
