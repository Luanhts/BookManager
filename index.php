<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Book Manager</title>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Manager</div>

            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explore</a></li>
                <li><a href="/my-books.php" class="hover:underline">My Books</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <form class="w-full flex space-x-2 mt-6">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                placeholder="Search...">

            <button type="submit">Search</button>
        </form>

        <!--Lista de Livros-->
        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <!--Livro-->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class=" flex">
                    <div class="w-1/3">imagem</div>

                    <div>
                        <a href="/livro.php" class="font-semibold hover:underline">Titulo</a>
                        <div class="text-xs italic">Altor</div>
                        <div class="text-xs italic">(3) Avaliações</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>

            <!---->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class=" flex">
                    <div class="w-1/3">imagem</div>

                    <div>
                        <a href="/livro.php?" class="font-semibol hover:underline">Titulo</a>
                        <div class="text-xs italic">Altor</div>
                        <div class="text-xs italic">(3) Avaliações</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>

            <!---->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class=" flex">
                    <div class="w-1/3">imagem</div>

                    <div>
                        <a href="/livro.php?" class="font-semibol hover:underline">Titulo</a>
                        <div class="text-xs italic">Altor</div>
                        <div class="text-xs italic">(3) Avaliações</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>

            <!---->
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class=" flex">
                    <div class="w-1/3">imagem</div>

                    <div>
                        <a href="/livro.php?" class="font-semibol hover:underline">Titulo</a>
                        <div class="text-xs italic">Altor</div>
                        <div class="text-xs italic">(3) Avaliações</div>
                    </div>
                </div>
                <div class="text-sm">
                    Descrição
                </div>
            </div>

        </section>

    </main>
</body>

</html>