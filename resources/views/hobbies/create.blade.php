@extends('layouts.panel')

@section('content')



@if (session()->has('flash'))
<div class="alert alert-success"> {{session('flash')}}</div>
@endif

<div class="col-md-6 col-md-offset-3">
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Agrega Tus Hobbies </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
<form role="form" method="POST" action="{{route('hobby.store')}}">
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Hobbie</label>
          <input type="text" class="form-control" id="hobby" name="hobby" placeholder="ingresa tu hobby" required>
        </div>
    
      
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

</div>


  @stop