<template>
    <Head :title="'House Details |'"/>

    <AppLayout>
        <template #header>
            <p><span class="italic">"{{ddHouse.name}}"</span> House Details</p>
        </template>

        <div class="mb-4 text-right">
            <Link :href="route('ddHouse.index')" class="hover:text-green-400">Back to list</Link>
        </div>

        <table>
            <tr>
                <td>DD Code</td>
                <td>{{ddHouse.code}}</td>
            </tr>
            <tr>
                <td>DD Name</td>
                <td>{{ddHouse.name}}</td>
            </tr>

            <tr>
                <td>Cluster</td>
                <td>{{ddHouse.cluster}}</td>
            </tr>

            <tr>
                <td>Region</td>
                <td>{{ddHouse.region}}</td>
            </tr>

            <tr>
                <td>District</td>
                <td>{{ddHouse.district}}</td>
            </tr>

            <tr>
                <td>Thana</td>
                <td>{{ddHouse.thana}}</td>
            </tr>

            <tr>
                <td>Email</td>
                <td>{{ddHouse.email}}</td>
            </tr>

            <tr>
                <td>Address</td>
                <td>{{ddHouse.address}}</td>
            </tr>

            <tr>
                <td>Proprietor Name</td>
                <td>{{ddHouse.proprietor_name}}</td>
            </tr>

            <tr>
                <td>Proprietor Number</td>
                <td>{{ddHouse.contact_number}}</td>
            </tr>

            <tr>
                <td>POC Name</td>
                <td>{{ddHouse.poc_name}}</td>
            </tr>

            <tr>
                <td>POC Number</td>
                <td>{{ddHouse.poc_number}}</td>
            </tr>

            <tr>
                <td>Lifting Date</td>
                <td>{{ddHouse.lifting_date}}</td>
            </tr>

            <tr>
                <td>Remarks</td>
                <td>{{ddHouse.remarks}}</td>
            </tr>

            <tr>
                <td>Created Date</td>
                <td>{{ddHouse.created}}</td>
            </tr>

            <tr>
                <td>Last Update</td>
                <td>{{ddHouse.last_update}}</td>
            </tr>

        </table>

        <div class="flex items-center justify-between mt-4">
            <!-- Edit -->
            <Link :href="route('ddHouse.edit', ddHouse.id)" class="block hover:text-green-400">Edit</Link>

            <!-- Delete -->
            <Link class="block hover:text-red-500">Delete</Link>
        </div>

    </AppLayout>
</template>

<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    ddHouse: Object,
})

</script>

<style lang="scss" scoped>

</style>
