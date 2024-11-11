@props(['disabled' => false,'icon' => null])

<div class="flex-1">
    <div class="relative flex items-center">
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>

        <div class="absolute left-4">
            @if ($icon)
            <!-- Mostrar el icono si se pasa como parámetro -->
            <img class="w-4" src="{{ $icon }}" alt="{{ $icon }}">
            @else
            <!-- Mostrar el icono si se pasa por slot -->
            {{ $slot }}
            @endif
        </div>
    </div>
</div>
