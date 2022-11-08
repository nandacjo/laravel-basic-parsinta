<x-app-layout title="Task">
    <h1>Update Tasks</h1>
    <div class="row">
        <div class="col-md-6">
            <form action=" {{ route('tasks.update', $task->id) }} " method="post" @class(['row gap-2'])>
                @method('put')
                @csrf
                @include('task._form')
            </form>
        </div>
    </div>
</x-app-layout>
