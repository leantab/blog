<div class="m-4 p-8 bg-gray-100 border-4 border-slate-300 rounded-lg flex flex-col justify-arround">
	<a href="/post/{{ $post->id }}">
		<div class="flex justify-between mt-2 items-center">
			<img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}"
				class="border-lg border-indigo-400 rounded-full h-16 w-16 mx-6">
			<h2 class="text-gray-800 text-3xl font-semibold">{{ $post->title }}</h2>
		</div>
		<div>
			<p class="mt-2 text-gray-800">{{ $post->body }}</p>
		</div>
		@if ($post->image != null)
			<div>
				<img src="{{ $post->image }}" alt="image" class="w-3/4 mx-auto mt-8">
			</div>
		@endif

		<div class="flex justify-between items-center mt-4">
			<span class="text-gray-800">likes: {{ $post->likes }}</span>
			<a href="/users/{{ $post->user->id }}" class="text-xl font-medium text-indigo-500">- {{ $post->user->name }}</a>
		</div>
	</a>
</div>
