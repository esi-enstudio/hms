<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SessionMessage from "@/Components/SessionMessage.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const form = useForm({
    email: null,
});

defineProps({status: String})

const submit = () => {
    form.post(route("password.email"));
}

</script>

<template>
    <Head title="Forgot Password |"/>

    <AppLayout class="w-1/2">
        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email
            address and we will email you a password reset link that will allow
            you to choose a new one.
        </div>

        <form @submit.prevent="submit" class="space-y-6">
            <!-- Email -->
            <TextInput
                label="Email"
                icon="at"
                v-model="form.email"
                :message="form.errors.email"
            />

            <PrimaryButton :disable="form.processing">
                Send Password Reset Link
            </PrimaryButton>

            <SessionMessage :status="status"/>
        </form>
    </AppLayout>
</template>
