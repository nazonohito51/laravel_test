@extends('layouts.default_layout')

@section('addCss')
    <link href="{{{ asset('/assets/css/sample.css') }}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
<div class="container">
    <h1>{{{ isset($title) ? $title : 'Hello' }}}</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->text }}</td>
                    <td>{!! link_to(action('ArticleController@show', ['id' => $article->id]), '詳細', ['class' => 'btn btn-primary']) !!}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@stop

@include('layouts.body')

@section('addJs')
    <script type="text/javascript" src="{{{ asset('/assets/js/sample.js') }}}"></script>
@stop

@include('layouts.footer')
