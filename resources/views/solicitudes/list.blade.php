@extends('layouts.admin')
@section('breadcrumb')
    <h1>
        Solicitudes
        <small>Gestion de solicitudes</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active"><a><i class="fa fa-users"></i> Solicitudes</a></li>
    </ol>
@endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Listado de Solicitudes</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Minimizar">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Cerrar">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr class="danger">
                        <th>Alias</th>
                        <th>Email</th>
                        <th>Tipo Pack</th>
                        <th>Sexo</th>
                        <th>Preferencias</th>
                        <th>Subpreferencias</th>
                        <th>Pais</th>
                        <th>Estado</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($solicitudes as $t)
                        <tr>
                            <td>{{$t->alias}}</td>
                            <td>{{$t->email}}</td>
                            <td>{{$t->tipopack}}</td>
                            <td>@if($t->sexo=='M') <label class="label label-primary">MASCULINO</label> @else <label
                                    class="label label-info">FEMENINO</label> @endif</td>
                            <td>{{$t->preferencia}}</td>
                            <td>{{$t->subpreferencia}}</td>
                            <td>{{$t->pais->nombre}}</td>
                            <td>{{$t->estado}}</td>
                            <td>{{$t->created_at}}</td>
                            <td>
                                <a onclick="ir(this.id)" id="{{$t->id}}" data-toggle="modal"
                                   data-target="#modal-default" style="color: blue; margin-left: 10px;cursor: pointer;"><i
                                        class="fa fa-lock"></i></a>
                                <a href="{{route('solicitud.delete',$t->id)}}" style="color: red; margin-left: 10px;"><i
                                        class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cambiar Estado</h4>
                </div>
                <div class="modal-body">
                    <form class="form-control">
                        @csrf
                        <input type="hidden" name="id" id="id"/>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label class="col-md-2 control-label">Nueva Contraseña</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="password" required="required" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-success icon-btn pull-right" type="submit"><i
                                    class="fa fa-fw fa-lg fa-save"></i>Cambiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
@section('script')
    <script type="text/javascript">
        $(function () {
            $('#tabla').DataTable();
        });

        function ir(id) {
            $("#id").val(id);
        }
    </script>
@endsection
