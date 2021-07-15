@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Replace with your content -->
    <div class="py-4">
        <div>
            <div class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                                        Total Subscribers
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold leading-8 text-gray-900">
                                            {{ $subscribersCount }}
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-4 bg-gray-50 sm:px-6">
                        <div class="text-sm leading-5">
                            <a href="#"
                                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                                        Total Users
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold leading-8 text-gray-900">
                                            {{ $usersCount }}
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-4 bg-gray-50 sm:px-6">
                        <div class="text-sm leading-5">
                            <a href="#"
                                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
                                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                            </div>
                            <div class="flex-1 w-0 ml-5">
                                <dl>
                                    <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                                        Logins
                                    </dt>
                                    <dd class="flex items-baseline">
                                        <div class="text-2xl font-semibold leading-8 text-gray-900">
                                            {{ $loginsCount }}
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-4 bg-gray-50 sm:px-6">
                        <div class="text-sm leading-5">
                            <a href="#"
                                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <x-login-chart />

        </div>
    </div>


@endsection
