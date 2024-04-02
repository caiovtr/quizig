@extends('layout')
@section('content')
    <div class ="jumbotron">
        <p class ="h1 text-center py-4"> QUIZ MC IG </p>
    </div>
    <div class ="container py-4">
        <div class ="row">
            <div class ="col-md-6">
                <img src ="{{asset('storage/imagem/mcig.jpeg')}}"/>
            </div>
            <div class ="col-md-6">
                <a href ="/iniciar" class =" btn btn-primary" role ="button">Começar</a>
            </div>
        </div>
    </div>
@endsection