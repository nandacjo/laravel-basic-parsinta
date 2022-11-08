<x-app-layout>
    <h1>Users All</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('user.show', $user) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
