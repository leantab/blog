<div class="flex mt-8">
	<button wire:click="clickLike" class="{{ $this->likedBg }} mr-3 flex text-center text-sm">
		<div class="inline-block align-middle">
			<img src="/img/like.png" alt="like button" class="">
		</div>
		{{ $this->likesCount }}
	</button>
</div>
