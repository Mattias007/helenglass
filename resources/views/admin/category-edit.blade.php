<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-4 mb-4 border-2 border-gray-500 flex items-center rounded text-black">
                <a href="/category" class="h-full w-fit flex items-center mr-1"><span class="material-symbols-outlined mr-1">arrow_back_ios</span>Galerii</a> | Galerii kategooria muutmine
            </div>
            <div class="flex flex-col h-full  text-center lg:items-center mb-8">
                <form action="{{ route('admin.category.update', $id) }}" method="post" class="flex flex-col gap-2 w-full" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="category_id" value="0">
                    <input type="hidden" name="state" value="category">
                    <input type="text" name="title_et" id="title_et" placeholder="Kategooria pealkiri eesti keeles" value="{{ $info->title_et }}" class="rounded-md border border-gray-400">
                    <input type="text" name="title_en" id="title_en" placeholder="Kategooria pealkiri inglise keeles" value="{{ $info->title_en }}" class="rounded-md border border-gray-400">
                    <div class="w-full rounded-md">
                        <input type="file" name="image" id="image" accept=".png, .jpg, .webp, .jpeg, .svg" class="border border-gray-400 rounded-md p-1 w-full">
                        <p class="w-full text-start text-black"><span class="text-red-500 font-bold">NB!</span> Pilt ei muutu kui faili ei valita. Pilti lisades laetakse see eelneva asemele.</p>
                    </div>
                    <input type="submit" value="Salvesta" class="border border-gray-400 p-2 rounded-md text-start font-bold">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
