<x-layout>
    <h2>{{ $user->name }}</h2>
    <div class="bg-gray-200 rounded-md p-4">
        <p><strong>Skill Level:</strong> {{ $user->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $user->bio }}</p>
    </div>
</x-layout>
