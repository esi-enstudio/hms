<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

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

<template>
    <Head title="Register |"/>

    <AppLayout class="w-1/2">
        <h1 class="text-3xl mb-4 text-center">Registration</h1>

        <form @submit.prevent="submit" class="space-y-6">

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
            <TextInput
                label="Full Name"
                icon="id-badge"
                v-model="form.name"
                :message="form.errors.name"
            />

            <!-- Phone Number -->
            <TextInput
                label="Phone Number"
                icon="mobile-screen-button"
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

            <!-- Submit Button -->
            <PrimaryButton :disable="form.processing">Register</PrimaryButton>
        </form>
    </AppLayout>
</template>
