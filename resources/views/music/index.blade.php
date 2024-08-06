<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Trending Artists
        </h1>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-12 flex justify-between">
            <a href="{{ route('music.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Artist</a>
        </div>
        <div class="mt-12 flex flex-wrap justify-center gap-6">
            @foreach($artists as $artist)
                <div class="flex flex-col items-center">
                    <a href="{{ route('music.show', $artist->id) }}">
                        <img class="object-cover rounded-full w-24 h-24 lg:w-32 lg:h-32" src="{{ $artist->url }}" alt="{{ $artist->title }}">
                    </a>
                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-black">
                            {{ $artist->title }}
                        </h3>
                        <div class="mt-2">
                            <a href="{{ route('music.edit', $artist->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('music.destroy', $artist->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $artist->id }})">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>