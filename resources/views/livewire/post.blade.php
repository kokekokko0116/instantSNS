<div wire:poll.2.5s>
    <div class="view">
        @foreach ($posts as $post)
            <div class="item">
                <div>{{ $post->content }}</div>
                <div class="created_at">{{ $post->created_at }}</div>
            </div>
        @endforeach
    </div>

    <div class="form">
        <form wire:submit.prevent="create">
            <input type="text" wire:model="text">
            <button type="submit">投稿</button>
        </form>
    </div>
</div>
