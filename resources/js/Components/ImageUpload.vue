<template>
    <div class="mb-4">
        <span class="block text-sm font-medium text-slate-700 dark:text-slate-300">
            Image (Max size 2Mb)
        </span>

        <label for="image" class="block w-[150px] rounded-md mt-1 bg-slate-100 h-32 overflow-hidden cursor-pointer border-slate-300 border">
            <img :src="preview ?? '/storage/avatars/preview.jpg'" class="mx-auto w-full h-full" alt="Preview Image">
        </label>

        <input type="file" name="image" id="image" class="hidden">
    </div>
</template>

<script setup>
import {ref} from "vue";

const preview = ref(null)
</script>

<style lang="scss" scoped>

</style>
