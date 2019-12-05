<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PackPorn</title>
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_preguntas.css')}}">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
</head>
<body style="background: url('{{asset('img/packporn/5d1d6d27d71bb6114d86d54073bb-1622331.jpg')}}');background-position:center;object-fit: cover;">
   <header>
       <div class="contenedor" style="margin-top: 20px;">
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
                    <li><a href="">Iniciar Sesiòn</a></li>
                    <li><a href="">Suscribirse</a></li>
                </ul>
            </nav>
           <nav class="menu">
               <ul>
                   <li><a href="">Iniciar Sesiòn</a></li>
                   <li><a href="index.blade.php">Inicio</a></li>
                   <li><a href="contenido.blade.php">Contenido</a></li>
                   <li><a href="galeria.blade.php">Galeria</a></li>
                   <li><a href="">Preguntas</a></li>
               </ul>
           </nav>
       </div>
   </header>

   <main class="contenido">
       <div class="contenedor">
           <section>
                <h2>PREGUNTAS MÁS FRECUENTES</h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Qué es PackPorn?
                          </button>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Es seguro y discreto?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Qué consigo?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
                        </div>
                      </div>
                    </div>
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
                    <a href="" class="btn-contactanos"></i>Contáctanos aquí <a href="tel:+3217064377"><i class="fas fa-phone-volume"></i> 3217064377</a></a>
            </div>
       </div>
   </footer>
   <script src="{{asset('js/plugins/jquery.min.js')}}"></script>
   <script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/menu.js')}}"></script>
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
