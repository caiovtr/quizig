@extends('layout')
@section('content')
    <div class ="jumbotron">
        <p class ="h1 text-center py-4 "> Pergunta 4: </p>
    </div>
    <form action ="{{route('dadosPagina4') }}" method ="POST">
    @csrf
    <div class ="form-group py-4">
        <label for="pergunta"> <h3> <strong> No momento, aproximadamente quantos ouvintes mensais IG tem no spotify? </strong> </h3> </label>
            <div class ="form-check py-4">
                <input class ="form-check-input" type ="radio" name ="pergunta" id ="pergunta" value ="A">
                <label class ="form-check-label" for="pergunta">
                    <h5> 3 Milhões</h5>
                </label>
            </div>
            <div class ="form-check py-4">
                <input class ="form-check-input" type ="radio" name ="pergunta" id ="pergunta" value ="B">
                <label class ="form-check-label" for="pergunta">
                    <h5> 8 Milhões </h5>
                </label>
            </div>
            <div class ="form-check py-4">
                <input class ="form-check-input" type ="radio" name ="pergunta" id ="pergunta" value ="C">
                <label class ="form-check-label" for="pergunta">
                    <h5> 17 Milhões </h5>
                </label>
            </div>
            <div class ="form-check py-4">
                <input class ="form-check-input" type ="radio" name ="pergunta" id ="pergunta" value ="D">
                <label class ="form-check-label" for="pergunta">
                    <h5> 12 Milhões </h5>
                </label>
            </div>
            <button onclick="window.location.href = '/ ';" type ="button" class =" btn btn-danger btn-sm" > Desistir </button>
            <button type ="submit " class ="btn btn-primary btn-sm"> Próxima </button >
    </form>
@endsection