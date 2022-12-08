@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1 class="text-center">ととのいログ</h1>
@stop

@section('content')
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col ">日付</th>
      <th scope="col">サウナ時間</th>
      <th scope="col">水風呂時間</th>
      <th scope="col">外気浴時間</th>
      <th scope="col">詳細</th>

    </tr>
  </thead>
  <tbody>
    @foreach($timers as $timer)

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

      <tr>
        <td>{{ $timer->created_at->format('Y年m月d日') }}</td>
        <td>{{ $ST }}秒</td>
        <td>{{ $WT }}秒</td>
        <td>{{ $OT }}秒</td>

        <td><a href="{{ route('timer.show', $timer->id) }}" role="button">詳細</a></td>


      </tr>
    @endforeach
  </tbody>
</table>
<br>


@stop

@section('css')
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop