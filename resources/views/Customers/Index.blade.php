@extends("Layouts.app")

@section("title","Clientes")

@section("content")

    <div class="row">
        @foreach($customers as $customer)
           <div class="col-sm-4 mb-3">
            <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><span class="icon-profile"></span> {{$customer->name}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{$customer->userName}}</h6>
                        <p class="card-text">Calle {{$customer->street}} Suite {{$customer->suite}}</p>
                        <a href="/clientes/{{$customer->userName}}" class="btn btn-outline-primary">Ver más...</a>
                    </div>
                </div>
           </div>
        @endforeach
       
        
    </div>

@endsection