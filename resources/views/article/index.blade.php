@extends('layouts.default_layout')

@section('addCss')
    <link href="{{{ asset('/assets/css/sample.css') }}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
    <h1>{{{ isset($title) ? $title : 'Hello' }}}</h1>
    <div>コンテンツ</div>
    @foreach($articles as $article)
        <p>{{ $article->title }}</p>
        <p>{{ $article->text }}</p>
    @endforeach
@stop

@include('layouts.body')

@section('addJs')
    <script type="text/javascript" src="{{{ asset('/assets/js/sample.js') }}}"></script>
@stop

@include('layouts.footer')
