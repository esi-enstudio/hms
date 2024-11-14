<template>
    <Head :title="'User Details |'"/>

    <AppLayout>
        <template #header>
            <p><span class="italic">"{{props.user.name}}"</span> Details</p>
        </template>

        <div class="mb-4 text-right">
            <Link :href="route('user.index')" class="hover:text-green-400">Back to list</Link>
        </div>

        <table>
            <tbody>
<!--            <tr>-->
<!--                <td>Avatar</td>-->
<!--                <td>-->
<!--                    {{ console.log(props.user.avatar) }}-->
<!--                    <img :src="'/storage' + props.user.avatar" alt="avatar">-->
<!--                </td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>ID</td>-->
<!--                <td>{{props.user.id}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Name</td>-->
<!--                <td>{{props.user.name}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Phone Number</td>-->
<!--                <td>{{props.user.phone}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Email</td>-->
<!--                <td>{{props.user.email}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Role</td>-->
<!--                <td>{{props.user.role}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Status</td>-->
<!--                <td>{{props.user.status}}</td>-->
<!--            </tr>-->

<!--            <tr>-->
<!--                <td>Remarks</td>-->
<!--                <td>{{props.user.remarks}}</td>-->
<!--            </tr>-->

            <tr>
                <td>Created Date</td>
                <td>{{props.user.created_at}}</td>
            </tr>

            <tr>
                <td>Last Update</td>
                <td>{{props.user.updated_at}}</td>
            </tr>

            <tr>
                <td>Email Verify</td>
                <td>{{props.user.email_verified_at}}</td>
            </tr>

            <tr>
                <td>Disabled Date</td>
                <td>{{props.user.disabled_at}}</td>
            </tr>
            </tbody>
        </table>

        <div class="flex items-center justify-between mt-4">
            <!-- Edit -->
            <Link :href="route('user.edit', user.id)" class="block hover:text-green-400">Edit</Link>

            <!-- Delete -->
            <Link :href="route('user.destroy', user.id)" class="block hover:text-red-500">Delete</Link>
        </div>
        {{ console.log(props.user) }}
    </AppLayout>
</template>

<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    user: Object,
})

</script>

<style lang="scss" scoped>

</style>
