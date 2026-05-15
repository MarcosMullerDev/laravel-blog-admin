<x-app-layout>

<div class="min-h-screen bg-zinc-100">

<div class="max-w-5xl mx-auto py-10 px-6">

<div class="mb-10">

<h1 class="text-5xl font-black mb-3">
Novo Post
</h1>

<p class="text-zinc-600">
Sistema administrativo Laravel
</p>

</div>

<form method="POST"
      action="{{ route('posts.store') }}"
      enctype="multipart/form-data"
      class="bg-white rounded-3xl shadow-xl p-10 space-y-8">

@csrf

<div>

<label class="block mb-3 font-bold">
Título
</label>

<input type="text"
       name="title"
       class="w-full border border-zinc-300 rounded-2xl p-4">

</div>

<div>

<label class="block mb-3 font-bold">
Slug
</label>

<input type="text"
       name="slug"
       class="w-full border border-zinc-300 rounded-2xl p-4">

</div>

<div>

<label class="block mb-3 font-bold">
Imagem
</label>

<input type="file"
       name="image"
       class="w-full border border-zinc-300 rounded-2xl p-4">

</div>

<div>

<label class="block mb-3 font-bold">
Status
</label>

<select name="status"
        class="w-full border border-zinc-300 rounded-2xl p-4">

<option value="draft">
Rascunho
</option>

<option value="published">
Publicado
</option>

<option value="scheduled">
Agendado
</option>

</select>

</div>

<div>

<label class="block mb-3 font-bold">
Data de Publicação
</label>

<input type="datetime-local"
       name="published_at"
       class="w-full border border-zinc-300 rounded-2xl p-4">

</div>

<div>

<label class="block mb-3 font-bold">
Conteúdo
</label>

<textarea name="content"
          rows="8"
          class="w-full border border-zinc-300 rounded-2xl p-4"></textarea>

</div>

<button class="bg-black hover:bg-zinc-800 transition text-white px-8 py-4 rounded-2xl font-bold">

Salvar Post

</button>

</form>

</div>

</div>

</x-app-layout>