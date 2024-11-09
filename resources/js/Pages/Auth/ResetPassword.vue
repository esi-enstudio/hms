<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import Container from "@/Components/Container.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    form.post(route("password.update"), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
}

</script>

<template>
    <Head title="Reset Password |"/>

    <Container class="w-1/2">
        <form @submit.prevent="submit" class="space-y-6">

            <!-- Email -->
            <TextInput
                label="Email"
                icon="at"
                v-model="form.email"
                :message="form.errors.email"
            />

            <!-- Password -->
            <TextInput
                label="New Password"
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
            <PrimaryButton :disable="form.processing">Reset Password</PrimaryButton>
        </form>
    </Container>
</template>
