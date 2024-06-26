<div class="col-span-1 text-left">
    <div class="flex flex-col items-end">
        <div class="hidden md:block">
            <button class="flex font-semibold mr-8 mt-16 mb-4 hover:bg-gray-200 rounded-full px-3 py-2">
                <x-nav-link :href="route('tweets.index')" :active="request()->routeIs('tweets.index')" class="flex">
                    {{-- <img src="/img/home.png" class="h-6 px-2" /> --}}
                    {{ __('ホーム') }}
                </x-nav-link>
            </button>
        </div>
        <div class="hidden md:block">
            <button class="flex font-semibold mr-8 mb-4 hover:bg-gray-200 rounded-full px-3 py-2">
                <x-nav-link :href="route('myposts.index')" :active="request()->routeIs('myposts.index')"  >
                    {{ __('あなたの投稿') }}
                </x-nav-link>
            </button>
        </div>
        <div class="hidden md:block">
            <button class="flex font-semibold mr-8 mb-4 hover:bg-gray-200 rounded-full px-3 py-2">
                <x-nav-link :href="route('tweetLikes.index')" :active="request()->routeIs('tweetLikes.index')" class="flex" >
                    {{-- <img src="img/like_.png" class="h-6 px-2" /> --}}
                    {{ __('いいねした投稿') }}
                </x-nav-link>
            </button>
        </div>
        <div class="hidden md:block">
            <button class="flex font-semibold mr-8 mb-4 hover:bg-gray-200 rounded-full px-3 py-2">
                <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    {{ __('アカウント') }}
                </x-nav-link>
            </button>
        </div>
        {{-- <div class="hidden md:block">
            <button class="flex font-semibold mr-8 mb-4 hover:bg-gray-200 rounded-full px-3 py-2"><svg class="h-6 px-2 xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" version="1.1"><path d="" stroke="none" fill="#080404" fill-rule="evenodd"/><path d="M 16.304 5.956 C 11.433 8.926, 9.572 12.569, 8.896 20.453 C 8.564 24.329, 7.703 28.896, 6.983 30.603 C 4.885 35.571, 6.086 37, 12.360 37 C 17.302 37, 17.839 37.221, 18.407 39.485 C 19.575 44.140, 28.425 44.140, 29.593 39.485 C 30.161 37.221, 30.698 37, 35.640 37 C 41.914 37, 43.115 35.571, 41.017 30.603 C 40.297 28.896, 39.436 24.329, 39.104 20.453 C 38.428 12.569, 36.567 8.926, 31.696 5.956 C 27.510 3.404, 20.490 3.404, 16.304 5.956 M 20.309 8.128 C 15.530 9.474, 12.969 13.843, 12.020 22.271 C 11.572 26.247, 10.882 30.512, 10.486 31.750 L 9.767 34 24 34 L 38.233 34 37.514 31.750 C 37.118 30.512, 36.432 26.284, 35.988 22.354 C 35.545 18.424, 34.675 14.261, 34.056 13.104 C 31.756 8.807, 25.693 6.613, 20.309 8.128 M 22 38 C 22 38.550, 22.900 39, 24 39 C 25.100 39, 26 38.550, 26 38 C 26 37.450, 25.100 37, 24 37 C 22.900 37, 22 37.450, 22 38" stroke="none" fill="#040404" fill-rule="evenodd"/></svg>通知</button>
        </div> --}}
        <div class="hidden md:block">
            <button class="font-semibold text-lg  bg-blue-400 hover:bg-blue-500 rounded-full inline-block px-10 py-4">
                <x-nav-link :href="route('tweets.create')" :active="request()->routeIs('tweets.create')" class="text-white" >
                    {{ __('投稿する') }}
                </x-nav-link>
            </button>
        </div>
    </div>
</div>
