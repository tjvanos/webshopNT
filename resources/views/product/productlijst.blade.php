@extends('master')

@section('content')
    @foreach($producten as $product)

        <li><a href="#">{{$product->omschrijving_kort}}====={{$product->omschrijving_lang}}</a></li>
    @endforeach

@stop
