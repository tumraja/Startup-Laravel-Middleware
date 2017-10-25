@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center" style="padding: 10px;">Edit a Task</h4>
                    </div>
                    <div class="panel-body">
                        {!!  Form::open(['route' => ['task.update', $task->id], 'method' => 'put']) !!}
                            <div class="form-group">
                                {{  Form::label('Name') }}
                                {{ Form::text('t_name', $value = $task->name, $attributes = ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Description') }}
                                {{ Form::textarea('t_description', $value = $task->description, $attributes = ['rows' => 5, 'class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection