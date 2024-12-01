<div class="relative overflow-x-auto">
    <table class="w-full mt-2 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($headers as $key => $header)
                    <th scope="col" class="cursor-pointer px-6 py-3 " wire:click="sortBy('{{ $key }}')">
                        {{ $header }}
                        @if ($sortColumn === $key)
                            <span class="ml-2">
                                {{ $sortDirection === 'asc' ? '▲' : '▼' }}
                            </span>
                        @endif
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr class="{{ $classes['row'] ?? '' }}">
                    @foreach ($row as $cell)
                        <td class="{{ $classes['cell'] ?? '' }}">
                            {{ $cell }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
