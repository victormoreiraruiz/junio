<x-app-layout>
    <div class="w-1/2 mx-auto">
        <!-- Título -->
        <div>
            <x-input-label for="titulo" :value="'Título del videojuego'" />
            <x-text-input id="titulo" class="block mt-1 w-full"
                type="text" name="titulo" :value="old('titulo', $videojuego->titulo)" required
                autofocus autocomplete="titulo" disabled />
        </div>

        <!-- Título -->
        <div class="mt-4">
            <x-input-label for="anyo" :value="'anyo de entradas'" />
            <x-text-input id="anyo" class="block mt-1 w-full"
                type="text" name="anyo" :value="old('anyo', $anyo)" required
                autofocus autocomplete="anyo" disabled />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('videojuegos.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
