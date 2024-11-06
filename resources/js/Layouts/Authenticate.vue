<template>
    <div>
        <header>
            <nav class="flex align-items-center justify-between bg-green-400 p-3">
                <!-- Main Menus -->
                <ul v-if="$page.props.auth.user" class="flex align-items-center space-x-4">
                    <li><Link :href="route('home')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'Main'}">Home</Link></li>

                    <li><Link :href="route('user')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'User'}">Users</Link></li>
                </ul>
                <div v-else></div>

                <ul v-if="$page.props.auth.user" class="flex align-items-center space-x-4">
                    <img class="w-[30px] rounded" :src="$page.props.auth.user.avatar ? ('storage/' + $page.props.auth.user.avatar) : ('https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png')" alt="user image">
                    <li><p class="font-semibold text-white">User: {{$page.props.auth.user.name}}</p></li>
                    <span>|</span>
                    <li><Link class="hover:text-white" :href="route('logout')" method="post" as="button">Logout</Link></li>
                </ul>

                <ul v-else class="flex align-items-center space-x-4">
                    <li><Link :href="route('login')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'Auth/Login'}">Login</Link></li>
                    <span>|</span>
                    <li><Link :href="route('register')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'Auth/Register'}">Register</Link></li>
                </ul>
            </nav>
        </header>

        <main class="max-w-screen-xl mx-auto p-2">
            <slot/>
        </main>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
