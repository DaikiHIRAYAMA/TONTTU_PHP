@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1 class="text-center ">Push "TOTONOU" to start<h1>
@stop

@section('content')
 <p class="text-center"  >
 <button class="btn btn-malformation btn-outline-danger"  onclick="location.href='./timer/sauna_start'">
    TOTONOU
</button>
 </p>

@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop