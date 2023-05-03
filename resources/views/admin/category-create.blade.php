<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-col p-4 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-2xl font-bold mb-4">Loo uus kategooria</h1>
                <form action="" method="post" class="flex flex-col gap-2 w-full" enctype="multipart/form-data">
                    <input type="text" name="title" id="title" placeholder="Pealkiri" class="rounded-md border border-gray-400">
                    <input type="file" name="image" id="image" class="border border-gray-400 rounded-md p-1">
                    <input type="submit" value="Salvesta" class="border border-gray-400 p-2 rounded-md text-start font-bold">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
