<div>
    <div class="grid grid-cols-6 mb-4">
        <div class="col-span-6 pr-2 sm:col-span-1">
            <label for="location" class="block text-sm font-medium leading-5 text-gray-700 ">Per Page</label>
            <select wire:model="perPage" id="location"
                class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 rounded-md form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                <option>10</option>
                <option>15</option>
                <option>20</option>
            </select>
        </div>

        @if ($super)
            <div class="col-span-6 pr-2 sm:col-span-2">
                <label for="tenant" class="block text-sm font-medium leading-5 text-gray-700">Tenant</label>
                <select wire:model="selectedTenant" id="tenant"
                    class="block w-full py-2 pl-3 pr-10 mt-1 text-base leading-6 border-gray-300 rounded-md form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option value="">Choose a Tenant</option>
                    @foreach ($tenants as $key => $tenant)
                        <option value="{{ $key }}">{{ $tenant }}</option>
                    @endforeach
                </select>
            </div>
        @endif

        <div class="col-span-6 {{ $super == true ? 'sm:col-span-3' : 'sm:col-span-5' }}">
            <x-text-input wire:model="search" label="Search" placeholder="Search Users..." />
        </div>
    </div>
    <div class="flex flex-col">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <x-th label="Name" value="name" :canSort="true" :sortField="$sortField"
                                :sortAsc="$sortAsc" />
                            <x-th label="Title" value="title" :canSort="true" :sortField="$sortField"
                                :sortAsc="$sortAsc" />
                            <x-th label="Status" value="status" :canSort="false" :sortField="$sortField"
                                :sortAsc="$sortAsc" />
                            <x-th label="Role" value="role" :canSort="true" :sortField="$sortField"
                                :sortAsc="$sortAsc" />
                            <x-th label="Application" value="application" :canSort="false" :sortField="$sortField"
                                :sortAsc="$sortAsc" />
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">
                                <span class="flex justify-end rounded-md">
                                    <a href="{{ route('users.create') }}" type="button"
                                        class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                        Add Team Member
                                    </a>
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr wire:key="{{ $user->id }}">
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="{{ $user->avatarUrl() }}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div>
                                                <span
                                                    class="text-sm font-medium leading-5 text-gray-900">{{ $user->name }}</span>
                                                @if ($super)<a
                                                        wire:click="impersonate({{ $user->id }})" href="#"
                                                        class="ml-1 text-xs text-indigo-600">Impersonate</a>
                                                @endif
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $user->title }}</div>
                                    <div class="text-sm leading-5 text-gray-500">{{ $user->department }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @if ($user->status)
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Active
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    {{ $user->role }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex justify-center">
                                        @if ($application = $user->documents->where('type', 'application')->first())
                                            <a href="{{ $application->privateUrl() }}"
                                                target="_blank">{{-- open new window svg --}}
                                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                                    </path>
                                                    <path
                                                        d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                                    </path>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-8">
        {{ $users->links() }}
    </div>
</div>
