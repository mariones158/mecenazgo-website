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
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li class="sep"></li>


                        </ul>
                        <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                            <span class="line-bar"></span>
                        </a>

                    </nav>
                    <div class="top-message clearfix">
                        <i class="icon iFolder"></i>
                        <span class="txt-message">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>
                        <i class="icon iX"></i>
                        <div class="clear"></div>
                    </div>
                    <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>
                </div>
            </div>
        </div>
        <div class="container_12 clearfix">
            <div class="grid_12 header-content">
                <div id="sys_header_right" class="header-right">
                    <div class="account-panel">
                        <a href="#" class="btn btn-red sys_show_popup_login">Register</a>
                        <a href="#" class="btn btn-black sys_show_popup_login">Login</a>
                    </div>
                    <div class="form-search">
                        <form action="#">
                            <label for="sys_txt_keyword">
                                <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Search projects"/>
                            </label>
                            <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>
                            <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-left">
                    <h1 id="logo">
                        <a href="{{ route('login') }}"><img src="img/logo.png" alt=""/></a>
                    </h1>
                    <div class="main-nav clearfix">
                        <div class="nav-item">
                            <a href="#" class="nav-title">Discover</a>
                            <p class="rs nav-description">Great Projects</p>
                        </div>
                        <span class="sep"></span>
                        <div class="nav-item">
                            <a href="#" class="nav-title">Start</a>
                            <p class="rs nav-description">Your Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="layout-2cols">
        <div class="content grid_8">
            <div class="project-detail">
                <h2 class="rs project-title">LYK and Bear #1: No Food Deed Unpunished</h2>
                <p class="rs post-by">by <a href="#">Jonh Doe</a></p>
                <div class="project-short big-thumb">
                    <div class="top-project-info">
                        <div class="content-info-short clearfix">
                            <div class="thumb-img">
                                <div class="rslides_container">
                                  <ul class="rslides" id="slider1">
                                    <li><img src="http://via.placeholder.com/150" alt=""></li>
                                    <li><img src="http://via.placeholder.com/150" alt=""></li>
                                    <li><img src="http://via.placeholder.com/150" alt=""></li>



                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .top-project-info -->
                    <div class="bottom-project-info clearfix">
                        <div class="project-progress sys_circle_progress" data-percent="87">
                            <div class="sys_holder_sector"></div>
                        </div>
                        <div class="group-fee clearfix">
                            <div class="fee-item">
                                <p class="rs lbl">deposit</p>
                                <span class="val">270</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">donation</p>
                                <span class="val">$38,000</span>
                            </div>
                            <div class="sep"></div>
                            <div class="fee-item">
                                <p class="rs lbl">Days Left</p>
                                <span class="val">25</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="project-tab-detail tabbable accordion">
                    <ul class="nav nav-tabs clearfix">
                      <li class="active"><a href="#">About</a></li>
                      <li><a href="#" class="be-fc-orange">Updates (0)</a></li>
                      <li><a href="#" class="be-fc-orange">deposit (270)</a></li>

                    </ul>
                    <div class="tab-content">
                        <div>
                            <h3 class="rs alternate-tab accordion-label">About</h3>
                            <div class="tab-pane active accordion-content">
                                <div class="editor-content">
                                    <h3 class="rs title-inside">LYK and Bear #1: No Food Deed Unpunished</h3>
                                    <p class="rs post-by">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                    <p>Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>
                                        <img class="img-desc" src="img/OSS0609_gadgetPlant.jpg" alt=""/>
                                        <span class="img-label">Me and project friends on meeting</span>
                                    </p>
                                    <p>Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <div class="social-sharing">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                        </div>

                                        <!-- AddThis Button END -->
                                    </div>
                                </div>
                                <div class="project-btn-action">
                                    <a class="btn big btn-red" href="#">Ask a question</a>
                                    <a class="btn big btn-black" href="#">Report this project</a>
                                </div>
                            </div><!--end: .tab-pane(About) -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Updates (0)</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="list-last-post">
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="img/OSS0530_gadget2Pnt.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b">best project</a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10">posted 5 days ago</p>
                                                <p class="rs description">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="images/ex/th-90x90-2.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b">best project</a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10">posted 5 days ago</p>
                                                <p class="rs description">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="img/OSS0530_gadget2Pnt.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b">best project</a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10">posted 5 days ago</p>
                                                <p class="rs description">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="img/OSS0530_gadget2Pnt.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b">best project</a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10">posted 5 days ago</p>
                                                <p class="rs description">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                        <div class="media other-post-item">
                                            <a href="#" class="thumb-left">
                                                <img src="img/OSS0609_gadgetPlant.jpg" alt="$TITLE">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="rs title-other-post">
                                                    <a href="#" class="be-fc-orange fw-b">best project</a>
                                                </h4>
                                                <p class="rs fc-gray time-post pb10">posted 5 days ago</p>
                                                <p class="rs description">Nam nec sem ac risus congue varius. Maecenas interdum ipsum tempor ipsum fringilla eu vehicula urna vehicula.</p>
                                            </div>
                                        </div><!--end: .other-post-item -->
                                    </div>
                                </div>
                            </div><!--end: .tab-pane(Updates) -->
                        </div>
                        <div>
                            <h3 class="rs alternate-tab accordion-label">Backers (270)</h3>
                            <div class="tab-pane accordion-content">
                                <div class="tab-pane-inside">
                                    <div class="project-author pb20">
                                        <div class="media">
                                            <a href="#" class="thumb-left">
                                                <img src="img/OSS0530_gadget2Pnt.jpg" alt="$USER_NAME"/>
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
                                    <a class="btn btn-red" href="#">Ask a question</a>
                                    <a class="btn btn-black" href="#">Report this project</a>
                                </div>
                            </div><!--end: .tab-pane(Backers) -->
                        </div>

                      </div>
                </div><!--end: .project-tab-detail -->
            </div>
        </div><!--end: .content -->


    </div>
    <footer id="footer">
        <div class="container_12 main-footer">
            <div class="grid_3 about-us">
                <h3 class="rs title">About</h3>
                <p class="rs description">Donec rutrum elit ac arcu bibendum rhoncus in vitae turpis. Quisque fermentum gravida eros non faucibus. Curabitur fermentum, arcu sed cursus commodo.</p>
                <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@mecenazgo.com">info@mecenazgo</a></p>
                <p class="rs">+1 (555) 555 - 55 - 55</p>
            </div><!--end: .contact-info -->
            <div class="grid_3 recent-tweets">
                <h3 class="rs title">Recent Tweets</h3>
                <div class="lst-tweets" id="sys_lst_tweets">

                </div>
            </div><!--end: .recent-tweets -->
            <div class="clear clear-2col"></div>
            <div class="grid_3 email-newsletter">
                <h3 class="rs title">Newsletter Signup</h3>
                <div class="inner">
                    <p class="rs description">Nam aliquet, velit quis consequat interdum, odio dolor elementum.</p>
                    <form action="#">
                        <div class="form form-email">
                            <label class="lbl" for="txt-email">
                                <input id="txt-email" type="text" class="txt fill-width" placeholder="Enter your e-mail address"/>
                            </label>
                            <button class="btn btn-green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class="grid_3">
                <h3 class="rs title">Discover &amp; Create</h3>
                <div class="footer-menu">
                    <ul class="rs">

                        <li><a class="be-fc-orange" href="#">Start a project</a></li>
                        <li><a class="be-fc-orange" href="#">Project Guidlines</a></li>

                    </ul>
                    <ul class="rs">

                        <li><a class="be-fc-orange" href="#">Popular</a></li>
                        <li><a class="be-fc-orange" href="#">Recent</a></li>
                        <li><a class="be-fc-orange" href="#">Small Projects</a></li>
                        <li><a class="be-fc-orange" href="#">Most Funded</a></li>
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
