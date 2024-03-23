<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('投稿作成') }}
        </h2> --}}
    </x-slot>

    <div class="grid sm:grid-cols-1 md:grid-cols-3">

        @include('layouts.nav')

        <div class="py-12 col-span-2">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">

                            <div>
                                <a href="{{ route('tweets.index') }}" class="text-blue-500 hover:text-blue-700 mr-2">一覧に戻る</a>
                            </div></br>

                            <form method="POST" action="{{ route('tweets.store') }}">
                            @csrf
                            <div class="mb-4">

                                @php
                                $placeholders = [
                                    'こんな制度を利用したよ',
                                    '赤ちゃんの笑顔が最高！な瞬間は',
                                    '小さな成功体験を共有するよ',
                                    'じぶんへのご褒美♡',
                                    'ベビー今「〇〇」って言った？！👀',
                                    '絶対入れておいた方がよい育児アプリは？',
                                    // 他の選択肢を追加
                                ];
                                $randomPlaceholder = $placeholders[array_rand($placeholders)];
                                @endphp

                                <input type="text" placeholder="{{$randomPlaceholder}}" name="tweet" id="tweet" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('tweet')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                            </div>
                            <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">投稿</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
