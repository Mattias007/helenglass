<!-- <?php
function p($arr){
    return '<pre>'.print_r($arr,true).'</pre>';
}

// var_dump($_SERVER['PATH_INFO']);
var_dump(explode('/', $_SERVER['PATH_INFO']))
// p($_SERVER);
?> -->
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center">
                @if (Auth::user())
                    <div class="p-4 mb-2 flex items-center rounded text-black border-2 border-gray-500 w-full">
                        <a href="/category/create" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">add</span>Lisa uus kategooria</a>
                    </div>
                @endif


                <?php
                // $_SERVER['REQUEST_URI']
                echo ('/en' . $_SERVER['REQUEST_URI']);
                ?>
            <div class="w-full h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 p-2">
                @foreach ($categories as $category)
                    <div class="flex flex-col w-3/3 h-full rounded-md text-center border-2 border-gray-500 text-black">
                        <div class="flex justify-center p-2 w-full "><img class="h-80 w-full rounded-t-md object-cover" src="{{ asset('storage/images') . '/' . $category->image}}" alt="{{ $category->title_et }} cover image"></div>
                        <div class="p-8  flex flex-col">
                            <div class="text-4xl pb-4">
                                <h1>
                                    @if (__('messages.category_title') == '_et')
                                        {{ $category->title_et }}
                                    @elseif (__('messages.category_title') == '_en')
                                        {{ $category->title_en }}
                                    @endif
                                </h1>
                            </div>
                            <div class="h-full"></div>
                            <div class=" flex self-center ">
                                <a href="/gallery/{{ $category->id }}" class=" flex self-center text-black text-2xl w-fit px-8 py-3 rounded-md border-2 border-gray-500">
                                    <h1>Ava Galerii</h1>
                                </a>
                            </div>
                            @if (Auth::user())
                                <div class="mt-4 text-black flex bottom-2 justify-center w-full">
                                    <a href="/category/edit/{{ $category->id }}" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">edit</span>Muuda</a>
                                    <div class="w-[3px] h-6 bg-[#575757] mx-4 rounded-lg"></div>
                                    <a href="/category/delete/{{ $category->id }}" class="h-full w-fit flex items-center"><span class="material-symbols-outlined mr-2">delete</span> Kustuta</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($total > 6)
            <div class=" overflow-hidden shadow-sm sm: flex justify-center items-center">
                <div class="p-6  flex flex-col lg:flex-row gap-4 relative">
                        <div class="w-52 mx-auto">
                            <div class="flex flex-col items-center">
                                <div class="inline-flex mt-2 xs:mt-0 gap-2">
                                    <!-- Buttons -->
                                    <a href="{{ $categories->previousPageUrl() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium border-2 border-gray-500 rounded-l-md transition-all delay-25 ease-linear">
                                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                                        Prev
                                    </a>
                        
                                    <a href="{{ $categories->nextPageUrl() }}" disabled class="inline-flex items-center px-4 py-2 text-sm font-medium border-2 border-gray-500 rounded-r-md transition-all delay-25 ease-linear">
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
    </div>
</x-app-layout>
