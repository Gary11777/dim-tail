<a {{ $attributes->merge(['class'
=> 'px-3 py-1 font-sans border rounded-sm
               transition-all duration-300
            hover:bg-gray-500 hover:text-white
            border-gray-500 text-gray-500'])
            }}>
    {{ $slot }}
</a>
