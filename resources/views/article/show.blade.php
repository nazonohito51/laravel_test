@extends('layouts.default_layout')

@section('addCss')
    <link href="{{{ asset('/assets/css/sample.css') }}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
    <div class="container">
        <h1>記事詳細</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <td>記事タイトル</td>
                    <td>{{ $article->title }}</td>
                </tr>
                <tr>
                    <td>記事本文</td>
                    <td>{{ $article->text }}</td>
                </tr>
            </table>
        </div>
    </div>
@stop

@include('layouts.body')

@section('addJs')
    <script type="text/javascript" src="{{{ asset('/assets/js/sample.js') }}}"></script>
@stop

@include('layouts.footer')
