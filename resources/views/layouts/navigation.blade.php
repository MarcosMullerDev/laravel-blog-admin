<nav class="bg-black border-b border-zinc-800">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-20">

            <div class="flex items-center gap-8">

                <a href="/dashboard"
                   class="text-white font-black text-2xl">

                    Laravel Blog Admin

                </a>

                <a href="/posts"
                   class="text-zinc-300 hover:text-white transition">

                    Posts

                </a>

            </div>

            <div>

                <form method="POST"
                      action="{{ route('logout') }}">

                    @csrf

                    <button class="bg-red-500 hover:bg-red-600 transition text-white px-5 py-2 rounded-xl">

                        Sair

                    </button>

                </form>

            </div>

        </div>

    </div>

</nav>