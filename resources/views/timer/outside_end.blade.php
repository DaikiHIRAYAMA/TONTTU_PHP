@extends('adminlte::page')

@section('title','Dashboard')


@section('content')
<h3 class="text-center ">心ゆくまでお楽しみください</h3>
<h5 class="text-center ">水分補給をお忘れなく</h5>

<form action="{{ route('update3', $timer->id ) }}" method="patch">
        @csrf
        <input type="hidden" id="outside_end_time" name="outside_end_time" value="<?php
            $now = new Datetime("now");
            $date = $now->format("YmdHis");
            echo $date; ?>"/>

        <p class="text-center">
            <button type="submit" class="btn btn-malformation btn-outline-success">
                TOTONOTTA
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
    <script>
        function limit(){
        alert('理想の時間を超えました');
        }

        let st =
        Math.floor((50000 + 5000 )/(37 - ((37- <?php echo $sauna->sauna_temperature; ?>) / ( 1.25 - 0.0014 * <?php echo $sauna->sauna_humidity; ?> )) -0.29 * <?php echo $sauna->sauna_temperature  ?>* ( 1 - ( <?php echo $sauna->sauna_humidity ?>/ 100 ) )))

        function hoge() {
            for (let i = 0; i <= st ; i++) {
            // result.textContentはdocument.getElementById('result');を省略
            setTimeout(() => { result.textContent = ( st - i); }, i * 1000);
            }
        }

        window.onload = () => { hoge(); };
        window.setTimeout(limit, st *1000);
    </script>
@stop
