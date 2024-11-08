<script setup>
defineProps({
    routeName: String,
    componentName: String,
})
</script>

<template>
    <Link
        :href="route(routeName)"
        class="px-3 py-2 rounded-lg hover:bg-green-500"
        :class="{'text-white bg-green-500 rounded p-2' : $page.component === componentName}"
    >
        <slot/>
    </Link>

<!--    -->
</template>

<style scoped lang="scss">

</style>
