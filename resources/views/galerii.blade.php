<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (Auth::user())
                <div class="p-4 flex items-center rounded text-black border-2 border-gray-500 mb-4">
                    <a href="/category" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">arrow_back_ios</span>Kategooriad</a>
                    <div class="w-[3px] h-6 bg-[#575757] mx-4 rounded-lg"></div>
                    <a href="/gallery/{{ $id }}/add" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">add</span>Lisa uued pildid</a>
                </div>
            @endif
            <div class="flex flex-wrap gap-4 justify-center">

                

                @foreach ($images as $image)
                    <div class="flex flex-col w-3/12">
                        @if (App::isLocale('en'))
                            <img src="{{ asset('storage/images') . '/' . $image->image}}" alt="{{ $info->title_en }}" class="picture w-full h-full object-cover border-2 border-black rounded" id="myImg">
                        @elseif (App::isLocale('et'))
                            <img src="{{ asset('storage/images') . '/' . $image->image}}" alt="{{ $info->title_et }}" class="picture w-full h-full object-cover border-2 border-black rounded" id="myImg">
                        @endif
                        @if (Auth::user())
                        <div class="w-full h-16 border-x-2 border-b-2 rounded-b-md border-black flex justify-center">
                            <div class="  flex items-center justify-center w-full h-full">
                                <a href="/gallery/delete/{{ $image->id }}" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">delete</span>Kustuta</a>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
            @if ($total > 9)
            <div class=" overflow-hidden shadow-sm sm: flex justify-center items-center">
                <div class="p-6  flex flex-col lg:flex-row gap-4 relative">
                        <div class="w-52 mx-auto">
                            <div class="flex flex-col items-center">
                                <div class="inline-flex mt-2 xs:mt-0 gap-2">
                                    <!-- Buttons -->
                                    <a href="{{ $images->previousPageUrl() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium border-2 border-gray-500 rounded-l-md transition-all delay-25 ease-linear">
                                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                                        Prev
                                    </a>
                        
                                    <a href="{{ $images->nextPageUrl() }}" disabled class="inline-flex items-center px-4 py-2 text-sm font-medium border-2 border-gray-500 rounded-r-md transition-all delay-25 ease-linear">
                                        Next
                                        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>   
                </div> 
            </div>
            @endif
        </div>
</x-app-layout>
