<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Artist
        </h1>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-12">
            <form action="{{ route('music.update', $artist->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $artist->title) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        @error('title')<p class="text-red-500 text-xs">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="url" class="block text-sm font-medium text-gray-700">Image URL</label>
                        <input type="url" id="url" name="url" value="{{ old('url', $artist->url) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        @error('url')<p class="text-red-500 text-xs">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $artist->description) }}</textarea>
                        @error('description')<p class="text-red-500 text-xs">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded">Update Artist</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>