<template>
    <div>
        <Authenticate>
            <Head :title="`${$page.component} |`"/>

            <table>
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                </tr>
                </thead>

                <tbody>
                <tr v-for="(user, i) in users.data" :key="user.id">
                    <td>{{++i}}</td>
                    <td>
                        <img class="w-[24px]" :src="user.avatar ? ('storage/' + user.avatar) : ('https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png')" alt="User Avatar">
                    </td>
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.phone}}</td>
                    <td>{{user.role}}</td>
                    <td>{{user.status}}</td>
                    <td>{{user.created}}</td>
                    <td>{{user.updated}}</td>
                </tr>
                </tbody>
            </table>
        </Authenticate>
    </div>
</template>

<script setup>
import Authenticate from "@/Layouts/Authenticate.vue";

defineProps({
    users: Object,
})
</script>

<style lang="scss" scoped>
table, th, td {
    border: 1px solid black;
    padding: 3px;
}
</style>
