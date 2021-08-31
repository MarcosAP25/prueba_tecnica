@extends('Layouts.app')

@section('title','Cliente')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="text-center">
                <h2>{{$customer->name}}</h2>
                <h4 class="text-muted">{{$customer->userName}}</h4>
            </div>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">Actualizar la información del cliente</h6>
            <hr>
            <form action="/clientes/{{$customer->userName}}" class="form-group" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                
                    <div class="col-sm-4">                   
                        <div class="form-group">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" value="{{$customer->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <label for="" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="readOnlyInput" value="{{$customer->userName}}" name="userName" readonly="">
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" value="{{$customer->email}}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" value="{{$customer->cell}}" name="cell">
                        </div> 
                        <div class="form-group">
                            <label for="" class="form-label">Sitio web</label>
                            <input type="text" class="form-control" value="{{$customer->webSite}}" name="webSite">
                        </div>
                    </div>
                    <div class="col ms-4">                   
                        <div class="form-group">
                            <fieldset>
                                <label for="" class="form-label">Id. de dirección</label>
                                <input type="text" class="form-control" id="readOnlyInput" value="{{$customer->adressId}}" name="adressId" readonly="">
                            </fieldset>
                        </div> <div class="form-group">
                            <label for="" class="form-label">Calle</label>
                            <input type="text" class="form-control" value="{{$customer->street}}" name="street">
                        </div> <div class="form-group">
                            <label for="" class="form-label">Suite</label>
                            <input type="text" class="form-control" value="{{$customer->suite}}" name="suite">
                        </div> <div class="form-group">
                            <label for="" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" value="{{$customer->city}}" name="city">
                        </div> <div class="form-group">
                            <label for="" class="form-label">Código postal</label>
                            <input type="text" class="form-control" value="{{$customer->zipcode}}" name="zipcode">
                        </div>
                    </div>
                
                </div>
                <hr>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-outline-primary">Actualizar</button>
                </div>
            </form>
            <form action="/clientes/{{$customer->userName}}" class="form-group mt-3" method="POST">
                @method('DELETE')
                @csrf          
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-lg btn-outline-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="text-center">
                <h3>Direcciones del cliente</h3>
            </div>
        </div>
        <div class="card-body" style="overflow: scroll;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id. de dirección</th>
                        <th scope="col">Calle</th>
                        <th scope="col">Suite</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Código postal</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col"><div class="text-center">Acciones</div></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adresses as $ad)
                        <tr>
                            <th scope="row">{{$ad->adressID}}</th>
                            <td>{{$ad->street}}</td>
                            <td>{{$ad->suite}}</td>
                            <td>{{$ad->city}}</td>
                            <td>{{$ad->zipcode}}</td>
                            <td>{{$ad->customerID}}</td>
                            <td>
                                <div class="text-center">
                                    <a class="btn btn-outline-danger"><span class="icon-trashcan"></span></a>   
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection