<template>
    <Head :title="'Create House |'"/>

    <AppLayout>
        <template #header>
            <p>Create House</p>
        </template>

        <div class="mb-4 text-right">
            <Link :href="route('ddHouse.index')" class="hover:text-green-400">Back to list</Link>
        </div>

        <form @submit.prevent="form.post(route('ddHouse.store'))">

            <!-- DD Code -->
            <TextInput
                label="DD Code"
                icon="code-merge"
                v-model="form.code"
                :message="form.errors.code"
            />

            <!-- DD Name -->
            <TextInput
                label="DD Name"
                icon="font"
                v-model="form.name"
                :message="form.errors.name"
            />

            <!-- Cluster -->
            <TextInput
                label="Cluster"
                icon="circle-nodes"
                v-model="form.cluster"
                :message="form.errors.cluster"
            />

            <!-- Region -->
            <TextInput
                label="Region"
                icon="chart-area"
                v-model="form.region"
                :message="form.errors.region"
            />

            <!-- District -->
            <TextInput
                label="District"
                icon="warehouse"
                v-model="form.district"
                :message="form.errors.district"
            />

            <!-- Thana -->
            <TextInput
                label="Thana"
                icon="dharmachakra"
                v-model="form.thana"
                :message="form.errors.thana"
            />

            <!-- Email -->
            <TextInput
                label="Email"
                icon="at"
                v-model="form.email"
                :message="form.errors.email"
            />

            <!-- Address -->
            <TextInput
                label="Address"
                icon="address-book"
                v-model="form.address"
                :message="form.errors.address"
            />

            <!-- Proprietor Name -->
            <TextInput
                label="Proprietor Name"
                icon="person"
                v-model="form.proprietor_name"
                :message="form.errors.proprietor_name"
            />

            <!-- Contact Number -->
            <TextInput
                label="Contact Number"
                icon="phone"
                v-model="form.contact_number"
                :message="form.errors.contact_number"
            />

            <!-- POC Name -->
            <TextInput
                label="POC Name"
                icon="person"
                v-model="form.poc_name"
                :message="form.errors.poc_name"
            />

            <!-- POC Number -->
            <TextInput
                label="POC Number"
                icon="phone"
                v-model="form.poc_number"
                :message="form.errors.poc_number"
            />

            <!-- Lifting Date -->
            <TextInput
                label="Lifting Date"
                icon="calendar-days"
                type="date"
                v-model="form.lifting_date"
                :message="form.errors.lifting_date"
            />

            <!-- Remarks -->
            <TextInput
                label="Remarks"
                icon="comments"
                v-model="form.remarks"
                :message="form.errors.remarks"
            />

            <PrimaryButton :disable="form.processing">Create</PrimaryButton>
        </form>

    </AppLayout>
</template>

<script setup>
import Pagination from "@/Components/Pagination.vue";
import {ref, watch} from "vue";
import {router, useForm} from "@inertiajs/vue3";
import {debounce} from "lodash";
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextArea from "@/Components/TextArea.vue";

const form = useForm({
    code: null,
    name: null,
    cluster: null,
    region: null,
    district: null,
    thana: null,
    email: null,
    address: null,
    proprietor_name: null,
    contact_number: null,
    poc_name: null,
    poc_number: null,
    lifting_date: null,
    remarks: null,
})

</script>

<style lang="scss" scoped>

</style>
