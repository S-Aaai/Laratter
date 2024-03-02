<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('投稿一覧') }}
        </h2> --}}
    </x-slot>

    <div class="grid sm:grid-cols-1 md:grid-cols-3">

        @include('layouts.nav')

        <div class="py-12 col-span-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @foreach ($tweetLikes as $tweet)
                {{-- <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-800 dark:text-gray-300">{{ $tweet->tweet }}</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">投稿者: {{ $tweet->user->name }}</p>
                    <a href="{{ route('tweets.show', $tweet) }}" class="text-blue-500 hover:text-blue-700">詳細を見る</a>
                    <div>
                        @if ($tweet->liked->contains(auth()->id()))
                        <form action="{{ route('tweets.dislike', $tweet) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700"><img src="{{ asset('img/like_colored.png') }}" class="h-6"/>{{$tweet->liked->count()}}</button>
                        </form>
                        @else
                        <form action="{{ route('tweets.like', $tweet) }}" method="POST">
                        @csrf
                            <button type="submit" class="text-blue-500 hover:text-blue-700"><img src="{{ asset('img/like_.png') }}" class="h-6"/> {{$tweet->liked->count()}}</button>
                        </form>
                        @endif
                    </div>
                </div> --}}
                @endforeach
                </div>
            </div>
            </div>
        </div>

        <div class="col-span-1">
            <div class="mt-16 font-semibold">
                今日のホットワード
            </div>
        </div>
    </div>

</x-app-layout>

