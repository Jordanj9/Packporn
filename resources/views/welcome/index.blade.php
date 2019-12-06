<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PackPorn</title>
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_inicio.css')}}">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen_v1.7.0/chosen.css')}}"/>
    <link href="{{asset('plugins/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
</head>
<body
    style="background-image: url('{{asset('img/packporn/women_tanned_ass_back_water_wet_body_wet_hair_blonde-1213897.jpg')}}');">
<header>
    <div class="contenedor">
        <h1 class="logo"><strong>P</strong>ack<span><strong>P</strong>orn</span></h1>
        <div class="idioma">
            <form action="">
                <select name="idioma" id="idioma">
                    <option value="">IDIOMA</option>
                    <option value="es">Español</option>
                    <option value="en">English</option>
                    <option value="it">Italiano</option>
                </select>
            </form>
        </div>
        <label for="" id="menu"><i class="fas fa-bars"></i></label>
        <nav class="menu-desktop">
            <ul>
                <li><a href="{{route('login')}}">Iniciar Sesiòn</a></li>
            </ul>
        </nav>
        <nav class="menu">
            <ul>
                <li>
                    @if($location=='inicio')
                        <a href="{{route('inicio')}}" class="activo">Inicio</a>
                    @else
                        <a href="{{route('inicio')}}">Inicio</a>
                    @endif
                </li>

                <li>
                    @if($location=='contenido')
                        <a href="{{route('contenido')}}" class="activo">Contenido</a>
                    @else
                        <a href="{{route('contenido')}}">Contenido</a>
                    @endif
                </li>
                <li>
                    @if($location=='galeria')
                        <a href="{{route('galeria')}}" class="activo">Galeria</a>
                    @else
                        <a href="{{route('galeria')}}">Galeria</a>
                    @endif
                </li>
                <li>
                    @if($location=='preguntas')
                        <a href="{{route('preguntas')}}" class="activo">Preguntas más <br> frecuntes</a>>
                    @else
                        <a href="{{route('preguntas')}}">Preguntas más <br> frecuntes</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="content">
    @include('flash::message')
</section>
<main class="contenido">
    <div class="contenedor">
        <section class="inicio">
            <h2>BUSCAS CONTENIDO EXCLUSIVO</h2>
            <p>Tenemos esos servicios que tanto te gustan, los más ardientes y sensuales del mercado. Esté es el sitio
                perfecto para que disfrutes,Suscríbete con nosotros y te haremos llegar todos esos contenidos de chicas
                y/o chiscos que deseas por un buen precio.</p>
            <a data-toggle="modal" data-target="#modal-default" style="cursor: pointer;" class="btn-suscribirse">Suscríbirse</a>
        </section>
    </div>
</main>
<footer>
    <div class="contenedor">
        <div class="idioma">
            <form action="">
                <select name="idioma" id="idioma">
                    <option value="">IDIOMA</option>
                    <option value="es">Español</option>
                    <option value="en">English</option>
                    <option value="it">Italiano</option>
                </select>
            </form>
        </div>
        <nav class="slider">
            <ul>
                <li>
                    @if($location=='inicio')
                        <a href="{{route('inicio')}}" class="activo">Inicio</a>
                    @else
                        <a href="{{route('inicio')}}">Inicio</a>
                    @endif
                </li>

                <li>
                    @if($location=='contenido')
                        <a href="{{route('contenido')}}" class="activo">Contenido</a>
                    @else
                        <a href="{{route('contenido')}}">Contenido</a>
                    @endif
                </li>
                <li>
                    @if($location=='galeria')
                        <a href="{{route('galeria')}}" class="activo">Galeria</a>
                    @else
                        <a href="{{route('galeria')}}">Galeria</a>
                    @endif
                </li>
                <li>
                    @if($location=='preguntas')
                        <a href="{{route('preguntas')}}" class="activo">Preguntas más <br> frecuntes</a>>
                    @else
                        <a href="{{route('preguntas')}}">Preguntas más <br> frecuntes</a>
                    @endif
                </li>
            </ul>
        </nav>
        <div class="contactanos">
            <p>¿Quieres trabajar con nosotros?</p>
            <a href="" class="btn-contactanos"></i>Contáctanos aquí <a href="tel:+3217064377"><i
                        class="fas fa-phone-volume"></i> 3217064377</a></a>
        </div>
    </div>
</footer>
<div class="modal" tabindex="-1" id="modal-default" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content"
             style="background-image: url('{{asset('img/packporn/women_tanned_ass_back_water_wet_body_wet_hair_blonde-1213897.jpg')}}');">
            <div class="modal-header">
                <h5 class="modal-title">Suscríbirse</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form id="formulario" method="POST" action="{{route('solicitud.store2')}}">
                        @csrf
                        <div class="form-group">
                            <label for="alias">Alias</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                   placeholder="usuario" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control select2" id="sexo" name="sexo" style="width: 100%;"
                                    tabindex="-1"
                                    aria-hidden="true" required="required">
                                <option value="">--selecciones una opción--</option>
                                <option value="M">HOMBRE</option>
                                <option value="F">MUJER</option>
                                <option value="P">PREFERIO NO DECIR</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipopack">Tipo Pack</label>
                            <select class="form-control select2" name="tipopack" id="tipopack" style="width: 100%;"
                                    tabindex="-1" aria-hidden="true" required="required">
                                <option value="">--selecciones una opción--</option>
                                <option value="AUDIO">AUDIO</option>
                                <option value="VIDEO">VIDEO</option>
                                <option value="IMAGENES">IMAGENES</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="preferencias">Preferencias</label>
                            <select class="form-control select2" id="preferencias" name="preferencia"
                                    style="width: 100%;"
                                    tabindex="-1" aria-hidden="true">
                                <option value="">--selecciones una opción--</option>
                                <option value="MADURAS">MADURAS</option>
                                <option value="MUJERES">MUJERES</option>
                                <option value="LEBIANAS">LESBIANAS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subpreferencias">Sub-Preferencias</label>
                            <select class="form-control select2" id="subpreferencias" name="subpreferencia"
                                    style="width: 100%;"
                                    tabindex="-1" aria-hidden="true">
                                <option value="">--selecciones una opción--</option>
                                <option value="HOMBRES">HOMBRES</option>
                                <option value="MUJERES">MUJERES</option>
                                <option value="LEBIANAS">LESBIANAS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pais">Pais</label>
                            <select class="form-control select2" id="pais" name="pais_id"
                                    style="width: 100%;"
                                    tabindex="-1" aria-hidden="true" required="required">
                                <option>--selecciones una opción--</option>
                                @foreach($paises as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary">Limpiar</button>
                        <button type="button" class="btn btn-danger" id="guardar" onclick="guardar()">Guardar</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<script src="{{ asset('plugins/pnotify/dist/pnotify.js')}}"></script>
<script src="{{ asset('plugins/pnotify/dist/pnotify.buttons.js')}}"></script>
<script src="{{ asset('plugins/pnotify/dist/pnotify.nonblock.js')}}"></script>
<script type="javascript">
    $(document).ready(function () {
        $("#sexo").select2();
        $("#tipopack").select2();
        $("#preferencias").select2();
        $("#subpreferencias").select2();
        $("#pais").select2();
    });

    function notify(title, text, type) {
        new PNotify({
            title: title,
            text: text,
            type: type,
            styling: 'bootstrap3'
        });
    }

    function limpiar() {
        var alias = $("#alias").val("").trigger('change');
        var email = $("#email").val("").trigger('change');
        var sexo = $("#sexo").val("").trigger('change');
        var tipo = $("#tipopack").val("").trigger('change');
        var prefe = $("#preferencias").val("").trigger('change');
        var sub = $("#subpreferencias").val("").trigger('change');
        var pais = $("#pais").val("").trigger('change');
    }

    function guardar() {
        var $request = $("#formulario").serialize();
        var alias = $("#alias").val();
        var email = $("#email").val();
        var sexo = $("#sexo").val();
        var tipo = $("#tipopack").val();
        var prefe = $("#preferencias").val();
        var sub = $("#subpreferencias").val();
        var pais = $("#pais").val();
        if (alias.length <= 0 || email.length <= 0 || sexo.length <= 0 || tipo.length <= 0 || pais.length <= 0) {
            notify('Alerta', 'Debe indicar todos los parámetros para continuar', 'warning');
            return;
        }
        $.post(
            '{{url('solicitud/nueva/publico/crear/')}}', $request
        ).done(function (msg) {
            if (msg.status == "ok") {
                notify('Atención!', msg.response, 'success');
                limpiar();
            } else {
                notify('Error!', '<h1>Ha surgido un problema</h1><br><p>Error interno. inténtelo otra vez más tarde.</p>', 'danger');
            }
        });
    }
</script>
</body>
</html>
