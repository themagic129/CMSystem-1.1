@section('plugins.DatatablesPlugin', true)


@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h4>Customer's List</h4>
@stop

@section('content')
  
<div class="container">

<div class="row">
   
    <div class="col-6"><x-adminlte-info-box title="{{$count}}" text="Registered Customers" icon="fas fa-lg fa-user-plus text-primary"
    theme="gradient-primary" icon-theme="white"/></div>

    <div class="col-6">
    <x-adminlte-info-box title="Views" text="{{$count_active}}" icon="fas fa-lg fa-eye text-dark" theme="gradient-teal"/>
    </div>
    

<div class="card col-12">
    <div class="card-header">  
    <a href="{{route('customers.create')}}" class="btn btn-primary">Add New Customer</a>
       
    
    </div>
    <div class="card-body">
        
        <table class="table table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Document ID</th>
                <th scope="col-4">Address</th>
                <th scope="col-4">Phone</th>
                <th scope="col-4">Status</th>
                <th scope="col-4">Edit</th>
                <th scope="col-4">Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
              @foreach($customer as $custome)
               
               <td>{{$custome->id}}</td>
               <td>{{$custome->nombre}}</td>
               <td>{{$custome->apellido}}</td>
               <td>{{$custome->cedula}}</td>
               <td>{{$custome->direccion}}</td>
               <td>{{$custome->telefono}}</td>
               <td>{{$custome->status}}</td>             
               
                <td>
                    <a href="#" class="btn btn-success col-12">Edit</a>                                
                </td>
                <td>
                    <a href="#" class="btn btn-danger col-12">Delete</a>                    
                </td>             
              </tr>
              @endforeach
                       
           

            </tbody>
          </table>


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