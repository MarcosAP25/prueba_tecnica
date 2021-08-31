@extends('Layouts.app')

@section('title', 'Crear clientes')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <h3 class="col align-self-start">Clientes</h3>
                <a href="/getcustomers" class="col-sm-2 align-self-end btn btn-outline-dark me-3">Importar clientes de la API</a>
            </div>
        </div>
       <div class="card-body">
       <div class="">
                <div class="card border-primary mb-3" > 
                    <div class="card-header">Registro de clientes</div>
                    <div class="card-body">
                        <form action="/clientes" class="form-group" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                <h6 class="card-subtitle text-muted">Datos personales</h6>
                                <hr>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Luis Martinez" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nombre de usuario</label>
                                        <input type="text" class="form-control" placeholder="LuisM25" name="userName">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Correo electrónico</label>
                                        <input type="text" class="form-control" placeholder="nombre@ejemplo.com" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" placeholder="000-000-0000" name="cell">
                                    </div> 
                                    <div class="form-group">
                                        <label for="" class="form-label">Sitio web</label>
                                        <input type="text" class="form-control" placeholder="https://web-ejemplo.com" name="webSite">
                                    </div>
                                </div>
                                <div class="col ms-4">
                                    <h6 class="card-subtitle text-muted">Dirección principal</h6>
                                    <hr>
                                    <div class="form-group">
                                        <label for="" class="form-label">Id. de dirección</label>
                                        <input type="text" class="form-control" placeholder="Principal" name="adressId">
                                    </div> <div class="form-group">
                                        <label for="" class="form-label">Calle</label>
                                        <input type="text" class="form-control" placeholder="C/ Duarte #42" name="street">
                                    </div> <div class="form-group">
                                        <label for="" class="form-label">Suite</label>
                                        <input type="text" class="form-control" placeholder="602E" name="suite">
                                    </div> <div class="form-group">
                                        <label for="" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" placeholder="Santo Domingo" name="city">
                                    </div> <div class="form-group">
                                        <label for="" class="form-label">Código postal</label>
                                        <input type="text" class="form-control" placeholder="11501" name="zipcode">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <!--Company Data-->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
   </div>
@endsection