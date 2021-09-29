@extends('layouts.master')

@section('content')

<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>
<hr>

<p><a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a></p>
<p><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a></p>
<p>
<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->id]
        ]) !!}
            {!! Form::submit('Delete this task', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div></p>

@endsection