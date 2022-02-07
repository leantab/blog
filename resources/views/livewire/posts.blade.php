<x-slot name="header">
	<h2 class="font-semibold text-xl text-gray-800 leading-tight">
		{{ __('Posts') }}
	</h2>
</x-slot>

<div class="py-12">
	<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white shadow-xl sm:rounded-lg grid grid-cols-2">
			@forelse ($posts as $post)

				@livewire('post', ['post' => $post])

			@empty

				<h2 class="flex justify-center my-8">No posts found</h2>

			@endforelse
		</div>
	</div>
</div>
</div>
