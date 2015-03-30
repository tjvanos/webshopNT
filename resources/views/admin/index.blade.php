@extends('master')

@section('content')
        <h1>I am the Master</h1>
        <div class="btn-group-vertical" role="group" aria-label="..." width="600">
            <div class="btn-group" role="group">
                <a href="editCategories" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> categorien aanpassen
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> producten aanpassen
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> gebruikers aanpassen
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="#" class="btn btn-default" role="button">
                    <span class="glyphicon glyphicon-road" aria-hidden="true"></span> orders aanpassen
                </a>
            </div>

        </div>

    @stop
