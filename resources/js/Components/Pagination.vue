<script setup>
defineProps({
    links: Array,
})
</script>

<template>
    <div v-if="links.meta.from" class="flex items-center justify-between mt-3">
        <div>
            Showing
            <span class="font-bold">{{links.meta.from}}</span>
            to
            <span class="font-bold">{{links.meta.to}}</span>
            of
            <span class="font-bold">{{links.meta.total}}</span>
            results
        </div>
        <div>
            <Component
                :is="link.url ? 'Link' : 'span'"
                v-for="link in links.meta.links"
                :href="link.url"
                v-html="link.label"
                class="px-2 border border-green-400 rounded-md mx-1 hover:bg-green-400 hover:text-white"
                :class="{'text-gray-400 border-gray-400 hover:bg-gray-400 cursor-not-allowed' : !link.url, 'font-bold text-white bg-green-400 rounded-md' : link.active}"
            />
        </div>
    </div>
</template>

<style scoped lang="scss">

</style>
