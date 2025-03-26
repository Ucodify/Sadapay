@extends('layouts.main')

@section('main-container')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h4 class="card-header">Edit Task</h4>
                    <div class="card-body">
                <form action="{{ route('tasks.update', $task) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Update Task</button>
                </form>
            </div>
        </div> </div>
    </div>
    </div>
@endsection
