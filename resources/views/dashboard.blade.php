
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <img src="" alt="">

                <div class="p-6 text-gray-900">
                    <a href="/MINECRAFT">
                        <img src="https://www.wallpaperflare.com/static/115/871/823/minecraft-game-poster-logo-wallpaper.jpg" class="mb-4 rounded float-start img-thumbnail" alt="Minecraft" width="150" height="150" >
                    </a>
                    <a href="/CSGO">
                        <img src="https://seeklogo.com/images/C/csgo-logo-CAA0A4D48A-seeklogo.com.png" class="mb-4 ml-4 rounded float-start img-thumbnail" alt="CS:GO" width="150" height="150" >
                    </a>
                    <a href="/DOTA2">
                        <img src="https://i.pinimg.com/originals/8a/8b/50/8a8b50da2bc4afa933718061fe291520.jpg" class="mb-4 ml-4 rounded float-start img-thumbnail" alt="Dota 2" width="150" height="150" >
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
