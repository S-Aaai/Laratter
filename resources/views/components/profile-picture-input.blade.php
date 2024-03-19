<div class="flex mb-4">
    <div class="mr-3">
        <img
            id="preview"
            alt=""
            src="{{  Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('uploads/penguin-48.png') }}"
            class="w-16 h-16 rounded-full object-cover border-none bg-gray-200" />
    </div>
    <div class="flex items-center">
        <button
            onclick="document.getElementById('photo').click()"
            type="button"
            class="inline-flex items-center uppercase rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            あなたのアイコンを選んでください
        </button>
        <input onchange="showPreview(event)" type="file" name="photo" id="photo" class="hidden" />
    </div>
</div>

<script>
    function showPreview(event) {
        if(event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            document.getElementById('preview').src = src;
        }
    }
</script>
