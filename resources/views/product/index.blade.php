@extends('master')

@section('content')
    <h1>Product Categorien</h1>
    <hr>
    @foreach($categorien as $categorie)
    <li><a href="product/{{$categorie->id}}">{{$categorie->omschrijving}}</a></li>
    @endforeach
    @stop