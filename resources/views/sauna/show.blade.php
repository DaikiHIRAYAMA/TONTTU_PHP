@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>edit画面<h1>
@stop

@section('content')
<p>SAUNA</p>
<body>

<h3 class="text-center">NEXT SAUNA </h3>
<h2 class="text-center"> "<%= @saunas.last.name %>"</h2>
<p class="text-center">温度:<%= @saunas.last.sauna_temperature %>度 湿度:<%= @saunas.last.sauna_humidity %>% 水温:<%= @saunas.last.water_temperature %>度</p>

<hr style="border:none;border-top:dashed 2px black;height:1px;width:100%;">


<p class="text-center"><%= link_to 'サウナを登録する', new_sauna_path ,class: " btn btn-malformation btn-outline-danger" %></p>

<hr style="border:none;border-top:dashed 2px black;height:1px;width:100%;">


    <% if @saunas.last.name == "サウナ" %>
    <h3 class="text-center" style="color:red"> これから入浴するサウナを入力して下さい</h3>
    <% else %>
    <h3 class="text-center">過去に利用したサウナ</h3>
    <% end %>
<table class="table table-hover ">
  <thead>
    <tr>
      <th>名前</th>
      <th>サウナ温度</th>
      <th>サウナ湿度</th>
      <th>水風呂温度</th>
      <th>詳細</th>
      <th colspan="3"></th>
    </tr>
  </thead>

  <tbody>
    <% @saunas.each do |sauna| %>
      <tr>
        <td><%= sauna.name %></td>
        <td><%= sauna.sauna_temperature %>度</td>
        <td><%= sauna.sauna_humidity %>%</td>
        <td><%= sauna.water_temperature %>度</td>
        <td><%= link_to '詳細', sauna %></td>
      </tr>
    <% end %>


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