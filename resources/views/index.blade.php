@extends('layouts.app')

@section('title', 'Laravel Task List')

@section('content')
<nav class="mb-4">
    <a href="{{route('tasks.create')}}" class="link">Add Task</a>
</nav>

<div>
    <br>
    @forelse ($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['task' => $task->id])}}"
                @class(['line-through' => $task->completed])>{{$task->title}}</a>
        </div>
    @empty
        <div>There are no tasks</div>
    @endforelse
    <br>
    @if ($tasks->count())
        <nav class="mt-4">
        {{ $tasks->links() }}
        </nav>
    @endif
</div>
@endsection