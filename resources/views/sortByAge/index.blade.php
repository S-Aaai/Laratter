
<form action="{{ route('sortByAge.index') }}" method="GET">
    <select name="selected_age">
        <option value="1"> 1～ 3 ヶ月</option>
        <option value="2"> 4～ 6 ヶ月</option>
        <option value="3"> 7～ 9 ヶ月</option>
        <option value="4">10～12 ヶ月</option>
    </select>
    <button type="submit">👶の投稿を表示</button>
</form>
    <!-- 投稿一覧を表示 -->
    {{-- @foreach ($tweets as $tweet) --}}
        <!-- 投稿の表示 -->
    {{-- @endforeach --}}

