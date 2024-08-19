@props(['active' => false])

<li>
    <a {{ $attributes }} class="{{ $active ? 'font-bold text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500' : '' }} flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
        <span class="sr-only">{{ $slot }}</span>
        {{ $slot }}
    </a>
</li>
