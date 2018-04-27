
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/styles.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/9712be8772.js"></script>
    </head>
    <body id="CRMapp" class="hold-transition skin-black sidebar-mini">
        <div class="wrapper">
            @include('layouts.header')
            @include('layouts.sidebar')
            <div class="content-wrapper">
                <section class="content container-fluid">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">Anything you want</div>
                <strong>Copyright &copy; <?=date('Y')?> <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>.</strong> All rights reserved.
            </footer>
        </div>
        <script src="{{asset('public/js/app.js')}}"></script>
        <script>
            function ConfirmDelete(){
                return confirm('Are you sure you want to delete this item?');
            }
        </script>
    </body>
</html>