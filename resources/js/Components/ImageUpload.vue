<template>
    <div class="mb-4">
        <figure
            class="h-[140px] mx-auto max-w-[12rem] bg-slate-100 rounded-lg border-green-400 border-2"
            :class="{'!border-red-500' : oversizedImage}"
        >
            <label for="image" class="cursor-pointer">
                <img class="h-full max-w-full rounded-lg mx-auto" :src="preview ?? '/storage/avatars/preview.png'" alt="image description">
            </label>

            <figcaption
                class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"
                :class="{'!text-red-500' : oversizedImage}"
            >
                {{ oversizedImage ? 'The selected image exceeds 1Mb' : 'Image (Max size 1Mb)'}}
            </figcaption>
        </figure>

        <input @input="selectImage" type="file" name="image" id="image" class="hidden">
    </div>
</template>

<script setup>
import {ref} from "vue";

const emit = defineEmits(['image'])
const preview = ref(null)
const oversizedImage = ref(false)

const selectImage = (e) => {
    preview.value = URL.createObjectURL(e.target.files[0]);
    oversizedImage.value = e.target.files[0].size > 1000000;
    emit('image', e.target.files[0]);
}
</script>

<style lang="scss" scoped>

</style>
