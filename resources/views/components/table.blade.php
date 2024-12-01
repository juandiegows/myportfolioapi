<div class="relative overflow-x-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($headers as $index => $header)
                <th scope="col" class="px-6 py-3 
                    {{ $loop->first ? 'rounded-tl-lg' : '' }} 
                    {{ $loop->last ? 'rounded-tr-lg' : '' }}">
                    {{ $header }}
                </th>
            @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>