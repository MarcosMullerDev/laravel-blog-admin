<x-app-layout>

<div class="min-h-screen bg-zinc-100">

    <div class="max-w-7xl mx-auto py-10 px-6">

        <div class="mb-10">

            <h1 class="text-5xl font-black text-zinc-900 mb-3">
                Painel Administrativo
            </h1>

            <p class="text-zinc-600 text-lg">
                Sistema de gerenciamento de conteúdo em Laravel
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <a href="/posts"
               class="bg-white p-8 rounded-3xl shadow hover:scale-105 transition">

                <div class="text-5xl mb-4">
                    📝
                </div>

                <h2 class="text-2xl font-bold mb-2">
                    Gerenciar Posts
                </h2>

                <p class="text-zinc-600">
                    CRUD completo de postagens
                </p>

            </a>

            <div class="bg-black text-white p-8 rounded-3xl shadow">

                <div class="text-5xl mb-4">
                    ⚡
                </div>

                <h2 class="text-2xl font-bold mb-2">
                    Laravel 12
                </h2>

                <p>
                    Sistema moderno utilizando PHP e Laravel
                </p>

            </div>

            <div class="bg-zinc-900 text-white p-8 rounded-3xl shadow">

                <div class="text-5xl mb-4">
                    🔐
                </div>

                <h2 class="text-2xl font-bold mb-2">
                    Autenticação
                </h2>

                <p>
                    Login e proteção de rotas
                </p>

            </div>

        </div>

    </div>

</div>

</x-app-layout>