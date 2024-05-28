@extends('layouts.app')
@section('title', 'Tasks list')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('tasks.create') }}" class="btn  btn-bordered ">Create New Task</a>
    </div>
    <table class="table table-striped my-5">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Assigned User</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->assignedTo->name }}</td>
                <td>{{ $task->assignedBy->name }}</td>
            </tr>
        @endforeach  
        </tbody>
    </table>
 {{ $tasks->links() }}
</div>
@endsection
