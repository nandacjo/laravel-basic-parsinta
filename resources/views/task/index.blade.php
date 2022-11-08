<x-app-layout title="Task">
    <h1>My Tasks</h1>
    <div class="row">
        <div class="col-md-6">
            @include('task/_create')
        </div>
    </div>

    <ul @class(['list-group mt-4'])>
        @foreach ($tasks as $key => $value)
            <li @class([
                'list-group-item',
                'd-flex justify-content-between align-items-center',
            ])>
                {{ $key + 1 }} - {{ $value->list }}
                <div @class(['d-flex'])>
                    <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $value) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $value) }}" method="post">
                        @csrf
                        @method('delete')
                        <button @class(['btn btn-danger']) type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
