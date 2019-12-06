@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/logo.css') }}">
@endsection

@section('content')
    <div class="login-box">
        <div class="login-logo" style="margin-top: 60px;">
          <center><a href="{{route('inicio')}}"><h1 class="logo" style="color:black;"><strong>P</strong>ack<span><strong>P</strong>orn</span></h1></a></center>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 30px; opacity: 0.8">
            <p class="login-box-msg">Iniciar Sessión</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="number" class="form-control{{ $errors->has('identificacion') ? ' is-invalid' : '' }}" placeholder="Identificación" id="identificacion" name="identificacion" value="{{ old('identificacion') }}" required autofocus>
                    <span class="fa fa-credit-card form-control-feedback"></span>
                    @if ($errors->has('identificacion'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('identificacion') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <select id="rol" class="form-control{{ $errors->has('rol') ? ' is-invalid' : '' }}" name="rol" required placeholder="Rol">
                        <option value="NO">Seleccione rol</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    </select>
                    <span class="fa fa-user form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('rol') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-danger btn-raised btn-block btn-flat"> Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
