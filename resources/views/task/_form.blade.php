<div class="mb3 me-2">
    <input class="form-control me-2 @error('list') is-invalid @enderror" type="text" name="list" id="list"
        placeholder="The name of task" required value="{{ old('list', $task->list) }}">

    @error('list')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <button @class(['btn btn-primary']) type="submit">{{ $submit }}</button>
</div>
