@extends('layouts.app')


@section('title')
     listado proyectos
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/estyle.css') }}"/>

@endsection


@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Project | healthy home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="wrap-top-menu">
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <nav class="top-menu">
                            <ul id="main-menu" class="nav nav-horizontal clearfix">
                            <li class="active"><a href="{{ url('/') }}"></a></li>
                            <li class="sep"></li>




        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>



         <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block w-100" src="/img/OSS0530_gadget2Pnt.jpg" alt="Third slide">
           </div>
         </div>



            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        </header>

                    <div class="bottom-project-info clearfix">
                        <div class="project-progress sys_circle_progress" data-percent="87">
                            <div class="sys_holder_sector"></div>
                        </div>
                    </div>
                </div>
                <div class="project-tab-detail">
                    <ul class="nav nav-tabs clearfix">

                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Breve Reseña</h3>
                            <div class="tab-pane active accordion-content">
                                <div class="editor-content">
                                    <h3 class="rs title-inside">Planta inteligente</h3>
                                    <p class="rs post-by">Hecho por<a href="#" class="fw-b fc-gray be-fc-orange">Bray aragon</a> en <span class="fw-b fc-gray">Cordoba, CAP</span></p>
                                    <p>Nam sit amet est sapien, a faucibus purus. Sed commodo massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipisontes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, eget, arcu.</p>
                                    <p>
                                        <img class="img-desc" src="img/OSS0609_gadgetPlant.jpg" alt=""/>
                                        <span class="img-label">Conoce mi proyecto</span>
                                    </p>
                                    <p>Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                                </div>


                                <div class="project-btn-action">
                                    <button type="button" class="btn btn-success">Quiero aportar</button>
                                    <button type="button" class="btn btn-success">Ver mas detalles</button>

                                </div>
                            </div><!--end: -->
                        </div>
                        <div>

                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="list-last-post">
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="http://via.placeholder.com/350" alt="$TITLE">
                                            </a>
                                    </div>
                                </div>
                            </div><!--end:-->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Patrocinadores (30)</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="http://via.placeholder.com/350" alt="$USER_NAME"/>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">Best project</a></h4>
                                                <p class="rs">Argentina, BA</p>
                                                <p class="rs fc-gray">5 projects</p>
                                            </div>
                                        </div>
                                    </div><!--end: .project-author -->


                                </div>
                                <div class="project-btn-action">
                                    <button type="button" class="btn btn-success">Quiero aportar</button>
                                    <button type="button" class="btn btn-success">Ver mas detalles</button>
                                </div>
                            </div><!--end: -->
                        </div>

                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->


    </div>


    <footer id="footer">
        <div class="container_12 main-footer">
            <div class="grid_3 about-us">
                <h3 class="rs title">Breve Reseña</h3>
                <p class="rs description">Donec rutrum elit ac arcu bibendum rhoncus in vitae turpis. Quisque fermentum gravida eros non faucibus. Curabitur fermentum, arcu sed cursus commodo.</p>
                <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@mecenazgo.com">info@mecenazgo.com</a></p>
                <p class="rs">+54 (011 4456-4355</p>
            </div>


                </div>
            </div>
            <div class="clear clear-2col"></div>
            <div class="grid_3 email-newsletter">
                <h3 class="rs title">Recibi nuestras notificaciones</h3>
                <div class="inner">
                    <p class="rs description">Nam aliquet, velit quis consequat interdum, odio dolor elementum.</p>
                    <form action="#">
                        <div class="form form-email">
                            <label class="lbl" for="txt-email">
                                <input id="txt-email" type="text" class="txt fill-width" placeholder="Enter your e-mail address"/>
                            </label>
                            <button class="btn btn-Success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid_3">
                <h3 class="rs title">Discover &amp; Create</h3>
                <div class="footer-menu">
                    <ul class="rs">
                        <li><a class="be-fc-orange" href="#">Crea tu proyecto</a></li>

                    </ul>
                    <ul class="rs">
                        <li><a class="be-fc-orange" href="#">Populares</a></li>
                        <li><a class="be-fc-orange" href="#">Recientes</a></li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="copyright">
            <div class="container_12">
                <div class="grid_12">
                    <a class="logo-footer"><img src="img/logo.png" alt=""/></a>
                    <p class="rs term-privacy">
                        <a class="fw-b be-fc-orange" href="#">Terms & Conditions</a>
                        <span class="sep">/</span>
                        <a class="fw-b be-fc-orange" href="#">Privacy Policy</a>
                        <span class="sep">/</span>
                        <a class="fw-b be-fc-orange" href="#">FAQ</a>
                    </p>

                </div>

            </div>
        </div>
    </footer><!--end: #footer -->
</div>

@endsection

</body>
</html>
