<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-20">
        @auth
            <div class="flex justify-center">
                <div class="text-xl font-bold mr-6">Hello, {{ auth()->user()->name }}</div>


            </div>
            @if (auth()->user()->hasRole('employer'))
                <div class="text-xl font-bold">
                    <p> Your trial will {{now()->format('Y-m-d')> auth()->user()->user_trial? 'was expired': 'will expire'}} {{ auth()->user()->user_trial }}</p>
                </div>
            @endif
        @endauth
        <div class="grid grid-cols-4 gap-4 mt-8">
            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between">
                <p class="text-center text-lg font-bold">User Profile</p>
                <button
                    class="w-full mt-auto text-center text-white bg-blue-500 hover:bg-blue-700 rounded-lg py-2 px-4">View</button>
            </div>
            <div class="bg-green-500 rounded-lg shadow-md text-white p-4 flex flex-col justify-between">
                <p class="text-center text-lg font-bold">Post Job</p>
                <button
                    class="w-full mt-auto text-center bg-blue-500 hover:bg-blue-700 rounded-lg py-2 px-4">View</button>
            </div>
            <div class="bg-red-500 rounded-lg shadow-md text-white p-4 flex flex-col justify-between">
                <p class="text-center text-lg font-bold">All Jobs</p>
                <button
                    class="w-full mt-auto text-center bg-blue-500 hover:bg-blue-700 rounded-lg py-2 px-4">View</button>
            </div>
            <div class="bg-sky-500 rounded-lg shadow-md text-white p-4 flex flex-col justify-between">
                <p class="text-center text-lg font-bold">Item 4</p>
                <button
                    class="w-full mt-auto text-center bg-blue-500 hover:bg-blue-700 rounded-lg py-2 px-4">View</button>
            </div>
        </div>
    </div>
</x-app-layout>
