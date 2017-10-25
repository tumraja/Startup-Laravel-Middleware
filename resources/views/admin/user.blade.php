@extends('layouts.app')

@section('content')
    <div class="wrapper">
        @include('admin.partials.side-navbar')

        <div class="main-panel">
            @include('admin.partials.top-navbar')

            <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Members</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    @foreach($users as $user)
                                        <li>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    {{ $user->name }}
                                                </div>
                                                <div class="col-md-5">
                                                    {{ $user->ability }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection