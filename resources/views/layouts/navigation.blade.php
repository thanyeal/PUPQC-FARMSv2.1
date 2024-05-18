<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <style>
        .border-indigo-400 {
            --tw-border-opacity: 1;
            border-color: maroon !important;
        }
        .remove-underline {
            text-decoration: none !important;
        }
    </style>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="../images/pupqcfaculty.png" style="height: 3rem;">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="remove-underline">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="remove-underline" style="cursor: pointer !important;">
                        {{ __('Activity Type') }}
                    </x-nav-link>
                    <x-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="remove-underline" style="cursor: pointer !important;">
                        {{ __('Requirement Categories') }}
                    </x-nav-link>
                    <x-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="remove-underline" style="cursor: pointer !important;">
                        {{ __('Requirement Type') }}
                    </x-nav-link>
                    <x-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="remove-underline" style="cursor: pointer !important;">
                        {{ __('Requirement Bin') }}
                    </x-nav-link>
                    <x-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="remove-underline" style="cursor: pointer !important;">
                        {{ __('Reports') }}
                    </x-nav-link>
                    <div class="relative inline-block">             
                        <a @click="open = !open" class="inline-flex items-center px-1 pt-4 pb-3 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-0 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out remove-underline hover:border-gray-0" style="cursor: pointer !important;">
                            {{ __('Utilities') }}
                            <i class="ri-arrow-down-s-line ml-1"></i>
                        </a>
                        <div x-show="open" @click.away="open = false" class="absolute z-1 top-full mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg">
                            <div class="py-2">
                                <a href="#" class="text-sm font-medium block px-3 py-2 text-gray-800 hover:bg-gray-200 text-decoration-none">System User</a>
                                <a href="#" class="text-sm font-medium block px-3 py-2 text-gray-800 hover:bg-gray-200 text-decoration-none">Faculty Type</a>
                                <a href="#" class="text-sm font-medium block px-3 py-2 text-gray-800 hover:bg-gray-200 text-decoration-none">Specializations</a>
                                <a href="#" class="text-sm font-medium block px-3 py-2 text-gray-800 hover:bg-gray-200 text-decoration-none">Designation</a>
                                <a href="#" class="text-sm font-medium block px-3 py-2 text-gray-800 hover:bg-gray-200 text-decoration-none">Programs</a>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-decoration-none">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                class="text-decoration-none">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-black text-decoration-none">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Activity Type') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Requirement Categories') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Requirement Type') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Requirement Bin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Reports') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('System User') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Faculty Type') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Specializations') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Designation') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link {{-- :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" --}} class="text-black text-decoration-none" style="cursor: pointer !important;">
                {{ __('Programs') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-decoration-none">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                        class="text-decoration-none">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
