<template>
    <Authenticate>
        <Head title="Register |"/>

        <h1>Register Page</h1>

        <form @submit.prevent="submit" class="max-w-md mt-5">
            <!-- Full Name -->
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                <input v-model="form.name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <small v-if="form.errors.name" class="text-red-500 font-semibold">{{ form.errors.name }}</small>
            </div>

            <!-- Phone Number -->
            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                <input v-model="form.phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <small v-if="form.errors.phone" class="text-red-500 font-semibold">{{ form.errors.phone }}</small>
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input v-model="form.email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <small v-if="form.errors.email" class="text-red-500 font-semibold">{{ form.errors.email }}</small>
            </div>

            <!-- Password -->
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input v-model="form.password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <small v-if="form.errors.password" class="text-red-500 font-semibold">{{ form.errors.password }}</small>
            </div>

            <!-- Confirm Password -->
            <div class="mb-5">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                <input v-model="form.password_confirmation" type="password" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <button type="submit" :class="form.processing ? 'cursor-not-allowed opacity-50' : ''" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" :disabled="form.processing">Register</button>
        </form>

    </Authenticate>
</template>

<script setup>
import Authenticate from "@/Layouts/Authenticate.vue";
import { useForm } from "@inertiajs/vue3";


const form = useForm({
    name: null,
    phone: null,
    email: null,
    password: null,
    password_confirmation: null
});

const submit = () => {
    form.post("/register", {
        onError: () => form.reset('password', 'password_confirmation'),
    });
}

</script>

<style lang="scss" scoped>

</style>
