@extends('layouts.app')
@section('title', 'Create task')
@section('content')
<div class="container">
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group my-2">
            <label for="admin">Admin Name</label>
            <select name="assigned_by_id" id="admin" class="form-control">
                <option value="" disabled selected>Select Admin Name</option>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group my-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group my-2">
            <label for="user">Assigned User</label>
            <select name="assigned_to_id" id="user" class="form-control">
                <option value="" disabled selected>Select User Name</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-bordered my-3 w-100">Create Task</button>
    </form>
</div>
@endsection