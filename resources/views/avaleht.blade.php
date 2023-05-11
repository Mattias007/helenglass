<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col items-center w-full h-full lg:flex-row">
            {{ __('messages.welcome') }}
                <h1 class="flex w-full p-4 text-lg text-center font-bold lg:w-8/12 lg:text-xl">
                    {{__('messages.text')}}
                </h1>
                
                <img class="flex w-4/5 lg:w-4/12" src="{{ asset('storage/images') . '/' . 'helen.jpg'}}" alt="">
                
            </div>
        </div>
    </div>
</x-app-layout>
