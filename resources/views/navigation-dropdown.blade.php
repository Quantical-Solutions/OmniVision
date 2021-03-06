<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

            @if(!(request()->routeIs('welcome')) && !(request()->routeIs('demos')) && !(request()->routeIs('docs')) && !(request()->routeIs('pricing')) && !(request()->routeIs('basket')))

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('taches.index') }}" :active="request()->routeIs('taches.*')">
                        {{ __('Tasks') }}
                    </x-jet-nav-link>
                </div>

            @else

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                        {{ __('OmniVision') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('demos') }}" :active="request()->routeIs('demos')">
                        {{ __('Demos') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">
                        {{ __('Docs') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('pricing') }}" :active="request()->routeIs('pricing')">
                        {{ __('Pricing') }}
                    </x-jet-nav-link>
                </div>

            @endif

        </div>

        @if(Auth::check())

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none  transition duration-150 ease-in-out">
                                <div class="auth-user-name">{{ Auth::user()->name }}&nbsp;</div>
                                &nbsp;
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div class="auth-user-name">{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif

                    </x-slot>

                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </x-jet-dropdown-link>

                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                    @endif

                        <x-jet-dropdown-link href="{{ route('welcome') }}">
                            {{ __('OmniVision') }}
                        </x-jet-dropdown-link>

                    <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>

                @if(request()->routeIs('welcome') || request()->routeIs('demos') || request()->routeIs('docs') || request()->routeIs('pricing') || request()->routeIs('basket'))

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex special-header-height">
                        <x-jet-nav-link href="{{ route('basket') }}" class="login-links relative" :active="request()->routeIs('basket')">
                            <span class="isfilled"></span>
                            <svg viewBox="0 0 24 24" class="basket-svg">
                                <circle cx="6" cy="19" r="2"></circle>
                                <circle cx="16" cy="19" r="2"></circle>
                                <path d="M19.997 7H7.13l-.885-2.352A1 1 0 0 0 5.308 4H2v2h2.628L5 7l2.368 7.103a2 2 0 0 0 2.53 1.265l8.734-2.912A2 2 0 0 0 20 10.557z"></path>
                            </svg>
                        </x-jet-nav-link>
                    </div>

                @endif
            </div>

        @else

            <!-- Settings Dropdown -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('login') }}" class="login-links">
                    <svg title="{{ __('Login') }}" viewBox="0 0 28 28" class="connexion-svg">
                        <path d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z"></path>
                    </svg>
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('basket') }}" class="login-links relative" :active="request()->routeIs('basket')">
                    <span class="isfilled"></span>
                    <svg viewBox="0 0 24 24" class="basket-svg">
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="16" cy="19" r="2"></circle>
                        <path d="M19.997 7H7.13l-.885-2.352A1 1 0 0 0 5.308 4H2v2h2.628L5 7l2.368 7.103a2 2 0 0 0 2.53 1.265l8.734-2.912A2 2 0 0 0 20 10.557z"></path>
                    </svg>
                </x-jet-nav-link>
                @if (Route::has('register'))
                    <x-jet-nav-link href="{{ route('register') }}" class="login-links">
                        {{ __('Register') }}
                    </x-jet-nav-link>
                @endif
            </div>

        @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @if(!(request()->routeIs('welcome')) && !(request()->routeIs('demos')) && !(request()->routeIs('docs')) && !(request()->routeIs('pricing')) && !(request()->routeIs('basket')))

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('taches.index') }}" :active="request()->routeIs('taches.*')">
                {{ __('Tasks') }}
            </x-jet-responsive-nav-link>
        </div>

    @else

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                {{ __('OmniVision') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('demos') }}" :active="request()->routeIs('demos')">
                {{ __('Demos') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">
                {{ __('Docs') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('pricing') }}" :active="request()->routeIs('pricing')">
                {{ __('Pricing') }}
            </x-jet-responsive-nav-link>
        </div>

    @endif

    @if(Auth::check())

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                @if(request()->routeIs('welcome') || request()->routeIs('demos') || request()->routeIs('docs') || request()->routeIs('pricing') || request()->routeIs('basket'))

                    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-responsive-nav-link>

                @endif

                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

            <!-- Authentication -->
                @if(!(request()->routeIs('welcome')) && !(request()->routeIs('demos')) && !(request()->routeIs('docs')) && !(request()->routeIs('pricing')) && !(request()->routeIs('basket')))

                    <x-jet-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                        {{ __('OmniVision') }}
                    </x-jet-responsive-nav-link>

                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
            @if(request()->routeIs('welcome') || request()->routeIs('demos') || request()->routeIs('docs') || request()->routeIs('pricing') || request()->routeIs('basket'))
                <div class="pt-2 pb-3 space-y-1">
                    <x-jet-responsive-nav-link href="{{ route('basket') }}" :active="request()->routeIs('basket')" class="relative">
                        <span class="isfilled"></span>
                        <svg viewBox="0 0 24 24" class="basket-svg">
                            <circle cx="6" cy="19" r="2"></circle>
                            <circle cx="16" cy="19" r="2"></circle>
                            <path d="M19.997 7H7.13l-.885-2.352A1 1 0 0 0 5.308 4H2v2h2.628L5 7l2.368 7.103a2 2 0 0 0 2.53 1.265l8.734-2.912A2 2 0 0 0 20 10.557z"></path>
                        </svg>
                    </x-jet-responsive-nav-link>
                </div>
            @endif
        </div>

    @else

        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                <svg title="{{ __('Login') }}" viewBox="0 0 28 28" class="connexion-svg">
                    <path d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z"></path>
                </svg>
            </x-jet-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('basket') }}" :active="request()->routeIs('basket')" class="relative">
                <span class="isfilled"></span>
                <svg viewBox="0 0 24 24" class="basket-svg">
                    <circle cx="6" cy="19" r="2"></circle>
                    <circle cx="16" cy="19" r="2"></circle>
                    <path d="M19.997 7H7.13l-.885-2.352A1 1 0 0 0 5.308 4H2v2h2.628L5 7l2.368 7.103a2 2 0 0 0 2.53 1.265l8.734-2.912A2 2 0 0 0 20 10.557z"></path>
                </svg>
            </x-jet-responsive-nav-link>
        </div>

        @if (Route::has('register'))

            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                    {{ __('Register') }}
                </x-jet-responsive-nav-link>
            </div>

        @endif

    @endif

    </div>
</nav>
