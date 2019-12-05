<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PackPorn</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_contenido.css')}}">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
</head>
<body style=" background-image: url('{{asset('img/packporn/women_ass_black_lingerie_black_panties_hands_on_ass_bricks-270413.jpg')}}');">
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
                    <li><a href="">Suscribirse</a></li>
                </ul>
            </nav>
           <nav class="menu">
               <ul>
                   <li>
                       @if($location == 'login')
                           <a href="{{route('login')}}" class="activo">Iniciar Sesiòn</a>
                       @else
                           <a href="{{route('login')}}">Iniciar Sesiòn</a>
                       @endif
                   </li>
                   <li>
                       @if($location == 'inicio')
                           <a href="{{route('inicio')}}" class="activo">Inicio</a>
                       @else
                           <a href="{{route('inicio')}}">Inicio</a>
                       @endif
                   </li>
                   <li>
                       @if($location == 'contenido')
                           <a href="{{route('contenido')}}" class="activo">Contenido</a>
                       @else
                           <a href="{{route('contenido')}}">Contenido</a>
                       @endif
                   </li>
                   <li>
                       @if($location == 'galeria')
                           <a href="{{route('galeria')}}" class="activo">Galeria</a>
                       @else
                           <a href="{{route('galeria')}}">Galeria</a>
                       @endif
                   </li>
                   <li>
                       @if($location == 'preguntas')
                           <a href="{{route('preguntas')}}" class="activo">Preguntas</a>
                       @else
                           <a href="{{route('preguntas')}}">Preguntas</a>
                       @endif
                   </li>
               </ul>
           </nav>
       </div>
   </header>

   <main class="contenido">
       <div class="contenedor">
           <section>
                <div class="informacion">
                        <div class="imagen">
                            <a href=""><i class="fas fa-film"></i></a>
                        </div>
                        <h2>Videos</h2>
                        <p>Aquí encontraras los mejores
                                y mas candentes videos porno, nuestro personal esta esperando grabar tu escena, <br>
                                No se pone mas jugoso que esto,
                                Esperamos por ti,podras tener el expectaculo que desees.</p>
                    </div>
                    <div class="informacion">
                        <div class="imagen">
                            <a href=""><i class="fas fa-images"></i></a>
                        </div>
                        <h2>Imagenes</h2>
                        <p>Te gustan las imágenes,
                                ven por los mejores paquetes
                                de fotografías mas ardientes
                                y mas seductoras del genero
                                de tu preferencia.</p>
                    </div>
                    <div class="informacion">
                        <div class="imagen">
                            <a href=""><i class="fas fa-music"></i></a>
                        </div>
                        <h2>Audios</h2>
                        <p>Te interesa escuchar
                                conversaciones calientes,
                                historias con gemidos.
                                Aquí encontraras los audios mas
                                calientes y sensuales de la
                                red.</p>
                    </div>
           </section>
       </div>
   </main>

   <footer>
       <div class="contenedor">
            <div class="idioma">
                    <select name="idioma" id="idioma">
                        <option value="">IDIOMA</option>
                        <option value="es">Español</option>
                        <option value="en">English</option>
                        <option value="it">Italiano</option>
                    </select>
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
                <a href="" class="btn-contactanos"></i>Contáctanos aquí  <a href="tel:+3217064377" style="margin-left: 10px;"><i class="fas fa-phone-volume"></i> 3217064377</a></a>
            </div>
       </div>
   </footer>


   <script src="{{asset('js/menu.js')}}"></script>
   <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
