<x-layout>
    <h2>Currently available users</h2>
    <p>{{ $greeting }}</p>

    <ul>
        @forelse ($users as $user)
            <li>
                <a href="/users/{{ $user['id'] }}">{{ $user['name'] }}</a>
            </li>
        @empty
            <li>No users available</li>
        @endforelse
    </ul>
</x-layout>
