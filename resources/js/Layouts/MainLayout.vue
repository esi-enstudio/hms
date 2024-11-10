<template>
    <div>
        <div v-show="userMenu" @click="userMenu = false" class="fixed inset-0 z-40"></div>
        <header>
            <nav class="flex justify-between bg-green-400 dark:bg-slate-800 text-white px-3 py-1">
                <!-- Left Menus -->
                <div v-if="user" class="flex items-center space-x-3">
                    <div class="relative">
                        <NavLink routeName="home" componentName="Main">Home</NavLink>
                        <div class="absolute bg-red-400 top-11">
                            <a href="#" class="block">Drop 1</a>
                            <a href="#" class="block">Drop 1</a>
                            <a href="#" class="block">Drop 1</a>
                            <a href="#" class="block">Drop 1</a>
                        </div>
                    </div>



                    <NavLink routeName="user.index" componentName="User">Users</NavLink>
                </div>

                <div v-else></div>

                <!-- Right Menus -->
                <div class="flex items-center space-x-4">
                    <!-- Dark/Light Mode -->
                    <button @click="switchTheme" class="hover:bg-green-500 w-6 h-6 grid place-items-center rounded-full hover:outline outline-1 outline-green-500">
                        <i class="text-white fa-solid fa-circle-half-stroke"></i>
                    </button>

                    <div>
                        <!-- Auth Menus -->
                        <div v-if="user" class="flex items-center space-x-3">
                            <!-- Auth User Image -->
                            <img class="w-[30px] rounded-md" :src="user.avatar ? ('storage/' + user.avatar) : ('https://icons.veryicon.com/png/o/miscellaneous/user-avatar/user-avatar-male-5.png')" alt="user image">

                            <div class="relative">
                                <!-- Auth User Name -->
                                <div @click="userMenu = !userMenu"
                                    :class="{'bg-green-500' : userMenu}"
                                    class="flex items-center gap-2 px-3 py-1 rounded-md hover:bg-green-500 cursor-pointer">
                                    <p class="font-semibold text-white">User: {{ user.name }}</p>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>

                                <!-- Dropdown Menu -->
                                <div v-show="userMenu" @click="userMenu = false" class="absolute z-50 top-12 right-0 bg-green-600 rounded-md border-green-400 border overflow-hidden w-40">
                                    <p class="w-full text-left px-3 py-2">Dashboard</p>
                                    <Link class="w-full text-left px-3 py-1" :href="route('logout')" method="post" as="button">Logout</Link>
                                </div>


                            </div>
                        </div>

                        <!-- Guest Menus -->
                        <div v-else class="flex items-center space-x-3">
                            <Link :href="route('login')" :class="{'text-white bg-green-500 rounded-md px-2 py-1' : $page.component === 'Auth/Login'}">Login</Link>

                            <span>|</span>

                            <Link :href="route('register')" :class="{'text-white bg-green-500 rounded-md px-2 py-1' : $page.component === 'Auth/Register'}">Register</Link>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="max-w-screen-xl mx-auto p-3">
            <slot/>
        </main>
    </div>
</template>

<script setup>
import {switchTheme} from "@/theme.js";
import NavLink from "@/Components/NavLink.vue";
import {usePage} from "@inertiajs/vue3";
import {computed, ref} from "vue";

const page = usePage()
const user = computed(() => page.props.auth.user)
const userMenu = ref()
</script>

<style lang="scss" scoped>

</style>
