<template>
    <div>
        <header>
            <nav class="flex align-items-center justify-between bg-green-400 dark:bg-slate-800 p-3 text-white">
                <!-- Main Menus -->
                <ul v-if="user" class="flex align-items-center space-x-4">
                    <li>
                        <NavLink routeName="home" componentName="Main">Home</NavLink>
                    </li>

                    <li>
                        <NavLink routeName="user.index" componentName="User">Users</NavLink>
                    </li>
                </ul>
                <div v-else></div>

                <ul v-if="user" class="flex align-items-center space-x-4">
                    <button @click="switchTheme" class="hover:bg-green-500 w-6 h-6 grid place-items-center rounded-full hover:outline outline-1 outline-green-500">
                        <i class="text-white fa-solid fa-circle-half-stroke"></i>
                    </button>

                    <img class="w-[30px] rounded" :src="user.avatar ? ('storage/' + user.avatar) : ('https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png')" alt="user image">
                    <li><p class="font-semibold text-white">User: {{ user.name }}</p></li>
                    <span>|</span>
                    <li><Link class="hover:text-white" :href="route('logout')" method="post" as="button">Logout</Link></li>
                </ul>

                <ul v-else class="flex align-items-center space-x-4">
                    <button @click="switchTheme" class="hover:bg-green-500 w-6 h-6 grid place-items-center rounded-full hover:outline outline-1 outline-green-500">
                        <i class="text-white fa-solid fa-circle-half-stroke"></i>
                    </button>

                    <li><Link :href="route('login')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'Auth/Login'}">Login</Link></li>
                    <span>|</span>
                    <li><Link :href="route('register')" class="hover:text-white" :class="{'text-white bg-green-500 rounded p-2' : $page.component === 'Auth/Register'}">Register</Link></li>
                </ul>
            </nav>
        </header>

        <main class="max-w-screen-xl mx-auto py-2">
            <slot/>
        </main>
    </div>
</template>

<script setup>
import {switchTheme} from "@/theme.js";
import NavLink from "@/Components/NavLink.vue";
import {usePage} from "@inertiajs/vue3";
import {computed} from "vue";

const page = usePage()
const user = computed(() => page.props.auth.user)
</script>

<style lang="scss" scoped>

</style>
