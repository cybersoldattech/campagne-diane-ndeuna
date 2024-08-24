<div x-data="{ isVisible: false }"
        x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })"
        class="fixed bottom-6 right-6 z-10 text-white bg-gradient-to-r from-funky_frog-400 via-funky_frog-500 to-funky_frog-100 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
        x-show="isVisible" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2">
        <button title="Scroll to top" aria-label="Scroll to top"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.99 7.5 8.24 3.75m0 0L4.49 7.5m3.75-3.75v16.499h11.25" />
            </svg>
        </button>
</div>