<div class="w-1/3 m-8 py-4 px-12 bg-white border-2 border-gray-500 shadow-ls rounded-lg flex flex-col justify-between">
	<a href="/post/{{ $post->id }}">
		<div class="flex justify-end -mt-2">
			<img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" class="justify-end border-2 border-indigo-400 rounded-full h-16 w-16 object-cover">
		</div>
		<div>
			<h2 class="text-gray-800 text-3xl font-semibold">{{ $post->title }}</h2>
		</div>
		<div>
			<p class="mt-2 text-gray-600">{{ $post->body }}</p>
		</div>
		@if ($post->image != null)
			<div>
				<img src="{{ $post->image }}" alt="image" class="w-3/4 mx-auto mt-8">
			</div>
		@endif

		<div class="flex justify-between mt-4">
			<span class="text-gray-600">likes: {{ $post->likes }}</span>
			<a href="/users/{{ $post->user->id }}" class="text-xl font-medium text-indigo-500">- {{ $post->user->name }}</a>
		</div>
	</a>
</div>
