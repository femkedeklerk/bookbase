<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alerts />
            <div class="space-y-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full">
                            <thead>
                            <tr>
                                <th class="text-left">{{ __('Name') }}</th>
                                <th class="text-left">{{ __('Total') }}</th>
                                <th class="text-left">{{ __('Pending') }}</th>
                                <th class="text-left">{{ __('Accepted') }}</th>
                                <th class="text-left">{{ __('Declined') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbod>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->title }}</td>
                                        <td>{{ $student->author }}</td>
                                        <td>{{ $student->genre }}</td>
                                        <td>{{ $student->year }}</td>
                                        <td>{{ $student->teacher }}</td>
                                        <td>{{ $student->status }}</td>
                                    </tr>
                                @endforeach
                            </tbod>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    hello world
    <pre>@json($students, JSON_PRETTY_PRINT)</pre>
</x-app-layout>
