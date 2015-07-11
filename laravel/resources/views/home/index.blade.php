@extends('templates.template')
    @section('content')
        <h1>Blob do José</h1>

        <table class"table table-striped">
            <tr>
                    <td>Posts</td>
            </tr>

        @foreach($titulos as $titulo => $post)
                <tr>
                <td>{{$titulo}}</td>
                </tr>
                <tr>
                <td>{{$post}}</td>
                </tr>
        @endforeach

    @stop