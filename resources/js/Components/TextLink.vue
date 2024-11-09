<template>
    <div>
        <Link
            :href="route(routeName)"
            class="text-sm font-medium text-green-400 dark:text-gray-300 underline">
            {{ label }}
        </Link>
    </div>
</template>

<script setup>
defineProps({
    routeName: String,
    label: String,
})
</script>

<style lang="scss" scoped>

</style>
