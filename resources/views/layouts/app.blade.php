@extends('layouts.base')

@section('body')
    <div class="flex h-screen overflow-hidden bg-gray-100">
        <!-- Off-canvas menu for mobile -->
        <div class="md:hidden">
            <div class="fixed inset-0 z-40 flex">
                <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative flex flex-col flex-1 w-full max-w-xs bg-gray-800">
                    <div class="absolute top-0 right-0 p-1 -mr-14">
                        <button
                            class="flex items-center justify-center w-12 h-12 rounded-full focus:outline-none focus:bg-gray-600"
                            aria-label="Close sidebar">
                            <svg class="w-6 h-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="w-auto h-8" src="/img/logos/teamsy_on_dark.png" alt="Teamsy">
                        </div>
                        <nav class="px-2 mt-5">
                            <a href="/"
                                class="flex items-center px-2 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-900 rounded-md group focus:outline-none focus:bg-gray-700">
                                <svg class="w-6 h-6 mr-4 text-gray-300 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>
                            <a href="/team"
                                class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                                <svg class="w-6 h-6 mr-4 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Team
                            </a>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 p-4 bg-gray-700">
                        <a href="#" class="flex-shrink-0 block group">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block w-10 h-10 rounded-full"
                                        src="{{ optional(request()->user())->avatarUrl() }}" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base font-medium leading-6 text-white">
                                        {{ optional(request()->user())->name }}
                                    </p>
                                    <p
                                        class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                        View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex-shrink-0 w-14">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex flex-col flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="w-auto h-8" src="/img/logos/teamsy_on_dark.png" alt="Teamsy">
                    </div>
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <nav class="flex-1 px-2 mt-5 bg-gray-800">
                        <x-desktop-nav-link route="home">
                            <svg class="mr-3 h-6 w-6 {{ Request::routeIs('home') ? 'text-gray-300' : 'text-gray-400' }} group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Dashboard
                        </x-desktop-nav-link>
                        <x-desktop-nav-link route="team.index">
                            <svg class="mr-3 h-6 w-6 {{ Request::routeIs('team.index') ? 'text-gray-300' : 'text-gray-400' }} group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Team
                        </x-desktop-nav-link>
                        <a href="/logout"
                            class="flex items-center px-2 py-2 mt-1 text-sm font-medium leading-5 text-gray-300 transition duration-150 ease-in-out rounded-md group hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                            <svg class="w-6 h-6 mr-3 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300 group-focus:text-gray-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </a>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 bg-gray-700">
                    <a href="#" class="flex-shrink-0 block w-full group">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block rounded-full h-9 w-9"
                                    src="{{ optional(request()->user())->avatarUrl() }}" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium leading-5 text-white">
                                    {{ optional(request()->user())->name }}
                                </p>
                                <p
                                    class="text-xs font-medium leading-4 text-gray-300 transition duration-150 ease-in-out group-hover:text-gray-200">
                                    View profile
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <div class="pt-1 pl-1 md:hidden sm:pl-3 sm:pt-3">
                <button
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
                    aria-label="Open sidebar">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none" tabindex="0">

                @if (session()->has('impersonate'))
                    <div class="relative bg-indigo-600">
                        <div class="max-w-screen-xl px-3 py-3 mx-auto sm:px-6 lg:px-8">
                            <div class="pr-16 sm:text-center sm:px-16">
                                <p class="font-medium text-white">
                                    <span class="md:hidden">
                                        You are impersonating {{ auth()->user()->name }}
                                    </span>
                                    <span class="hidden md:inline">
                                        You are impersonating {{ auth()->user()->name }}
                                    </span>
                                    <span class="block sm:ml-2 sm:inline-block">
                                        <a href="{{ route('leave-impersonation') }}" class="font-bold text-white underline">
                                            Leave Impersonation &rarr;
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="pt-2 pb-6 md:py-6">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">@yield('title')</h1>
                    </div>
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
