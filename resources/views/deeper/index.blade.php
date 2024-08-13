<!-- resources/views/deeper/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Trending Artists
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($artists as $artist)
                            <div class="flex flex-col items-center">
                                <a href="{{ route('music.show', $artist->id) }}">
                                    <img class="object-cover rounded-full w-24 h-24 lg:w-32 lg:h-32" src="{{ $artist->url }}" alt="{{ $artist->title }}">
                                </a>
                                <div class="mt-2 text-center">
                                    <h3 class="text-lg font-medium leading-6 text-black">{{ $artist->title }}</h3>
                                    <p class="text-sm text-gray-600">{{ $artist->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
