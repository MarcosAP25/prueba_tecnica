@extends('Layouts.app')

@section('title','Direcciones')

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
                <h3 class="col align-self-start">Direcciones</h3>
                
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Crear una nueva dirección</div>
                        <div class="card-body">
                            <form action="/direcciones" class="form-group" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Id. de dirección</label>
                                        <input type="text" class="form-control" placeholder="Principal" name="adressID">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nombre de usuario</label>
                                        <input type="text" class="form-control" placeholder="LuisM25" name="userName">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Calle</label>
                                        <input type="text" class="form-control" placeholder="C/ Duarte #42" name="street">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Suite</label>
                                        <input type="text" class="form-control" placeholder="602E" name="suite">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" placeholder="Santo Domingo" name="city">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Código postal</label>
                                        <input type="text" class="form-control" placeholder="11501" name="zipcode">
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
                <div class="col-sm-8">
                    <div class="card border-primary mb-3" style="max-height: 578px;">
                        <div class="card-header">Listado de direcciones</div>
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
                                    @foreach($adress as $ad)
                                        <tr>
                                            <th scope="row">{{$ad->adressID}}</th>
                                            <td>{{$ad->street}}</td>
                                            <td>{{$ad->suite}}</td>
                                            <td>{{$ad->city}}</td>
                                            <td>{{$ad->zipcode}}</td>
                                            <td>{{$ad->customerID}}</td>
                                            <td>
                                                <div class="text-center">
                                                    <form action="/direcciones/{{$ad->id}}" class="formgroup" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger"><span class="icon-trashcan"></button>
                                                    </form>  
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </div>
@endsection