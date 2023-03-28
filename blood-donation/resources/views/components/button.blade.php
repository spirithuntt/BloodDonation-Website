<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex px-5 py-3 text-white bg-red-700 hover:bg-red-700 focus:bg-red-700 rounded-md ml-6 mb-3']) }}>
    {{ $slot }}
</button>
