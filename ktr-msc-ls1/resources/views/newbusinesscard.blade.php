<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/newbusinesscard" >
                    @csrf
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Cpname -->
                        <div>
                            <x-label for="cpname" :value="__('Company Name')" />

                            <x-input id="cpname" class="block mt-1 w-full" type="text" name="cpname" :value="old('cpname')" autofocus />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-label for="tel" :value="__('Telephone')" />

                            <x-input id="tel" class="block mt-1 w-full" type="number" name="tel" :value="old('tel')" autofocus />
                        </div>


                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <div>
                            <x-button class="ml-4">
                                {{ __('Create new card') }}
                            </x-button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
