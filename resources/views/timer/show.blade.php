@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
@stop

@php
    $SE = $timer->sauna_end_time;
    $SS = $timer->sauna_start_time;
    $ST = strtotime($SE)-strtotime($SS);
    $WE = $timer->water_end_time;
    $WS = $timer->water_start_time;
    $WT = strtotime($WE)-strtotime($WS);
    $OE = $timer->outside_end_time;
    $OS = $timer->outside_start_time ;
    $OT = strtotime($OE)-strtotime($OS) ;
@endphp


@section('content')

<h5 class="text-center">
{{ $timer->created_at->format('Y年m月d日') }}
</h5>

<h2 class="text-center"> {{ $sauna->name }}</h2>

<p class="text-center">温度:{{ $sauna->sauna_temperature }}度 湿度:{{ $sauna->sauna_humidity }}% 水温:{{ $sauna->water_temperature }}度</p>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 b-color1">
      <div class="card-body">
        <h5 class="card-title text-center">サウナ室時間</h5>
        <h2 class="card-text text-center">{{ $ST }}秒</h2>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card h-100 b-color2">
      <div class="card-body">
        <h5 class="card-title text-center">水風呂時間</h5>
        <h2 class="card-text text-center"> {{ $WT }}秒</h2>
      </div>

    </div>
  </div>
  <div class="col">
    <div class="card h-100 b-color3">
      <div class="card-body">
        <h5 class="card-title text-center">外気浴時間</h5>
        <h2 class="card-text text-center"> {{ $OT }}秒</h2>
      </div>

    </div>
  </div>
</div>
<br>

<div class="text-center">
  <button class="back btn-secondary btn-lg" type="button" onClick="history.back()">戻る</button>
</div>


<br>

@stop