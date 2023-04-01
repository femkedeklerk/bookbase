<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-gray-900 p-6">
                <div class="text-2xl">  The books you have chosen to read during your upper form years (Year 4, 5 & 6) need to adhere to the following requirements:</div>
                <div class="p-6">
                    <ul>
                        <li>* You cannot choose more than two books of the same genre.</li>
                        <li>* You cannot read two or more books by the same author. Choose a new author every single time.</li>
                        <li>* Choose from the “en” books from the library (the “enje” abbreviation is used for books that are too easy).</li>
                        <li>* Make sure your teacher has approved your book.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
