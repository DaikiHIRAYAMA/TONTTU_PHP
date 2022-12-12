@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<h1>ダッシュボード</h1>
@stop

@section('content')
<p>ここがコンテンツ部分</p>
@stop
@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    --}}
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop
