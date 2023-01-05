@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1 class="text-center">New Sauna登録</h1>
@stop

@section('content')
    @if($errors->any())
    <div class="alert alert-warning alert-dismissible">
        {{-- エラーの表示 --}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<html>
<form action="{{ route('sauna.store') }}" method="post">
    @csrf
<div class="card-body">
    {{-- サウナ名入力 --}}
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="サウナ名" />
    <div>

    {{-- サウナ温度 --}}
    <div class="form-group range">
        <input type="range" class="form-control" id="sauna_temperature" name="sauna_temperature" value="90" min="0" max="100" />
        <p>
            サウナ温度：<span>90</span>度
        </p>
    <div>

    {{-- サウナ湿度 --}}
    <div class="form-group range">
        <input type="range" class="form-control" id="sauna_humidity" name="sauna_humidity" value="50" min="0" max="100" />
        <p>
            サウナ湿度：<span>50</span>%
        </p>
    <div>

    {{-- 水風呂温度 --}}
    <div class="form-group range">
        <input type="range" class="form-control" id="water_temperature" name="water_temperature" value="20" min="-20" max="30" />
        <p>
            水風呂温度：<span>20</span>度
        </p>
    <div>
    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::id() }}"/>


  <div class="actions text-center">
    <br>
     <p class="text-center ">
        <button type="submit" class="btn btn-primary">登録</button>
    </p>
  </div>



<body>

<div class="text-center">
  <button class="back btn-secondary btn-lg" type="button" onClick="history.back()">戻る</button>
</div>

</body>
</html>
@stop

@section('css')
<style>
*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}



.btn,
a.btn,
button.btn {
  font-size: 2.0rem;
  font-weight: 500;
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
    <script>
        var elem = document.getElementsByClassName('range');
        var rangeValue = function(elem, target){
            return function(evt){
                target.innerHTML = elem.value;
            }
        }
        for(var i =0, max = elem.length; i < max; i++){
            bar = elem[i].getElementsByTagName('input')[0];
            target = elem[i].getElementsByTagName('span')[0];
            bar.addEventListener('input', rangeValue(bar, target));
        }

    </script>
@stop
