@extends('welcome')

@section('seccion')
    <h1 class="teal-text">Galeria de fotos</h1>
    @foreach($fotos as $foto)
        <div class="row">
            <div class="col s12 m7">
            <div class="card">
                <div class="card-image">
                <img src="storage/public/pics/{{$foto->path}}">
                <span class="card-title">{{$foto->name}}</span>
                </div>
                <div class="card-content">
                <p>{{$foto->description}}</p>
                </div>
                <div class="card-action">
                <a class="waves-effect waves-light btn" type="input"><i class="material-icons left">save</i></a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection