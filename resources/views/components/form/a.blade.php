<a {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center 
px-4 
py-2
bg-green-400 
border border-gray-900
hover:bg-yellow-200
focus:outline-none focus:border-gray-900 focus:ring ring-yellow-400
disabled:opacity-25 transition 
ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
