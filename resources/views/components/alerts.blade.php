@foreach($alerts as $alert)
    <div class="rounded-md p-4 mb-6 {{ $style[$alert]['bgClass'] }}" x-data="{ open: true }" x-show="open">
        <div class="flex">
            <div class="flex-shrink-0">
                {!! $style[$alert]['icon'] !!}
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium {{ $style[$alert]['txtClass'] }}">{{ Session::get('alert-' . $alert) }}</p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                            class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-offset-2 {{ $style[$alert]['crossClass'] }}"
                            @click="open = false"
                        >
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
