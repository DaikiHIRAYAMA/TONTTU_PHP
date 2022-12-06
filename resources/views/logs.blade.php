@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
@stop

@section('content')
<h1 class="text-center">ととのいログ</h1>
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col ">日付</th>
      <th scope="col">サウナ時間</th>
      <th scope="col">水風呂時間</th>
      <th scope="col">外気浴時間</th>
      <th scope="col">詳細</th>
      <th scope="col">削除</th>

    </tr>
  </thead>
  <tbody>
        <% @timers.each do |timer| %>
      <tr>
        <td><%= timer.created_at.strftime("%Y年%m月%d日") %></td>
        <td><%= (timer.water_start_time - timer.sauna_finish_time).ceil %>秒</td>
        <td><%= (timer.outside_start_time - timer.water_finish_time).ceil %>秒</td>
        <td><%= (timer.updated_at - timer.outside_finish_time).ceil %>秒</td>
        <td><%= link_to '詳細', timer %></td>
        <td><%= link_to '削除', timer, method: :delete, data: { confirm: '本当に削除してもよろしいですか?' } %></td>
      </tr>
    <% end %>
  </tbody>
</table>
<br>

@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script>console.log('ページごとJSの記述')</script>
@stop