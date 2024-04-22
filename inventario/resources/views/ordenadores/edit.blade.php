<x-app-layout>
    <div class="w-1/2 mx-auto">
        <form method="POST"
            action="{{ route('ordenadores.update', ['ordenador' => $ordenador]) }}">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div>
                <x-input-label for="nombre" :value="'Denominación del artículo'" />
                <x-text-input id="nombre" class="block mt-1 w-full"
                    type="text" name="nombre" :value="old('nombre', $ordenador->nombre)" required
                    autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- modelo -->
            <div class="mt-4">
                <x-input-label for="modelo" :value="'modelo del artículo'" />
                <x-text-input id="modelo" class="block mt-1 w-full"
                    type="text" name="modelo" :value="old('modelo', $ordenador->modelo)" required
                    autofocus autocomplete="modelo" />
                <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
            </div>

            <!-- aula -->
            <div class="mt-4">
                <x-input-label for="aula_id" :value="'aula del artículo'" />
                <select id="aula_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    name="aula_id" required>
                    @foreach ($aulas as $aula)
                        <option value="{{ $aula->id }}"
                            {{ old('aula_id', $ordenador->aula_id) == $aula->id ? 'selected' : '' }}
                            >
                            {{ $aula->tipo }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('aula_id')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('ordenadores.index') }}">
                    <x-secondary-button class="ms-4">
                        Volver
                        </x-primary-button>
                </a>
                <x-primary-button class="ms-4">
                    Editar
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
