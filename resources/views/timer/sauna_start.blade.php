@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1 class="text-center "> SAUNA START </h1>
@stop

@section('content')
<div>
    <form action="{{ route('sauna_start') }}" method="post">
        @csrf
        <input type="hidden" id="sauna_id" name="sauna_id" value="2"/>
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
                START
            </button>
        </p>
    </form>
</div>

@stop