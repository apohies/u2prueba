@extends('layouts.panel')

@section('content')


@if (session()->has('flash'))
<div class="alert alert-success"> {{session('flash')}}</div>
@endif

<div class="box">
  <div class="box-header">
  <h3 class="box-title"> Hola  aqui estan los  Hobbies: </h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>

   
      <tr>
          <th>Hobbies</th>
          <th>editar</th>

       

      </tr>

     

      </thead>
      <tbody>
       @foreach($hobbies as $hobby)
      <tr>
         
        <td> {{$hobby->hobby}}</td>
        <td> 
            <a class="btn btn-xs btn-primary" href="{{route('hobby.edit',$hobby->id)}}"><i class="fa fa-pencil"></i> editar</a>
          </td>
    
          
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