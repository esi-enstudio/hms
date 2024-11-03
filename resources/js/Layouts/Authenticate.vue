<template>
    <div>
        <header>
            <nav class="flex align-items-center justify-between bg-green-400">
                <ul class="flex align-items-center">
                    <li><Link :href="route('home')" class="mr-2">Home</Link></li>
                    <li><Link :href="route('about')" class="mr-2">About</Link></li>
                </ul>

                <ul class="flex align-items-center">
                    <li><Link :href="route('login')" class="mr-2">Login</Link></li>
                    <li><Link :href="route('register.create')" class="mr-2">Register</Link></li>
                </ul>
            </nav>
        </header>

        <main>
            <slot/>
        </main>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
