@extends('layouts.default_layout')

@section('addCss')
    <link href="{{{ asset('/assets/css/sample.css') }}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
    <h1>{{{ isset($title) ? $title : 'Hello' }}}</h1>
    <div>コンテンツ</div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->text }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop

@include('layouts.body')

@section('addJs')
    <script type="text/javascript" src="{{{ asset('/assets/js/sample.js') }}}"></script>
@stop

@include('layouts.footer')
