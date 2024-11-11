<template>
    <Head :title="'MD |'"/>

    <AppLayout>
        <template #header>
            <p>Managing Director</p>
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
                <th>Name</th>
                <th>Number</th>
                <th>Created At</th>
                <th>Last Update</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="(md, i) in mds.data" :key="md.id">
                <td>{{++i}}</td>
                <td>{{md.name}}</td>
                <td>{{md.number}}</td>
                <td>{{md.created}}</td>
                <td>{{md.updated}}</td>
            </tr>
            </tbody>
        </table>

        <Pagination :links="mds"/>

    </AppLayout>
</template>

<script setup>
import Pagination from "@/Components/Pagination.vue";
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import {debounce} from "lodash";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    mds: Object,
    searchTerm: String,
})

const search = ref(props.searchTerm)

watch(search, debounce(
    (query) => router.get('/md', { search: query }, { preserveState:true }),
    500
))

</script>

<style lang="scss" scoped>

</style>
