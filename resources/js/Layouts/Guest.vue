<template>
    <div>
        <header>
            <nav>
                <ul>
                    <li class="bg-green-400"><Link href="/">Home</Link></li>
                    <li class="bg-green-400"><Link href="/about">About</Link></li>
                </ul>
            </nav>
        </header>

        <main>
            <slot/>
        </main>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
