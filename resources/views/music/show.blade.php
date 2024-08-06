<!-- resources/views/music/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $artist->title }}
        </h1>
    </x-slot> 
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-12 flex justify-center items-center">
            <img class="object-cover rounded-full w-48 h-48 lg:w-64 lg:h-64" src="{{ $artist->url }}" alt="{{ $artist->title }}">
            <div class="mt-4 text-center">
                <h3 class="text-2xl font-semibold text-black">
                    {{ $artist->title }}
                </h3>
                <p class="mt-2 text-gray-600">
                    {{ $artist->description }}
                </p>
                <a href="{{ route('music.edit', $artist->id) }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Edit</a>ｓｓ
            </div>
        </div>
    </div>
</x-app-layout>