@section('plugins.DatatablesPlugin', true)


@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new Customer</h1>
@stop

@section('content')
  
<div class="container">

<div class="row">


<div class="card col-12 mt-4">
    <div class="card-header">
      Customer's information
    </div>
    <div class="card-body">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      
        <form method="POST" action="{{route('customers.store')}}">
   
         @csrf

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" name="nombre">             
                      </div>                    
            </div>

                
                <div class="col">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="apellido">             
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="documentid" class="form-label">Document ID</label>
                        <input type="text" class="form-control" placeholder="Document ID" id="documentid" name="cedula">             
                      </div>                    
            </div>

                
                <div class="col">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" id="telefono" name="telefono">             
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Av. Ms. Shallow #34" id="direccion" name="direccion">             
                      </div>                    
            </div>
            <div class="col">                 
                    
                <select class="form-control" style="margin-top: 32px" aria-label=".form-select-lg example" name="status">
                    <option selected disabled>Customer Status</option>
                    <option value="activo">Active</option>
                    <option value="inactivo">Inactive</option>                 
                  </select>        
                  
            </div>
                
              </div>

            <button type="submit" class="btn btn-primary col-12 mt-3">Submit Test</button>
            <a href="{{route('customers.index')}}" class="btn btn-danger col-12 mt-3">Cancel</a>
          </form>

    </div>
  </div>

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop