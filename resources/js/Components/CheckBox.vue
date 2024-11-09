<template>
    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input
                v-model="model"
                :id="name"
                type="checkbox"
                class="w-4 h-4 border !checked:bg-green-400 border-green-300 rounded bg-green-50 focus:ring-3 focus:ring-green-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-green-800 dark:focus:ring-offset-green-800" />
        </div>

        <label
            :for="name"
            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            <slot/>
        </label>
    </div>
</template>

<script setup>
const model = defineModel()

defineProps({
    name: String,
})
</script>

<style lang="scss" scoped>

</style>
