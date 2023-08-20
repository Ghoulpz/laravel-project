<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ваши товары') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @foreach($Products as $Product)
                        <form method="POST" action="/deletedProduct/{{$Product->id ?? ''}}">
                            @csrf
                        <p><a href="/Product/{{$Product->id ?? ''}}">{{$Product->ProductName ?? ''}}</a></p>
                        <p>{{$Product->Price ?? 'Products not found'}}</p>

                        <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
