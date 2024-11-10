<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#82cfff] dark:bg-[#82cfff] border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-[#82cfff]/80 dark:hover:bg-[#82cfff]/80 focus:bg-[#82cfff]/90 dark:focus:bg-white active:bg-g[#82cfff]/90 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-[#82cfff]/80 focus:ring-offset-2 dark:focus:ring-offset-[#82cfff] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
