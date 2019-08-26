
@extends('layouts.panel')

@section('content')

<div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Editar usuario</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('usuarios.update')}}">

                {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name"  name="name" value="{{$user->name}}" placeholder="ingrese nombres">
              </div>
              <div class="form-group">
                <label for="nick">nick name</label>
                <input type="text" class="form-control" id="nick" name="nick" value="{{$user->nick}}" placeholder="ingrese su nick">
              </div>

              <div class="form-group">
                    <label for="city">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city"  value="{{$user->city }}" placeholder="ingrese su nick">
                  </div>


                  <div class="form-group">
                        <label for="city">email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}"placeholder="ingrese su nick">
                      </div>

                      <div class="form-group">
                            <label for="pasword">Password</label>
                            <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                          </div>



                          <div class="form-group">
                                <label for="pasword"> confirmar Password</label>
                                <input type="password" class="form-control" id="password_confirmation"  placeholder="Password">
                              </div>

                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                              <div class="form-group">
                                    <label for="pasword"></label>
                              <input type="hidden" class="form-control"  name="id" value="{{$user->id}}"  placeholder="Password">
                                  </div>



                 
             
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">enviar</button>
            </div>
          </form>
        </div>


        @endsection