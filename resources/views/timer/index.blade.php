@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

@if(isset($sauna))
<h3 class="text-center">NEXT SAUNA </h3>
<h1 class="text-center">{{ $sauna->name }}</h1>
<h3 class="text-center">温度:{{ $sauna->sauna_temperature }}℃  湿度:{{ $sauna->sauna_humidity }}℃  水温:{{ $sauna->water_temperature }}℃</h3>
@else
<p>HELLO</p>
@endif

@stop

@section('content')
<form action="{{ route('timer.create') }}" >
        @csrf
        <input type="hidden" id="sauna_id" name="sauna_id" value="{{ $sauna->id }}"/>
        <input type="hidden" id="sauna_end_time" name="sauna_end_time" value="20221023000000"/>
        <input type="hidden" id="water_start_time" name="water_start_time" value="20221023000000"/>
        <input type="hidden" id="water_end_time" name="water_end_time" value="20221023000000"/>
        <input type="hidden" id="outside_start_time" name="outside_start_time" value="20221023000000"/>
        <input type="hidden" id="outside_end_time" name="outside_end_time" value="20221023000000"/>
        <input type="hidden" id="user_id" name="user_id" value="1"/>
        <input type="hidden" id="sauna_start_time" name="sauna_start_time" value="<?php
            $now = new Datetime("now");
            $date = $now->format("YmdHis");
            echo $date; ?>"/>

        <p class="text-center">
            <button type="submit" class="btn btn-malformation btn-outline-danger">
                START TOTONOU
            </button>
        </p>

    </form>

@stop

@section('css')
<style>
  .main {
  margin: 0 auto;
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 20px;
  }
*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 62.5%;
}

.btn,
a.btn,
button.btn {
  font-size: 3.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}

</style>
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop
