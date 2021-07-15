<div>
    <div class="flex min-h-screen bg-white">
        <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="w-full max-w-sm mx-auto">
                <div>
                    <img class="w-auto h-12" src="/img/logos/workflow-mark-on-white.svg" alt="Workflow" />
                    <h2 class="mt-6 text-3xl font-extrabold leading-9 text-gray-900">
                        Start your free trial
                    </h2>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form wire:submit.prevent="register">
                            <x-text-input wire:model.debounce.1000ms="name" type="text" label="Name" :required="true"
                                placeholder="my placeholder" class="mt-4" />
                            <x-text-input wire:model.debounce.100ms="companyName" type="text" label="Company Name"
                                :required="true" placeholder="my placeholder" class="mt-4" />
                            <x-text-input wire:model.debounce.100ms="email" type="email" label="Email" :required="true"
                                placeholder="kevin@kevinmckee.me" class="mt-4" />
                            <x-text-input wire:model.debounce.100ms="password" type="password" label="Password"
                                :required="true" placeholder="" class="mt-4" />

                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit"
                                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                        Register
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex-1 hidden w-0 lg:block">
            <img class="absolute inset-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
                alt="" />
        </div>
    </div>
</div>
