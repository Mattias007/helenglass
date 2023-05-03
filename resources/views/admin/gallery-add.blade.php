<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white flex flex-col p-4 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-2xl font-bold mb-4">Lisa uued pildid</h1>
                <form action="" method="post" class="flex flex-col gap-2 w-full" enctype="multipart/form-data">
                    <select name="category" id="category" class="grid grid-cols-2" multiple>
                        <option value="" class="p-2">KATEGOORIA NIMI</option>
                        <option value="" class="p-2">KATEGOORIA NIMI</option>
                    </select>
                    <input type="submit" value="Salvesta" class="border border-gray-400 p-2 rounded-md text-start font-bold">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
