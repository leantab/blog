@slot
@forelse ($posts as $post)

	<livewire:post :post="$post" />

@empty

	<h2 class="flex justify-center my-8">No posts found</h2>

@endforelse
@endslot
