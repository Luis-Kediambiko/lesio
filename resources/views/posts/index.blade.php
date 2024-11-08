@extends('layouts.app')

@section('title', 'Lésio Events')


@section('content')

<h1>Seja Bem vindo ao Lésio Eventos!</h1>

{{-- @foreach ($arr as $desejo=>$tem)
  Tem {{ $desejo }} ? - {{  $tem }}  <br>
@endforeach --}}


{{-- @if(isset($arr['carro']))
    Tem carro? - {{ $arr['carro'] }} <br>
@endif

@for ($i = 0; $i < count($teste); $i++)
    <p>{{ $teste[$i] }} -> {{ $i }} </p>
    
@endfor --}}

{{-- @if ($coisa != null)

O meu número é : <p style="color: rgb(15, 15, 254)"> {{ $coisa }}</p>

@endif --}}

<img src="/img/logo.png" alt="" width="400">



@endsection