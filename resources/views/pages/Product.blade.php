
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h2>Название продукта: {{$Product->ProductName}}</h2>
                    <div>Описание: {{$Product->Description}}</div>
                    <p>Цена: {{$Product->Price}} р.</p>
                    <p>Продавец: {{$Product->author}}</p>
                    <input type="submit" value="Купить" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
