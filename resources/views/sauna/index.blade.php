@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h3 class="text-center">NEXT SAUNA </h3>
<h2 class="text-center">{{ $last_sauna->name }}</h2>
@stop

@section('content')
<body>



<p class="text-center">温度:{{ $last_sauna->sauna_temperature }}℃  湿度:{{ $last_sauna->sauna_humidity }}℃  水温:{{ $last_sauna->water_temperature }}℃</p>

<hr style="border:none;border-top:dashed 2px black;height:1px;width:100%;">


<p class="text-center"><a class="btn btn-malformation btn-outline-danger" href="{{ route('sauna.create') }}" role="button">NEXTサウナを登録する</a></p>

<hr style="border:none;border-top:dashed 2px black;height:1px;width:100%;">



<h3 class="text-center">過去に利用したサウナ</h3>


<table class="table table-hover ">
  <thead>
    <tr>
      <th>名前</th>
      <th>サウナ温度</th>
      <th>サウナ湿度</th>
      <th>水風呂温度</th>
      <th colspan="3"></th>
    </tr>
  </thead>

  <tbody>
    @foreach($saunas as $sauna)
      <tr>
        <td>{{ $sauna->name }}</td>
        <td>{{ $sauna->sauna_temperature }}℃</td>
        <td>{{ $sauna->sauna_humidity }}%</td>
        <td>{{ $sauna->water_temperature }}℃</td>
      </tr>
    @endforeach


  </tbody>
</table>

<br>

  </body>
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop