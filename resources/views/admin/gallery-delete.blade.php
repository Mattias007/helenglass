<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-4 mb-4 border-2 border-gray-500 flex items-center rounded text-black">
                <a href="/category" class="h-full w-fit flex items-center mr-1"><span class="material-symbols-outlined mr-1">arrow_back_ios</span>Galerii</a> | Galerii kategooria kustutamine
            </div>
            <div class="flex flex-col h-full  text-center  lg:items-center mb-8">
                <div class="flex items-center">
                <img src="{{ asset('storage/images') . '/' . $info->image}}" alt="" class="picture h-64 object-cover" id="myImg">
                </div>

                <form action="{{ route('admin.gallery.delete', $info->id) }}" method="post" class="w-full mt-4" enctype="multipart/form-data">
                    @csrf
                    <p class="text-red-500 font-bold mb-4 text-xl">Kas oled kindel, et soovid kustutada ees toodud pilti?</p>
                    <input type="submit" value="Jah" class="w-full bg-red-500 font-bold text-black rounded p-2 mb-4">
                </form>
                <form action="/category" method="get" class="w-full">

                    <input type="submit" value="Ei" class="w-full bg-[#414141] rounded text-white p-2">

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
