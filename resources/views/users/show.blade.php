<x-layout>
    <h2>{{ $user->name }}</h2>
    <div class="bg-gray-200 rounded-md p-4">
        <p><strong>Skill Level:</strong> {{ $user->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $user->bio }}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded-md">
        <h3>Dojo Information</h3>
        <p><strong>Dojo Name:</strong> {{ $user->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $user->dojo->location }}</p>
        <p><strong>About Dojo:</strong></p>
        <p>{{ $user->dojo->description }}</p>
    </div>
</x-layout>
