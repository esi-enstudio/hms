<template>
    <Head title="Email Verification |"/>

    <Container class="w-1/2">
        <div class="mb-4 text-sm text-gray-600">
            Thanks for signing up! Before getting started, could you verify your
            email address by clicking on the link we just emailed to you? If you
            didn't receive the email, we will gladly send you another.
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <PrimaryButton :disabled="form.processing">
                    Resend Verification Email
                </PrimaryButton>
            </div>
        </form>

        <p class="text-green-400 mt-3" v-if="status">{{ status }}</p>
    </Container>
</template>

<script setup>

import PrimaryButton from "@/Components/PrimaryButton.vue";
import {useForm} from "@inertiajs/vue3";
import Container from "@/Components/Container.vue";

const form = useForm({})

defineProps({
    status: String,
})

const submit = () => {
    form.post(route('verification.send'))
}
</script>

<style lang="scss" scoped>

</style>
