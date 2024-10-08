<nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-sm sm:rounded-lg">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <!-- Brand Logo -->
        @if(\Illuminate\Support\Facades\Route::has('admin.dashboard'))
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="HMS Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HMS</span>
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="HMS Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HMS</span>
            </a>
        @endif


        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <div class="font-bold text-right">
                <!-- Log Out -->
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-700 dark:text-white hover:bg-red-100 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">{{ __('Log Out') }}</a>
                </form>
            </div>

            <button data-collapse-toggle="mega-menu-icons" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-icons" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <!-- Navigations Links -->
        <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">

                <!-- Reports -->
                <li>
                    <x-nav-dropdown-button
                        data-dropdown-toggle="reports"
                        id="reports-button"
                        :active="request()->routeIs('admin.itop-replace.*') || request()->routeIs('admin.commission.*')"
                    >
                        Reports
                    </x-nav-dropdown-button>
                    <x-mega-menu id="reports">
                        <x-mega-menu-body aria="reports-button">
                            <x-mega-menu-link
                                :active="request()->routeIs('admin.commission.*')"
                                href="{{ route('admin.commission.index') }}">
                                <x-svg.currency-dollar :active="request()->routeIs('admin.commission.*')"/>
                                Commission's
                            </x-mega-menu-link>

                            <x-mega-menu-link
                                :active="request()->routeIs('admin.itop-replace.*')"
                                href="{{ route('admin.itop-replace.index') }}">
                                <x-svg.arrow-rounded-square :active="request()->routeIs('admin.itop-replace.*')"/>
                                Itop Replace
                            </x-mega-menu-link>
                        </x-mega-menu-body>
                    </x-mega-menu>
                </li>

                <!-- Field Force -->
                <li>
                    <x-nav-dropdown-button
                        data-dropdown-toggle="ff"
                        id="ff-button"
                        :active="request()->routeIs('admin.rso.*') || request()->routeIs('admin.supervisor.*') || request()->routeIs('admin.manager.*') || request()->routeIs('admin.dd-house.*') || request()->routeIs('admin.retailer.*')"
                    >
                        Field Force
                    </x-nav-dropdown-button>

                    <x-mega-menu id="ff">
                        <x-mega-menu-body aria="ff-button">
                            <x-mega-menu-link
                                :active="request()->routeIs('admin.dd-house.*')"
                                href="{{ route('admin.dd-house.index') }}">
                                <x-svg.users :active="request()->routeIs('admin.dd-house.*')"/>
                                DD House
                            </x-mega-menu-link>

                            <x-mega-menu-link
                                :active="request()->routeIs('admin.manager.*')"
                                href="{{ route('admin.manager.index') }}">
                                <x-svg.users :active="request()->routeIs('admin.manager.*')"/>
                                Manager
                            </x-mega-menu-link>

                            <x-mega-menu-link
                                :active="request()->routeIs('admin.supervisor.*')"
                                href="{{ route('admin.supervisor.index') }}">
                                <x-svg.users :active="request()->routeIs('admin.supervisor.*')"/>
                                Supervisor
                            </x-mega-menu-link>
                        </x-mega-menu-body>

                        <x-mega-menu-body aria="ff-button">
                            <x-mega-menu-link
                                :active="request()->routeIs('admin.rso.*')"
                                href="{{ route('admin.rso.index') }}">
                                <x-svg.user-group :active="request()->routeIs('admin.rso.*')"/>
                                Rso
                            </x-mega-menu-link>

                            <x-mega-menu-link
                                :active="request()->routeIs('admin.retailer.*')"
                                href="{{ route('admin.retailer.index') }}">
                                <x-svg.user-group :active="request()->routeIs('admin.retailer.*')"/>
                                Retailer
                            </x-mega-menu-link>
                        </x-mega-menu-body>
                    </x-mega-menu>
                </li>

                <li>
                    <x-nav-link href="#">Other's</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>




{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">--}}
{{--                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                    </x-nav-link>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Settings Dropdown -->--}}
{{--            <div class="hidden sm:flex sm:items-center sm:ms-6">--}}
{{--                <x-dropdown align="right" width="48">--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            <div>{{ Auth::user()->name }}</div>--}}

{{--                            <div class="ms-1">--}}
{{--                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="content">--}}
{{--                        <x-dropdown-link :href="route('admin.profile.edit')">--}}
{{--                            {{ __('Profile') }}--}}
{{--                        </x-dropdown-link>--}}

{{--                        <!-- Authentication -->--}}
{{--                        <form method="POST" action="{{ route('admin.logout') }}">--}}
{{--                            @csrf--}}

{{--                            <x-dropdown-link :href="route('admin.logout')"--}}
{{--                                    onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                {{ __('Log Out') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                        </form>--}}
{{--                    </x-slot>--}}
{{--                </x-dropdown>--}}
{{--            </div>--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-me-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">--}}
{{--            <div class="px-4">--}}
{{--                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>--}}
{{--                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <x-responsive-nav-link :href="route('admin.profile.edit')">--}}
{{--                    {{ __('Profile') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('admin.logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-responsive-nav-link :href="route('admin.logout')"--}}
{{--                            onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
