<x-app-layout>
    <div class="p-6 text-gray-900">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Vuelo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Origen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Destino
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asiento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Salida
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Llegada
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4  text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('reservas.show', $reserva) }}">
                                    {{ $reserva->vuelo->codigo }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->vuelo->origen->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->vuelo->destino->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->asiento }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->vuelo->salida }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->vuelo->llegada }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reserva->vuelo->precio }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
