<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Tweet詳細') }}
        </h2> --}}
    </x-slot>

    <div class="grid sm:grid-cols-1 md:grid-cols-3">

        @include('layouts.nav')

        <div class="py-12 col-span-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            <a href="{{ route('tweets.index') }}" class="text-blue-500 hover:text-blue-700 mr-2">一覧に戻る</a>
                        </div></br>

                        {{-- <p class="text-gray-600 dark:text-gray-400 text-sm">投稿者: {{ $tweet->user->name }}</p> --}}

                        <div class="flex mb-4">
                            <div class="rounded-2xl bg-white p-2 inline-block mr-2">
                                <img src="{{ asset('storage/' . $tweet->user->profile_picture) }}" alt="アイコン" class="rounded-full h-8">
                            </div>
                            <p class="place-self-center text-gray-600 dark:text-gray-400 text-sm">{{ $tweet->user->name }}</p>
                        </div>


                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 ml-4">👶生後: {{ calculateAge( $tweet->user->child_birthday, $tweet->created_at) }}カ月</p><hr></br>
                        <p class="text-gray-800 dark:text-gray-300 text-lg">{{ $tweet->tweet }}</p></br>

                        <div class="flex justify-between">
                            <div class="place-self-center text-gray-600 dark:text-gray-400 text-sm">
                                <p>{{ $tweet->created_at->format('Y年m月d日 H:i') }}</p>
                                {{-- <p>更新日時: {{ $tweet->updated_at->format('Y-m-d H:i') }}</p> --}}
                            </div>

                            <div class="flex">
                                <div class="flex mt-4">
                                    @if ($tweet->liked->contains(auth()->id()))
                                    <form action="{{ route('tweets.dislike', $tweet) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700"><img src="{{ asset('img/like_colored.png') }}" class="h-6"/>{{$tweet->liked->count()}}</img></button>
                                    </form>
                                    @else
                                    <form action="{{ route('tweets.like', $tweet) }}" method="POST">
                                    @csrf
                                        <button type="submit" class="text-blue-500 hover:text-blue-700"><img src="{{ asset('img/like_.png') }}" class="h-6"/>{{$tweet->liked->count()}}</img></button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if (auth()->id() == $tweet->user_id)
                        <div class="flex mt-4">
                            <a href="{{ route('tweets.edit', $tweet) }}" class="text-blue-500 hover:text-blue-700 mr-2">編集</a>
                            <form action="{{ route('tweets.destroy', $tweet) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">削除</button>
                            </form>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
