@props(['aria'])

<div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
    <ul class="space-y-4" aria-labelledby="{{ $aria }}">
        {{ $slot }}
    </ul>
</div>
