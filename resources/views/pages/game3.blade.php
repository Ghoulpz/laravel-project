<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dota 2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900">


                    @foreach($Products as $Product)
                        <p><a href="/Product/{{$Product->id ?? ''}}">{{$Product->ProductName ?? ''}}</a></p>
                        <p>{{$Product->Price ?? 'Products not found'}}</p>
                        <p class="text-right">{{$Product->author ?? ''}}</p>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

