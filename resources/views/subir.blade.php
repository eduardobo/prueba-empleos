@extends('welcome')

@section('seccion')
    <h1 class="teal-text">Subir Foto</h1>
    <div>
        <div class="row">
            <div class="col s12 m6">
            <div class="card darken-1">
                <div class="card-content">
                    
                    <form action="{{route('fotos.guardar')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <!-- name -->
                        <div class="row">
                            <div class="input-field col l12">
                            <input id="name" name="name" type="text" class="validate" required="" aria-required="true">
                            <label class="active" for="name">Nombre*</label>
                            </div>
                        </div>

                        <!-- path -->
                            
                            <div class="file-field input-field">
                            <label class="active" >Archivo*</label>
                                <div class="btn">
                                    <span>File</span>
                                    <input name="path" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input id="path" class="file-path validate" type="text">
                                </div>
                            </div>
                        <!-- Descripcion -->
                        <div class="row">
                        <label for="description">Descripcion*</label>
                            <div class="input-field col s12">
                                <textarea id="description" name="description" rows="10" cols="120" required="" aria-required="true"></textarea>
                            </div>
                        </div>

                        <!-- button save -->
                        <div class="right-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                            <i class="material-icons left">save</i>
                        </button>
                        </div>
                    </form>
                <div class="card-action">
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection