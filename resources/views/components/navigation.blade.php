<div x-data="{ open: false }">
    <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#" aria-label="Home">
                        <img class="w-auto h-8 sm:h-10" src="/img/logos/workflow-mark-on-white.svg" alt="Logo" />
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button @click="open = true" type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500"
                            id="main-menu" aria-label="Main menu" aria-haspopup="true">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4">
                <a href="#"
                    class="font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">Product
                </a>
                <a href="#"
                    class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">Features
                </a>
                <a href="#"
                    class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">Marketplace
                </a>
                <a href="#"
                    class="ml-8 font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-900">Company
                </a>
                <a href="/login"
                    class="ml-8 font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-900">Log
                    in
                </a>
            </div>
        </nav>
    </div>

    <!--
      Mobile menu, show/hide based on menu open state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div x-show="open" x-cloak @click.away="open = false" x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
        <div class="rounded-lg shadow-md">
            <div class="overflow-hidden bg-white rounded-lg shadow-xs" role="menu" aria-orientation="vertical"
                aria-labelledby="main-menu">
                <div class="flex items-center justify-between px-5 pt-4">
                    <div>
                        <img class="w-auto h-8" src="/img/logos/workflow-mark-on-white.svg" alt="" />
                    </div>
                    <div class="-mr-2">
                        <button @click="open = false" type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500"
                            aria-label="Close menu">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50"
                        role="menuitem">Product
                    </a>
                    <a href="#"
                        class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50"
                        role="menuitem">Features
                    </a>
                    <a href="#"
                        class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50"
                        role="menuitem">Marketplace
                    </a>
                    <a href="#"
                        class="block px-3 py-2 mt-1 text-base font-medium text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50"
                        role="menuitem">Company
                    </a>
                </div>
                <div>
                    <a href="/login"
                        class="block w-full px-5 py-3 font-medium text-center text-indigo-600 transition duration-150 ease-in-out bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700"
                        role="menuitem">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
