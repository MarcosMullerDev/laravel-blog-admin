<x-app-layout>

<div class="min-h-screen bg-zinc-100">

    <div class="max-w-4xl mx-auto py-10 px-6">

        <div class="mb-10">

            <h1 class="text-5xl font-black text-zinc-900 mb-3">
                Editar Post
            </h1>

            <p class="text-zinc-600">
                Atualize as informações do conteúdo
            </p>

        </div>

        <form method="POST"
              action="{{ route('posts.update', $post) }}"
              enctype="multipart/form-data"
              class="bg-white rounded-3xl shadow p-10 space-y-6">

            @csrf
            @method('PUT')

            <div>

                <label class="block mb-3 font-bold text-zinc-700">
                    Título
                </label>

                <input type="text"
                       name="title"
                       value="{{ $post->title }}"
                       class="w-full border border-zinc-300 rounded-2xl p-4">

            </div>

            <div>

                <label class="block mb-3 font-bold text-zinc-700">
                    Slug
                </label>

                <input type="text"
                       name="slug"
                       value="{{ $post->slug }}"
                       class="w-full border border-zinc-300 rounded-2xl p-4">

            </div>

            <div>

                <label class="block mb-3 font-bold text-zinc-700">
                    Conteúdo
                </label>

                <textarea name="content"
                          rows="8"
                          class="w-full border border-zinc-300 rounded-2xl p-4">{{ $post->content }}</textarea>

            </div>

            <button class="bg-black hover:bg-zinc-800 transition text-white px-8 py-4 rounded-2xl font-bold">

                Atualizar Post

            </button>

        </form>

    </div>

</div>

</x-app-layout>