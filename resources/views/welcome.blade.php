<x-guest-layout>
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
    <div>
        <div>
            How to create an account? <br>
            <div>
                -Make sure that you enter your FULL name (including last name) <br>
                -Make sure that you use your school email (fullname@mencialeerling.nl) <br>
                -Use your Magister Password <br>
                -Click 'Register' <br>
            </div>
        </div>
    </div>
</x-guest-layout>
