<x-splade-toggle>
    <nav x-data="{ isOpen: false }" class="bg-white shadow dark:bg-gray-800">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center md:justify-start md:space-x-10">
            <!-- Logo -->
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <div :class="{ 'block': isOpen, 'hidden': !isOpen }"
                class="hidden md:flex flex-grow justify-center md:justify-end md:space-x-10">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                    class="text-lg text-gray-700 dark:text-gray-500 underline">
                    Home
                </x-nav-link>

                @auth
                    <x-dropdown placement="bottom-end">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-lg font-medium text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="text-lg">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link as="button" :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();" class="text-lg">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <x-nav-link :href="route('login')" class="text-lg text-gray-700 dark:text-gray-500 underline">Log
                        in</x-nav-link>
                    @if (Route::has('register'))
                        <x-nav-link :href="route('seeker')" class="text-lg text-gray-700 dark:text-gray-500 underline">Job
                            Seeker</x-nav-link>
                        <x-nav-link :href="route('employer')"
                            class="text-lg text-gray-700 dark:text-gray-500 underline">Employer</x-nav-link>
                    @endif
                @endauth
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-lg">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-lg text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-base text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')" class="text-lg">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link as="button" :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();" class="text-lg">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </nav>

</x-splade-toggle>
