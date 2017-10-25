@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="padding: 10px;">
                            <a href="{{ route('task.create') }}" class="btn btn-primary pull-right">Create a Task</a>
                        </h4>
                    </div>
                    <div class="panel-body">
                        @if (session('remove'))
                            <div class="alert alert-success">
                                {{ session('remove') }}
                            </div>
                        @endif

                        @if (session('updated'))
                            <div class="alert alert-success">
                                {{ session('updated') }}
                            </div>
                        @endif

                        @if(!empty($tasks))
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No.#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('task.edit', [$task->id]) }}">Edit</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
                                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                           No record
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection