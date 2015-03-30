@extends('master')

@section('content')
<div class="btn-group-vertical" role="group" aria-label="..." width="600">
    <div class="page-header">
        CATEGORIEN
        </div>
    @foreach($categorien as $categorie)
         <div class="btn-group" role="group">
                <a href="{{$categorie->id}}" class="btn btn-default" role="button">{{$categorie->naam}}</a>
        </div>
    @endforeach


</div>
@stop