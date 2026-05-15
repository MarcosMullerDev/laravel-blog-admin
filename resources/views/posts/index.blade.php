<x-app-layout>

<div class="min-h-screen bg-zinc-100">

<div class="max-w-7xl mx-auto py-10 px-6">

<div class="flex justify-between items-center mb-10">

<div>

<h1 class="text-5xl font-black mb-2">
Posts
</h1>

<p class="text-zinc-600">
Gerenciamento de conteúdo
</p>

</div>

<a href="{{ route('posts.create') }}"
   class="bg-black hover:bg-zinc-800 transition text-white px-6 py-4 rounded-2xl font-bold">

Novo Post

</a>

</div>

<form method="GET" class="mb-8">

<input type="text"
       name="search"
       placeholder="Buscar posts..."
       class="w-full bg-white border border-zinc-300 rounded-2xl p-5">

</form>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

@foreach($posts as $post)

<div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:scale-[1.02] transition">

@if($post->image)

<img src="{{ asset('storage/' . $post->image) }}"
     class="w-full h-60 object-cover">

@endif

<div class="p-6">

<div class="flex justify-between items-center mb-4">

<h2 class="text-2xl font-black">
{{ $post->title }}
</h2>

@if($post->status == 'published')

<span class="bg-green-200 text-green-800 px-3 py-1 rounded-full text-sm font-bold">
Publicado
</span>

@endif

@if($post->status == 'draft')

<span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm font-bold">
Rascunho
</span>

@endif

@if($post->status == 'scheduled')

<span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-bold">
Agendado
</span>

@endif

</div>

<p class="text-zinc-600 mb-6 line-clamp-4">
{{ $post->content }}
</p>

@if($post->published_at)

<p class="text-sm text-zinc-500 mb-6">
Publicação:
{{ \Carbon\Carbon::parse($post->published_at)->format('d/m/Y H:i') }}
</p>

@endif

<div class="flex gap-3">

<a href="{{ route('posts.edit', $post) }}"
   class="bg-blue-500 hover:bg-blue-600 transition text-white px-4 py-3 rounded-xl w-full text-center font-semibold">

Editar

</a>

<form method="POST"
      action="{{ route('posts.destroy', $post) }}"
      class="w-full">

@csrf
@method('DELETE')

<button class="bg-red-500 hover:bg-red-600 transition text-white px-4 py-3 rounded-xl w-full font-semibold">

Excluir

</button>

</form>

</div>

</div>

</div>

@endforeach

</div>

<div class="mt-10">

{{ $posts->links() }}

</div>

</div>

</div>

</x-app-layout>