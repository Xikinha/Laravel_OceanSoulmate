<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-xs uppercase font-bold bg-sky-600 text-white px-4 py-2 rounded-full hover:bg-white hover:text-sky-600 border-2 border-transparent hover:border-sky-600 focus:border-sky-600 active:bg-sky-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
