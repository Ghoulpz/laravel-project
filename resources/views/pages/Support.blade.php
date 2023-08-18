<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Поддержка') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Сотрудники поддержки вышли в окно 10 этажа, помощи не будет") }}
                    <img src="https://www.meme-arsenal.com/memes/9fb5b9e761d313d27f6373188af14115.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
