<x-guest-layout>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-pink-500 hover:text-emerald-500  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-pink-500 hover:text-emerald-500  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="text-gray-900 p-6">
        <div class="text-2xl">
            How to create an account? <br>
        </div>
        <ul>
            <li>Make sure that you enter your FULL name (including last name) </li>
            <li>Make sure that you use your school email (fullname@mencialeerling.nl) </li>
            <li>Click 'Register' </li>
        </ul>
    </div>
</x-guest-layout>
