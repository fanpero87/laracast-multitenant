<div>
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-6 gap-6">
            <x-text-input wire:model="name" label="Name" placeholder="Jeffrey Way" class="col-span-6 sm:col-span-3" />

            <x-text-input wire:model="email" type="email" label="Email" placeholder="jeffrey@laracasts.com"
                class="col-span-6 sm:col-span-3" />

            <div class="col-span-6 sm:col-span-2">
                <label for="department" class="block text-sm font-medium leading-5 text-gray-700">Department</label>
                <select wire:model="department" id="department"
                    class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option value="Human Resources">Human Resources</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Information Technology">Information Technology</option>
                </select>
            </div>

            <x-text-input wire:model="title" label="Title" placeholder="Instructor" class="col-span-6 sm:col-span-3" />

            <div class="col-span-6">
                <label class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                    Photo
                </label>
                <div class="flex flex-items-center">
                    <div class="flex-shrink-0 w-10 h-10 mr-4">
                        @if ($photo)
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-10 h-10 rounded-full" src="{{ $photo->temporaryUrl() }}" alt="">
                            </div>
                        @else
                            <svg class="w-10 h-10 text-gray-300 rounded-full" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        @endif
                    </div>
                    <div>
                        <input type="file" wire:model="photo">
                    </div>
                    @error('photo')
                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-span-6">
                <label class="block mb-2 text-sm font-medium leading-5 text-gray-700">
                    Application
                </label>
                <div class="flex flex-items-center">
                    <div>
                        @if ($application)
                            <div class="flex-shrink-0 w-10 h-10 mr-4">
                                <x-document-icon />
                            </div>
                        @endif
                    </div>
                    <div wire:loading wire:target="application">
                        <x-loading class="mr-4" />
                    </div>
                    <div>
                        <input wire:model="application" type="file">
                    </div>
                </div>
                @error('application')
                <div class="mt-2 text-sm text-red-500">{{ $message }}</div> @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                <select wire:model="status" id="status"
                    class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="role" class="block text-sm font-medium leading-5 text-gray-700">Role</label>
                <select wire:model="role" id="role"
                    class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm form-select focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Member">Team Member</option>
                </select>
            </div>

            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>

        <div class="pt-5 mt-8 border-t border-gray-200">
            <div class="flex justify-end">
                <div wire:loading wire:target="submit">
                    <x-loading class="mr-4" />
                </div>
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="submit"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                        Add Team Member
                    </button>
                </span>
            </div>
        </div>
    </form>

</div>
