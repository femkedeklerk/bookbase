    <x-guest-layout>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-pink-500 hover:text-emerald-500 dark:text-gray-500 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-pink-500 hover:text-emerald-500 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


                    <div class="ml-4 text-top text-lg text-gray-700 dark:text-gray-700 lg:text-auto sm:ml-0">
                        How to create an account? <br>
                        <div class="ml-4 text-top text-lg text-gray-700 dark:text-gray-700 lg:text-auto sm:ml-0">
                            -Make sure that you enter your FULL name (including last name) <br>
                            -Make sure that you use your school email (fullname@mencialeerling.nl) <br>
                            -Use your Magister Password <br>
                            -Click 'Register' <br>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
