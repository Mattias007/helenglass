<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-4 mb-4 border-2 border-gray-500 flex items-center rounded text-black">
                <a href="/gallery/{{ $id }}" class="h-full w-fit flex items-center mr-1"><span class="material-symbols-outlined mr-1">arrow_back_ios</span>Galerii</a> | Galerii piltide lisamine
            </div>
            <div class="flex flex-col h-full  text-center text-black lg:items-center mb-8">
                <form action="{{ route('admin.gallery.add') }}" method="post" class="w-full" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="images[]" id="image" accept=".png, .jpg, .webp, .jpeg, .svg" class="w-full rounded p-4 border-2 border-gray-500 mb-4" multiple>
                    <input type="hidden" name="category" value="{{ $id }}">
                    <input type="submit" value="Salvesta" class="w-full border-2 border-gray-500 rounded p-4">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
