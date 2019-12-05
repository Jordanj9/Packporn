<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PackPorn</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_inicio.css')}}">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('{{asset('img/packporn/women_tanned_ass_back_water_wet_body_wet_hair_blonde-1213897.jpg')}}');">
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
                <li><a href="">Iniciar Sesiòn</a></li>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{route('contenido')}}">Contenido</a></li>
                <li><a href="{{route('galeria')}}">Galeria</a></li>
                <li><a href="{{route('preguntas')}}">Preguntas</a></li>
            </ul>
        </nav>
    </div>
</header>


<main class="contenido">
    <div class="contenedor">
        <section class="inicio">
            <h2>BUSCAS CONTENIDO EXCLUSIVO</h2>
            <p>Tenemos esos servicios que tanto te gustan, los más ardientes y sensuales del mercado. Esté es el sitio
                perfecto para que disfrutes,Suscríbete con nosotros y te haremos llegar todos esos contenidos de chicas
                y/o chiscos que deseas por un buen precio.</p>
            <a href="" class="btn-suscribirse">Suscríbirse</a>
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


<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
