<div>
	<div class="max-w-md m-8 py-4 px-12 bg-white border-2 border-indigo-500 shadow-lg rounded-lg">
		<div class="flex justify-end md:justify-end -mt-16">
			<img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" class="justify-end border-2 border-indigo-400 rounded-full h-20 w-20 object-cover">
		</div>
		<div>
			<h2 class="text-gray-800 text-3xl font-semibold">{{ $post->title }}</h2>
			<p class="mt-2 text-gray-600">{{ $post->body }}</p>
		</div>
		@if ($post->image != null)
			<div>
				<img src="{{ $post->image }}" alt="image" width="300">
			</div>
		@endif
		<div class="flex justify-end mt-4">
			<a href="/users/{{ $post->user->id }}" class="text-xl font-medium text-indigo-500">- {{ $post->user->name }}</a>
		</div>

	</div>
</div>
