@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('/task/create') }}" class="btn btn-primary pull-right">Create a Task</a>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No.#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-success" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection