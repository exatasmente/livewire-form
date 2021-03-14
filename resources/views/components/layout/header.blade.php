<header class="pb-24 bg-indigo-600">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="relative py-5 flex flex-wrap items-center justify-center lg:justify-between">
            <div class="absolute left-0 flex-shrink-0 lg:static">
                <a href="#">
                    <x-layout.app-logo class="text-purple-200"></x-layout.app-logo>
                </a>
            </div>
            <div class="flex-1 min-w-0 px-12 lg:hidden">
                <div class="max-w-xs w-full mx-auto">
                    <label for="search" class="sr-only">{{ __('Search') }}</label>
                    <div class="relative text-white focus-within:text-gray-600 text-gray-300">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" class="block w-full bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="{{__("Search") }}" type="search" name="search">
                    </div>
                </div>
            </div>

            <!-- Menu button -->
            <div class="absolute right-0 flex-shrink-0 lg:hidden">
                <!-- Mobile menu button -->
                <button x-cloak x-data="{open : false}" x-on:click="$dispatch('open-menu')" type="button" class="bg-transparent p-2 rounded-md inline-flex items-center justify-center text-indigo-200 hover:text-white hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
                    <span class="sr-only">{{__('Open main menu')}}</span>
                    <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden lg:block border-t border-white border-opacity-20 py-5">
            <div class="grid grid-cols-3 gap-8 items-center">
                <div class="col-span-2">
                    <nav class="flex space-x-4">
                        <a href="#" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="page">
                            Home
                        </a>
                    </nav>
                </div>
                <div>
                    <div class="max-w-md w-full mx-auto">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative text-white focus-within:text-gray-600 text-gray-300">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search" class="block w-full bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="{{__("Search") }}" type="search" name="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div x-cloak x-data="{open : false}" @open-menu.window="open = !open" class="lg:hidden" x-show="open">

        <div  x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              class="z-20 fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

        <div  class="z-30 absolute top-0 inset-x-0 max-w-3xl mx-auto w-full p-2 transition transform origin-top"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y divide-gray-200">
                <div class="pt-3 pb-2">
                    <div class="flex items-center justify-between px-4">
                        <div>
                            <x-layout.app-logo class="text-purple-500"/>
                        </div>
                        <div class="-mr-2">
                            <button x-on:click="open = false;" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">{{ __('Close menu') }}</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>