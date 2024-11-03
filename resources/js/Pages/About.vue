<template>
    <div>
        <Authenticate>
            <Head :title="`${$page.component} |`"/>
            <h1>About - {{ data }}</h1>
        </Authenticate>
    </div>
</template>

<script setup>
import Authenticate from "@/Layouts/Authenticate.vue";

defineProps({
    data: String,
})
</script>

<style lang="scss" scoped>

</style>
