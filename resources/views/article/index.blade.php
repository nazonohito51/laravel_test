@extends('layouts.default_layout')

@section('addCss')
    <link href="{{{ asset('/assets/css/sample.css') }}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
    <body>
        <h1>Hello</h1>
        <div>コンテンツ</div>
@stop

@section('addJs')
    <script type="text/javascript" src="{{{ asset('/assets/js/sample.js') }}}"></script>
@stop

@include('layouts.footer')
