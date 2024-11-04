<template>
    <div>
        <header>
            <nav class="flex align-items-center justify-between bg-green-400">
                <ul class="flex align-items-center">
                    <li><Link :href="route('home')" class="mr-2">Home</Link></li>
                    <li><Link :href="route('about')" class="mr-2">About</Link></li>
                </ul>

                <ul v-if="$page.props.auth.user" class="flex align-items-center">
                    <li><p>User: {{$page.props.auth.user.name}}</p></li>
                    <span>&nbsp;|&nbsp;</span>
                    <li><Link :href="route('logout')" method="post" as="button">Logout</Link></li>
                </ul>

                <ul v-else class="flex align-items-center">
                    <li><Link :href="route('login')">Login</Link></li>
                    <span>&nbsp;|&nbsp;</span>
                    <li><Link :href="route('register')">Register</Link></li>
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
