<template>
    <div>
        <p class="text-green-400 pb-4" v-if="status">{{ status }}</p>
    </div>
</template>

<script setup>
defineProps({ status: String })
</script>

<style lang="scss" scoped>

</style>
