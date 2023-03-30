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
                                <th class="text-left">{{ __('Approved') }}</th>
                                <th class="text-left">{{ __('Declined') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->books_total }}</td>
                                        <td>{{ $student->books_pending }}</td>
                                        <td>{{ $student->books_approved }}</td>
                                        <td>{{ $student->books_declined }}</td>
                                        <td><a href="{{ route('admin.studentdetail', [ 'student' => $student]) }}">edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
