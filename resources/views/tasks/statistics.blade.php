@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="mb-3">
        <a href="{{ route('tasks.index') }}" class="btn  btn-bordered ">Back to Tasks</a>
    </div>
    <table class="table table-striped my-5 text-center">
        <thead>
            <tr>
                <th>User</th>
                <th>Task Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach($statistics as $stat)
                <tr>
                    <td>{{ $stat->user->name }}</td>
                    <td>{{ $stat->task_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
