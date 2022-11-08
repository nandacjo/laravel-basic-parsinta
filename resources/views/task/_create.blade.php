<div class="card">
    <div class="card-header">Create new Task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
            @csrf
            {{-- @include('task._form', ['task' => new App\Models\Task]) --}}
            @include('task._form')
        </form>
    </div>
</div>
