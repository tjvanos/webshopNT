@extends('master')

@section('content')
<div class="btn-group-vertical" role="group" aria-label="..." width="600">
    <div class="page-header">
        CATEGORIEN
        </div>
    @foreach($categorien as $categorie)
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">{{$categorie->naam}}</button>
        </div>
    @endforeach


</div>
@stop