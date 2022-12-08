@extends('adminlte::page')

@section('title','Dashboard')
@section('content_header')
@stop

@section('content')
<form action="{{ route('water_start', $timer->id) }}" >
        @csrf
        <input type="hidden" id="water_start_time" name="water_start_time" value="<?php
            $now = new Datetime("now");
            $date = $now->format("YmdHis");
            echo $date; ?>"/>

        <p class="text-center">
            <button type="submit" class="btn btn-malformation btn-outline-primary">
                START WaterBath
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