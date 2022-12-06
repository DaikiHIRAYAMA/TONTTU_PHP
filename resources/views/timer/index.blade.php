@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>サウナの確認、ととのいスタートボタン<h1>
@stop

@section('content')
<body>
   <h1 class="text-center">Sauna Timer</h1>
    
    <%= render 'form', timer: @timer %>
    <% if current_user.condition == 5 %>
    <h1  class="text-center" style="color:red"> あなたは大変疲れています。くれぐれも体調に気をつけてご入浴下さい。</h1>
    <% end %>


<h3 class="text-center"><%= link_to 'Back', timers_path %></h3>



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