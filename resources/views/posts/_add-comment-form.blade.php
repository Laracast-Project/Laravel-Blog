@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="profile image" width="40" height="40" class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full focus:outline-none focus:ring"
                    id="body" rows="5"
                    placeholder="Quick, thing of something to say!"
                    required
                ></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
            </div>


        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login" class="text-blue-500 hover:underline">Log in </a> to leave a comment.
    </p>
@endauth
