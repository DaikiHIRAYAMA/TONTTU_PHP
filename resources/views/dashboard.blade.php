@extends('adminlte::page')

@section('title','Dashboard')


@section('content_header')
<h1 class="text-center">TONTTU<h1>
@stop

@section('content')

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 b-color1">
      <div class="card-body">
        <h5 class="text-center"> ⓵サウナを登録する</h5>
      <br>
        <div class="text-center">
        <button  class="btn btn-malformation btn-outline-warning text-center">
        <h1>サウナ登録</h1>
        </button>
        </div>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card h-100 b-color2">
      <div class="card-body">
        <h5 class="text-center"> ⓶サウナタイマーをスタートします</h5>
      <br>
        <div class="text-center">
        <button  class="btn btn-malformation btn-outline-info text-center">
        <h1>TOTONOU</h1>
        </button>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 b-color">
      <div class="card-body">
        <h5 class="text-center"> ⓷ログを確認できます</h5>
      <br>
        <div class="text-center">
        <button  class="btn btn-malformation btn-outline-success text-center">
        <h1>サウナログ</h1>
        </button>
        </div>
        <br>

    </div>
  </div>
</div>
</div>

<br>
<img src="{{ asset('img/sauna.jpeg') }}" alt="" width=80% height=80% >

@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop
