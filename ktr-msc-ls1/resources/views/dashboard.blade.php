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
                    You're logged in!<br>
                    <a href="/newbusinesscard">Create my business card</a>

                    <h1 style="margin:16px 0 0; font-size: 28px; font-weight: 600">My Business Cards</h1><hr>
                    <ul>
                    @foreach($businesscards as $businesscard)
                        <li>
                            Name:{{$businesscard->name}}<br>
                            Company Name:{{$businesscard->cpname}}<br>
                            Telephone:{{$businesscard->tel}}<br>
                            Email:{{$businesscard->email}}
                        </li>
                        <hr>
                    @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
