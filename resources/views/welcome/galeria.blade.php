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
    <link rel="stylesheet" href="{{asset('css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_galeria.css')}}">
    <script src="https://kit.fontawesome.com/33bf1ad68d.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('{{asset('img/packporn/women_black_lingerie_ass_black_stockings_back_hands_on_ass_painted_nails_in_bed-279929.jpg')}}');">

   <header>
       <div class="contenedor">
           <h1 class="logo"><strong>P</strong>ack<span><strong>P</strong>orn</span></h1>
           <div class="idioma">
                <select name="idioma" id="idioma">
                    <option value="">IDIOMA</option>
                    <option value="es">Español</option>
                    <option value="en">English</option>
                    <option value="it">Italiano</option>
                </select>
            </div>
           <label for="" id="menu"><i class="fas fa-bars"></i></label>
           <nav class="menu-desktop">
                <ul>
                    <li><a href="{{route('login')}}">Iniciar Sesiòn</a></li>
                    <li><a data-toggle="modal" data-target="#modal-default" style="color: white; cursor: pointer;">Suscribirse</a></li>
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

   <main class="contenido">
       <div class="contenedor">
           <section>
                <h2>CONTENIDO EXCLUSIVO</h2>
                <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide"><img src="img/modelo1.jpg" alt=""></div>
                          <div class="swiper-slide"><img src="img/gif-porno-adictas-haciendo-mamadas-1.gif" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/modelo2.jpg" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/gif-porno-culos-adictos-follando-6.gif" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/modelo3.jpg" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/gif-porno-culos-adictos-penetradas-anales-2.gif" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/modelo2.jpg" alt=""></div>
                          <div class="swiper-slide swiper-slide-active" ><img src="img/gif-porno-culos-adictos-penetradas-anales-4.gif" alt=""></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                          <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
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
   <div class="modal" tabindex="-1" id="modal-default" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Suscríbirse</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="col-md-12">
                       <form method="POST" action="{{route('solicitud.store2')}}">
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
                               <select class="form-control select2" id="select2" name="sexo" style="width: 100%;"
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
                               <select class="form-control select2" name="tipopack" id="select2" style="width: 100%;"
                                       tabindex="-1" aria-hidden="true" required="required">
                                   <option value="">--selecciones una opción--</option>
                                   <option value="AUDIO">AUDIO</option>
                                   <option value="VIDEO">VIDEO</option>
                                   <option value="IMAGENES">IMAGENES</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="preferencias">Preferencias</label>
                               <select class="form-control select2" id="select2" name="preferencia"
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
                               <select class="form-control select2" id="select2" name="subpreferencia"
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
                               <select class="form-control select2" id="select2" name="pais_id"
                                       style="width: 100%;"
                                       tabindex="-1" aria-hidden="true" required="required">
                                   <option>--selecciones una opción--</option>
                                   @foreach($paises as $key=>$value)
                                       <option value="{{$key}}">{{$value}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <button type="reset" class="btn btn-secondary">Limpiar</button>
                           <button type="submit" class="btn btn-danger">Guardar</button>
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
   <script src="{{asset('js/plugins/swiper.js')}}"></script>
   <script>
        var swiper = new Swiper('.swiper-container', {
          loop: true,
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
          },
          pagination: {
            el: '.swiper-pagination',
          },

           // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        });
      </script>
</body>
</html>
