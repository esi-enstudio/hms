<template>
    <Authenticate>
        <Head title="Register |"/>

        <form @submit.prevent="submit" class="max-w-md mt-5">

            <!-- Upload Avatar -->
            <div class="grid place-items-center">
                <div
                    class="relative w-28 h-28 rounded-full overflow-hidden border border-slate-300"
                >
                    <label for="avatar" class="absolute inset-0 grid content-end cursor-pointer">
                        <span class="bg-white/70 pb-2 text-center">Avatar</span>
                    </label>
                    <input type="file" @input="change" id="avatar" hidden />

                    <img
                        class="object-cover w-28 h-28"
                        :src="form.preview ?? 'https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png'"
                     alt="register user image"/>
                </div>

                <p class="text-sm text-red-500 font-semibold mt-2">{{ form.errors.avatar }}</p>
            </div>
            <!-- End Upload Avatar -->

            <!-- Full Name -->
            <TextInput name="Full Name" v-model="form.name" :message="form.errors.name"/>

            <!-- Phone Number -->
            <TextInput name="Phone Number" v-model="form.phone" :message="form.errors.phone"/>

            <!-- Email -->
            <TextInput name="Email" v-model="form.email" :message="form.errors.email"/>

            <!-- Password -->
            <TextInput type="password" name="Password" v-model="form.password" :message="form.errors.password"/>

            <!-- Confirm Password -->
            <TextInput type="password" name="Confirm Password" v-model="form.password_confirmation"/>

            <button type="submit" :class="form.processing ? 'cursor-not-allowed opacity-50' : ''" class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-400 dark:hover:bg-green-500 dark:focus:ring-green-600" :disabled="form.processing">Register</button>
        </form>

    </Authenticate>
</template>

<script setup>
import Authenticate from "@/Layouts/Authenticate.vue";
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";


const form = useForm({
    name: null,
    phone: null,
    email: null,
    password: null,
    password_confirmation: null,
    avatar: null,
    preview: null,
});

const change = (e) => {
    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0])
}

const submit = () => {
    form.post(route("register.attempt"), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
}

</script>
