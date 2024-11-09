<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Container from "@/Components/Container.vue";
import TextLink from "@/Components/TextLink.vue";
import CheckBox from "@/Components/CheckBox.vue";
import SessionMessage from "@/Components/SessionMessage.vue";

const form = useForm({
    phone: null,
    password: null,
    remember: null,
});

defineProps({ status: String })

const submit = () => {
    form.post(route("login.attempt"), {
        onFinish: () => form.reset('password'),
    });
}

</script>

<template>
    <Head title="Login |"/>

    <Container class="w-1/2">
        <SessionMessage :status="status"/>

        <h1 class="text-3xl mb-4 text-center">Login</h1>

        <form @submit.prevent="submit" class="space-y-6">
            <!-- Phone Number -->
            <TextInput
                label="Phone Number"
                icon="mobile-screen-button"
                v-model="form.phone"
                :message="form.errors.phone"
            />

            <!-- Password -->
            <TextInput
                label="Password"
                icon="lock"
                type="password"
                v-model="form.password"
                :message="form.errors.password"
            />

            <div class="flex items-center justify-between">
                <CheckBox name="remember" v-model="form.remember">Remember me</CheckBox>

                <TextLink label="Forgot Password" routeName="password.request"/>
            </div>

            <PrimaryButton :disable="form.processing">Log In</PrimaryButton>
        </form>
    </Container>
</template>
