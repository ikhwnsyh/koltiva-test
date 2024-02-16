<input
    {{ $attributes->merge([
        'type' => $type ?? '',
        'class' =>
            'w-full px-4 py-2 transition duration-200 border shadow-sm rounded-xl focus:outline-none focus:ring focus:ring-indigo-200',
        'name' => $name ?? '',
        'placeholder' => $placeholder ?? '',
    ]) }}>
