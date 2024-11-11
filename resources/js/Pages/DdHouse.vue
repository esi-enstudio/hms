<template>
    <div>
        <Head :title="`${$page.component} |`"/>

        <div class="flex items-center justify-between mb-3">
            <Link class="border border-green-400 px-4 py-2 rounded-lg hover:bg-green-400 hover:text-white">
                Add New
            </Link>

            <input v-model="search" type="search" placeholder="Type something...">
        </div>

        <table class="w-full">
            <thead class="border-solid border border-green-400">
            <tr>
                <th class="border-solid border border-green-400">SL</th>
                <th class="border-solid border border-green-400">DD Code</th>
                <th class="border-solid border border-green-400">Name</th>
                <th class="border-solid border border-green-400">Created At</th>
                <th class="border-solid border border-green-400">Last Update</th>
            </tr>
            </thead>

            <tbody>
            <tr class="border-solid border border-green-400" v-for="(ddHouse, i) in ddHouses.data" :key="ddHouse.id">
                <td class="border-solid border border-green-400">{{++i}}</td>
                <td class="border-solid border border-green-400">{{ddHouse.code}}</td>
                <td class="border-solid border border-green-400">{{ddHouse.name}}</td>
                <td class="border-solid border border-green-400">{{ddHouse.created}}</td>
                <td class="border-solid border border-green-400">{{ddHouse.updated}}</td>
            </tr>
            </tbody>
        </table>

        <Pagination :links="ddHouses"/>

    </div>
</template>

<script setup>
import Pagination from "@/Components/Pagination.vue";
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import {debounce} from "lodash";

const props = defineProps({
    ddHouses: Object,
    searchTerm: String,
})

const search = ref(props.searchTerm)

watch(search, debounce(
    (query) => router.get('/ddHouse', { search: query }, { preserveState:true }),
    500
))

</script>

<style lang="scss" scoped>

</style>
