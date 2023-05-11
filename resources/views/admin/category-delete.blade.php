<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-4 mb-4 border-2 border-gray-500 flex items-center rounded text-black">
                <a href="/category" class="h-full w-fit flex items-center mr-1"><span class="material-symbols-outlined mr-1">arrow_back_ios</span>Galerii</a> | Galerii kategooria kustutamine
            </div>
            <div class="flex flex-col h-full  text-center text-[#FEE2C5] lg:items-center mb-8">
                <div class="flex flex-col w-3/3 h-full rounded-md text-center border-2 border-gray-500 text-black">
                    <div class="flex justify-center p-2 w-full "><img class="h-80 w-full rounded-t-md object-cover" src="{{ asset('storage/images') . '/' . $info->image}}" alt="{{ $info->title_et }} cover image"></div>
                    <div class="p-8  flex flex-col">
                        <div class="text-4xl pb-4">
                            <h1>
                                @if (__('messages.category_title') == '_et')
                                    {{ $info->title_et }}
                                @elseif (__('messages.category_title') == '_en')
                                    {{ $info->title_en }}
                                @endif
                            </h1>
                        </div>
                        <div class="h-full"></div>
                        <div class=" flex self-center ">
                            <a href="/gallery/{{ $info->id }}" class=" flex self-center text-black text-2xl w-fit px-8 py-3 rounded-md border-2 border-gray-500">
                                <h1>Ava Galerii</h1>
                            </a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('admin.category.delete', $info->id) }}" method="post" class="w-full mt-4" enctype="multipart/form-data">
                    @csrf
                    <p class="text-black font-bold mb-4 text-xl">Kas oled kindel, et soovid kustutada ees toodud kategooriat?</p>
                    <input type="submit" value="Jah" class="w-full bg-red-500 font-bold text-black rounded p-2 mb-4">
                </form>
                <form action="/category" method="get" class="w-full">

                    <input type="submit" value="Ei" class="w-full bg-[#414141] rounded p-2 mb-4">

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
