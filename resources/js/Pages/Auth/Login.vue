<template>
    <Authenticate>
        <Head title="Login |"/>

        <form @submit.prevent="submit" class="max-w-md mt-5">
            <!-- Phone Number -->
            <TextInput name="Phone Number" v-model="form.phone" :message="form.errors.phone"/>

            <!-- Password -->
            <TextInput type="password" name="Password" v-model="form.password" :message="form.errors.password"/>

            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input v-model="form.remember" id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>

            <button type="submit" :class="form.processing ? 'cursor-not-allowed opacity-50' : ''" class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-400 dark:hover:bg-green-500 dark:focus:ring-green-600" :disabled="form.processing">Log In</button>
        </form>

    </Authenticate>
</template>

<script setup>
import Authenticate from "@/Layouts/Authenticate.vue";
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";


const form = useForm({
    phone: null,
    password: null,
    remember: null,
});

const submit = () => {
    form.post(route("login.attempt"), {
        onError: () => form.reset('password'),
    });
}

</script>
