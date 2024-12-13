@extends('layouts.main')
@section('title','Produto')
@section('content')
<h1>
    Welcome
</h1>
@if($nome == 'Pedro')
<p>Seu nome é Pedro</p>
@elseif($nome == 'Matheus')
<p>Seu nome é {{$nome}}, você tem {{$idade}} anos e trabalha como {{$profissao}}</p>
@else
<p>Seu nome não é Pedro</p>
@endif

<a href="/contact">Contact</a><br>
<a href="/product">Product</a>
@endsection