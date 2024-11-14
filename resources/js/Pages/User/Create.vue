<template>
    <Head :title="'Create User |'"/>

    <AppLayout>
        <template #header>
            <p>Create User</p>
        </template>

        <div class="mb-4 text-right">
            <Link :href="route('user.index')" class="hover:text-green-400">Back to list</Link>
        </div>

        <form @submit.prevent="form.post(route('user.store'))">
            <!-- Image Upload -->
            <ImageUpload @image="(e) => form.avatar = e"/>

            <!-- Full Name -->
            <TextInput
                label="Full Name"
                icon="user-plus"
                v-model="form.name"
                :message="form.errors.name"
            />

            <!-- Phone Number -->
            <TextInput
                label="Phone Number"
                icon="phone"
                v-model="form.phone"
                :message="form.errors.phone"
            />

            <!-- Email -->
            <TextInput
                label="Email"
                icon="at"
                v-model="form.email"
                :message="form.errors.email"
            />

            <!-- Role -->
            <Select
                label="Role"
                icon="person-circle-question"
                v-model="form.role"
                :message="form.errors.role"
            >
                <option value="user">User</option>
                <option value="md">Md</option>
                <option value="zm">Zm</option>
                <option value="manager">Manager</option>
                <option value="supervisor">Supervisor</option>
                <option value="rso">Rso</option>
                <option value="operator">Dms Operator</option>
                <option value="account">Account</option>
            </Select>

            <!-- Password -->
            <TextInput
                label="Password"
                icon="lock"
                type="password"
                v-model="form.password"
                :message="form.errors.password"
            />

            <!-- Confirm Password -->
            <TextInput
                label="Confirm Password"
                icon="lock"
                type="password"
                v-model="form.password_confirmation"
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
import {useForm} from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Select from "@/Components/Select.vue";
import ImageUpload from "@/Components/ImageUpload.vue";

const form = useForm({
    avatar: null,
    name: null,
    phone: null,
    email: null,
    password: null,
    password_confirmation: null,
    remarks: null,
    role: null,
})

</script>

<style lang="scss" scoped>

</style>
