<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escola Rápida - @yield('titulo')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script type="text/javascript" src="{{asset('/js/jquery-2.2.2.js')}}"></script>
        <!-- bootstrap-material-datetimepicker -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}"/>
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css") }}">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/font-awesome-4.7.0/css/font-awesome.css") }}">
    <link rel="stylesheet" href="{{asset("/bower_components/AdminLTE/plugins/select2/select2.min.css")}}">

    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.css") }}">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset("/bower_components/AdminLTE/plugins/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.css")}}">
    <link href="{{ asset('/css/icon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.css") }}">
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">

    <![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script src="{{ asset("/js/geral.js") }}" type="text/javascript"></script>
    @yield('script')
    <style>
        @media (max-width:767px) {
            .main-sidebar, .left-side {
                padding-top: 50px;
            }
        }
        @media (min-width:767px) {
            .main-sidebar, .left-side {
                padding-top: 0;
            }
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

