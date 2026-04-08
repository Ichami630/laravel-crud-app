<x-layout>
    <h2>Currently available users</h2>

    <ul>
        @forelse ($users as $user)
            <li>
                <x-card href="{{ route('users.show', $user->id) }}" :highlight="$user->skill > 80">
                    <div>
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @empty
            <li>No users available</li>
        @endforelse
    </ul>

    {{ $users->links() }}
</x-layout>
