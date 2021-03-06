<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		{{ __('Posts') }}
	</h2>
</x-slot>

<div class="py-4">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white shadow-xl rounded-lg grid grid-cols-1 md:grid-cols-2 md:gap-2 sm:gap-1">
			@forelse ($posts as $post)
				@livewire('post', ['post' => $post])
			@empty
				<h2 class="flex justify-center my-8">No posts found</h2>
			@endforelse
		</div>
	</div>
</div>
</div>
