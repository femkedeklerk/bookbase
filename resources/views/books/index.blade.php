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
                            <tbod>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->genre }}</td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ $book->teacher }}</td>
                                        <td>{{ $book->status }}</td>
                                        <td class="text-right">
                                            <form action="{{ route('books.delete', ['book' => $book]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button class="ml-3">
                                                    {{ __('delete') }}
                                                </x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbod>
                        </table>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="post" action="{{ route('books.store') }}" class="p-6 space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div>
                        <x-input-label for="author" :value="__('Author')" />
                        <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="old('author')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('author')" />
                    </div>
                    <div>
                        <x-input-label for="genre" :value="__('Genre')" />
                        <x-text-input id="genre" name="genre" type="text" class="mt-1 block w-full" :value="old('genre')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('genre')" />
                    </div>
                    <div>
                        <x-input-label for="year" :value="__('Year')" />
                        <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" :value="old('year')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('year')" />
                    </div>
                    <div>
                        <x-input-label for="teacher" :value="__('Teacher')" />
                        <x-select id="teacher" name="teacher" class="mt-1 block w-full">
                            <option></option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->email }}">{{ $teacher->name }}</option>
                            @endforeach
                        </x-select>
                        <x-input-error class="mt-2" :messages="$errors->get('teacher')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
