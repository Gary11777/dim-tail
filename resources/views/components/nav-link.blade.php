<a {{ $attributes->merge(['class'
=> 'hover:scale-110
    hover:text-gray-200
    transform transition duration-450
    ease-in-out inline-block']) }}>
    {{ $slot }}
</a>
