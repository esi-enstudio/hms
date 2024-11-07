<script setup>
defineProps({
    links: Array,
})
</script>

<template>
    <div class="flex items-center justify-between mt-3">
        <div>
            Showing <span>{{links.meta.from}}</span> to <span>{{links.meta.to}}</span> of <span>{{links.meta.total}}</span> results
        </div>
        <div>
            <Component
                :is="link.url ? 'Link' : 'span'"
                v-for="link in links.meta.links"
                :href="link.url"
                v-html="link.label"
                class="px-1"
                :class="{'text-gray-400' : !link.url, 'font-bold text-green-500' : link.active}"
            />
        </div>
    </div>
</template>

<style scoped lang="scss">

</style>
