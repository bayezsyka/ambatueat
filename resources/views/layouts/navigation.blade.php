<nav x-data="{ open: false }" class="bg-gradient-to-r from-amber-500 to-amber-600 shadow-lg fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-8 py-2 sm:px-8 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo and Main Navigation -->
            <div class="flex items-center space-x-12">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="shrink-0">
                    <h1 class="text-2xl font-extrabold text-white tracking-wide hover:text-amber-100 transition-colors duration-200">AmbatuEat</h1>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden sm:flex space-x-8">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:bg-amber-700 hover:text-white px-4 py-2 rounded-full transition-all duration-300 text-lg font-semibold">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('menu')" :active="request()->routeIs('menu')" class="text-white hover:bg-amber-700 hover:text-white px-4 py-2 rounded-full transition-all duration-300 text-lg font-semibold">
                        {{ __('Menu') }}
                    </x-nav-link>
                    <x-nav-link :href="route('fasilitas')" :active="request()->routeIs('fasilitas')" class="text-white hover:bg-amber-700 hover:text-white px-4 py-2 rounded-full transition-all duration-300 text-lg font-semibold">
                        {{ __('Fasilitas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('tentang')" :active="request()->routeIs('tentang')" class="text-white hover:bg-amber-700 hover:text-white px-4 py-2 rounded-full transition-all duration-300 text-lg font-semibold">
                        {{ __('Tentang Kami') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- User Settings -->
            <div class="flex items-center">
                <!-- Desktop User Dropdown -->
                <div class="hidden sm:block">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 bg-amber-700 text-white rounded-full font-semibold text-sm hover:bg-amber-800 focus:outline-none transition-all duration-300 shadow-md">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-2">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-amber-600 hover:text-white transition-all duration-200">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:bg-amber-600 hover:text-white transition-all duration-200">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Mobile Menu Button -->
                <div class="sm:hidden ml-4">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-full text-white hover:bg-amber-700 focus:outline-none transition-all duration-300">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden bg-amber-600 shadow-lg">
        <div class="pt-2 pb-3 space-y-2 px-4">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:bg-amber-700 px-4 py-3 rounded-lg text-lg font-semibold transition-all duration-200">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('menu')" :active="request()->routeIs('menu')" class="text-white hover:bg-amber-700 px-4 py-3 rounded-lg text-lg font-semibold transition-all duration-200">
                {{ __('Menu') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('fasilitas')" :active="request()->routeIs('fasilitas')" class="text-white hover:bg-amber-700 px-4 py-3 rounded-lg text-lg font-semibold transition-all duration-200">
                {{ __('Fasilitas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tentang')" :active="request()->routeIs('tentang')" class="text-white hover:bg-amber-700 px-4 py-3 rounded-lg text-lg font-semibold transition-all duration-200">
                {{ __('Tentang Kami') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-4 border-t border-amber-700 px-4">
            <div class="mb-3">
                <div class="font-semibold text-lg text-white">{{ Auth::user()->name }}</div>
                <div class="text-sm text-amber-200">{{ Auth::user()->email }}</div>
            </div>
            <x-responsive-nav-link :href="route('profile.edit')" class="block text-white hover:bg-amber-700 px-4 py-2 rounded-lg transition-all duration-200">
                {{ __('Profile') }}
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block text-white hover:bg-amber-700 px-4 py-2 rounded-lg transition-all duration-200">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>