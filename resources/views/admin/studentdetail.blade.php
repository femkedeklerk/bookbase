<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
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
                                <th class="text-left">{{ __('Title') }}</th>
                                <th class="text-left">{{ __('Author') }}</th>
                                <th class="text-left">{{ __('Genre') }}</th>
                                <th class="text-left">{{ __('Year') }}</th>
                                <th class="text-left">{{ __('Teacher') }}</th>
                                <th class="text-left">{{ __('Status') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($student->books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->genre }}</td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ $book->teacher }}</td>
                                        <td>{{ $book->status }}</td>
                                        <td>
                                            <div class="flex justify-end">
                                                <form action="{{ route('admin.updateBook', ['book' => $book]) }}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <x-danger-button class="ml-3" name="status" value="rejected">
                                                        {{ __('decline') }}
                                                    </x-danger-button>
                                                    <x-accept-button class="ml-3" name="status" value="accepted">
                                                        {{ __('approve') }}
                                                    </x-accept-button>
                                                </form>
                                            </div>
                                        </td>
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
