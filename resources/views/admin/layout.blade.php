<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Startup') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('admin/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('admin/css/paper-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/css/themify-icons.css') }}" rel="stylesheet">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="app">

    <div class="wrapper">
        @include('admin.partials.side-navbar')

        <div class="main-panel">
            @include('admin.partials.top-navbar')

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright">
                        <script>document.write(new Date().getFullYear())</script>,
                        <a target="_blank" href="https://github.com/tumraja/Startup-Laravel-Middleware">GitHub Project</a>
                    </div>
                    <div class="copyright">
                       [Admin Dashboard influenced by] - Credit <i class="fa fa-heart heart"></i> to <a href="http://www.creative-tim.com">Creative Tim</a>
                    </div>
                </div>
            </footer>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('admin/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admin/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('admin/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/js/demo.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();
    });
</script>

</body>
</html>
