@extends('layouts.panel')

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title"> Usuarios Registrados</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>

   
      <tr>
          <th>Hobbies</th>
        <th>Nombre</th>
        <th>Nombre Usuario</th>
        <th> City</th>
        <th>Fecha Registro</th>
        <th>editar/vista completa</th>

      </tr>

     

      </thead>
      <tbody>
       @foreach($users as $user)
      <tr>
          <td> 
            <a class="btn btn-xs btn-primary" href="{{route('hobby.showadmin', $user->id)}}"><i class="fa fa-eye"></i> ver</a>
          </td>
        <td> {{$user->name}}</td>
        <td> {{$user->nick}}</td>
        <td> {{$user->city}}</td>
        <td> {{$user->created_at}}</td>
        <td> <a class="btn btn-success btn-xs" href="{{route('usuarios.editar',$user->id)}}"> editar </a>
          
        </td>
      </tr>

      @endforeach
     
      </tbody>
     
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</div>





@endsection