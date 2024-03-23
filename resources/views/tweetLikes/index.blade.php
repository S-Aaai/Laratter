<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('投稿一覧') }}
        </h2> --}}
    </x-slot>

    <div class="grid sm:grid-cols-1 md:grid-cols-3">

        @include('layouts.nav')

        <div class="py-12 col-span-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @foreach ($tweetLikes as $tweet)
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

