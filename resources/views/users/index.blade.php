<x-layout>
    <h2>Currently available users</h2>

    <ul>
        @forelse ($users as $user)
            <li>
                <x-card href="/users/{{ $user['id'] }}" :highlight="$user['skill'] > 80">
                    <h3>{{ $user['name'] }}</h3>
                </x-card>
            </li>
        @empty
            <li>No users available</li>
        @endforelse
    </ul>
</x-layout>
