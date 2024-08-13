<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Trending Artists
        </h1>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($artists as $artist)
                <div class="flex flex-col items-center">
                    <a href="{{ route('music.show', $artist->id) }}" class="flex-shrink-0">
                        <div class="w-24 h-24 lg:w-32 lg:h-32 overflow-hidden rounded-full">
                        <img class="object-cover rounded-full w-full h-full" src="{{ $artist->url }}" alt="{{ $artist->title }}">
                    </a>
                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-black">{{ $artist->title }}</h3>
                        <a href="{{ route('music.edit', $artist->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('music.destroy', $artist->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('music.create') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-black rounded">Add New Artist</a>
    </div>
</x-app-layout>