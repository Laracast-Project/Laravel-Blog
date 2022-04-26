@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex bg-gray-100 space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="profile image" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-sm">
                    Posted
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
