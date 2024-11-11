<template>
    <header class="font-bold text-4xl mb-4">
        <slot name="header"/>
    </header>

    <main class="p-4 rounded-md shadow-md bg-green-100 dark:bg-slate-800 dark:text-white">
        <slot/>
    </main>

    <footer class="bg-orange-600 text-white">
        <slot name="footer"/>
    </footer>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
