@extends('layouts.main')

@section('main-container')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h4 class="card-header">Task List

                        <a href="{{ route('tasks.create') }}" class="btn float-end btn-sm btn-danger">Create Task</a>

                    </h4>
                    <div class="card-body">

                        <table class="table table-striped table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th width="25%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($tasks))
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $task->id }}</td>
                                            <td>{{ $task->title }}</td>

                                            <td>{{ $task->description }}</td>
                                            <td>
                                                <a href="{{ route('tasks.edit', $task) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No task in the list</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
