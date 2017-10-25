@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center" style="padding: 10px;">Create a Task</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'task', 'method' => 'post']) !!}
                            <div class="form-group">
                                {{  Form::label('Name') }}
                                {{ Form::text('t_name', old('t_name'), $attributes = ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Description') }}
                                {{ Form::textarea('t_description', old('t_description'), $attributes = ['rows' => 5, 'class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection