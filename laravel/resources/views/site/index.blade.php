@extends('layouts.site.app')


@section('content')
    
    <!-- Intro Section -->
    <section class="intro intro-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 intro-info wow fadeIn">
                    <div class="intro-info-content">
                        <h1>Descubra!  </h1>
<p> A melhor forma de saber mais sobre cada etapa da sua obra. </p>
                        <ul class="list-unstyled">
                            <li><a href="">Como Funciona</a></li>
                            <li><a href="">Download</a></li>
                        </ul>
                    </div>
                </div><!-- Ends: .intro-info -->
                
                <div class="col-md-5 col-sm-5 intro-image wow fadeIn">
                    <div class="intro-image-content">
                        <img src="/site/images/app-screen-bw2.png" alt="" class="img-responsive">
                    </div>
                </div><!-- Ends: .intro-image -->
            </div>
        </div>
    </section><!-- Ends: .intro -->
    
    <!-- Services -->
    <section class="services service-style2" id="services">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Serviços</h2>
               </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.1s">
                        <div class="icon"><i class="fa fa-heart-o"></i></div>
                        <h3>Fornecedores</h3>
                        <p>Texto aqui</p>
                        <a href="">Leia Mais</a>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon"><i class="fa fa-eye"></i></div>
                        <h3>Conheça cada Etapa da obra</h3>
                       <p>Texto aqui</p>
                        <a href="">Leia Mais</a>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.5s">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h3>Projetos</h3>
                        <p>Texto aqui</p>
                        <a href="">Leia Mais</a>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.7s">
                        <div class="icon"><i class="fa fa-object-group"></i></div>
                        <h3>Facil de usar</h3>
                       <p>Texto aqui</p>
                        <a href="">Leia Mais</a>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
        </div>
    </section><!-- Ends: .services -->
    
    <!-- About App -->
    <section class="about-app about-app2">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="app-image wow fadeInUp" data-wow-delay="0.2s">
                        <img src="/site/images/app-screen-bw.png" alt="" class="img-responsive">
                    </div>
                </div><!-- Ends: .col-sm-5 -->
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="app-info wow fadeIn">
<h2>Você está em uma ferramenta digital
    <span>Construa Contatos</span> </h2>
                        <ul class="list-unstyled">
                            <li>Funcionalidade 1</li>
                            <li>Funcionalidade 2</li>
                            <li>Funcionalidade 3</li>
                            <li>Funcionalidade 4</li>
                            <li>Funcionalidade 5</li>
                        </ul>
                    </div>
                </div><!-- Ends: .col-sm-7 -->
            </div>
        </div>
    </section><!-- Ends: .about-app -->
    
    <!-- App Features -->
    <section class="app-features" id="features">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Funcionalidades</h2>
               </div>
                <div class="col-md-4 col-sm-12">
                    <div class="features-left wow fadeInLeft">
                        <div class="feature-single">
                            <div class="feature-info">
                                <h3>Funcionalidade</h3>
                                <p>Texto aqui</p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-slack"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-info">
<h3>Funcionalidade 2</h3>
                                <p>Texto aqui</p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-battery"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-info">
<h3>Funcionalidade 3</h3>
                                <p>Texto aqui</p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-bug"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-info">
<h3>Funcionalidade 4</h3>
                                <p>Texto aqui</p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-bar-chart"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                    </div>
                </div><!-- Ends: .col-sm-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="feature-image wow fadeInUp">
                        <img src="/site/images/intro-image.png" alt="" class="img-responsive">
                    </div>
                </div><!-- Ends: .col-sm-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="features-right wow fadeInRight">
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-object-group"></i></span>
                            </div>
                            <div class="feature-info">
<h3>Funcionalidade 5</h3>
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-magic"></i></span>
                            </div>
                            <div class="feature-info">
<h3>Funcionalidade</h3>
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-share-alt"></i></span>
                            </div>
                            <div class="feature-info">
<h3>Funcionalidade</h3>
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-cogs"></i></span>
                            </div>
                            <div class="feature-info">
<h3>Funcionalidade</h3>
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                    </div>
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .app-features -->
    
    <!-- Video -->
    <section class="video-featured">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow bounceIn" data-wow-delay="0.2s">
                    <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" class="video-btn">
                        <span><i class="fa fa-play"></i></span>
                        <span>Assista o Vídeo</span>
                    </a>
                </div><!-- Ends: .col-sm-12 -->
            </div>
        </div>
    </section><!-- Ends: .video -->
    
    <!-- Screenshots -->
    <section class="screenshots" id="screenshots">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Telas do App </h2>
               </div>
                <div class="col-md-8 col-sm-7">
                    <div class="screenshot-gallery owl-carousel wow fadeInLeft">
                        
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print08.jpg" alt="" class="img-resoponsive">
                                <figcaption>
                                    <a href="/site/images/print08.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print02.jpg" alt="" class="img-resoponsive">
                                <figcaption>
                                    <a href="/site/images/print02.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print05.jpg" alt="" class="img-respoonsive">
                                <figcaption>
                                    <a href="/site/images/print05.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>



                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print01.jpg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print01.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print09.jpg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print09.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print10.jpg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print10.jpg"></a>
                                </figcaption>
                            </figure>
                        </div>
<!--

                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print/print06.jpeg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print/print06.jpeg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print/print09.jpeg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print/print09.jpeg"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="screenshot-single">
                            <figure>
                                <img src="/site/images/print/print07.jpeg" alt="" class="img-roesponsive">
                                <figcaption>
                                    <a href="/site/images/print/print07.jpeg"></a>
                                </figcaption>
                            </figure>
                        </div> -->

                    </div>
                </div><!-- Ends: .col-sm-8 -->
                <div class="col-md-4 col-sm-5">
                    <div class="gallery-info wow fadeInRight">
                        <h3>Explore Mais</h3>
                        <p>Texto aqui</p>
                        <p>Texto aqui</p>
                        <a href="/#download-app">Baixar Agora!</a>
                    </div>
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .screenshots -->
    
    <!-- Counters -->
    <section class="counters">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="counter-box">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <span class="counter-init">1434</span>
                        <h3>Cliente Felizes</h3>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="counter-box">
                        <div class="icon"><i class="fa fa-object-group"></i></div>
                        <span class="counter-init">1003</span>
                        <h3>Dowloads</h3>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="counter-box">
                        <div class="icon"><i class="fa fa-cloud-download"></i></div>
                        <span class="counter-init">917</span>
                        <h3>Artigos</h3>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-sm-3">
                    <div class="counter-box">
                        <div class="icon"><i class="fa fa-coffee"></i></div>
                        <span class="counter-init">2654</span>
                        <h3>Obras</h3>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
        </div>
    </section><!-- Ends: .counters -->
    
    {{-- <!-- Price Table -->
    <section class="price-table price-table2" id="price-table">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Planos</h2>
               </div>
                <div class="col-md-3 col-sm-6">
                    <div class="price-table-wrapper wow fadeIn" data-wow-delay="0.1s">
                        <div class="price-header">
                            <h3>Standard</h3>
                            <span class="price">R$299</span>
                            <span>Mês</span>
                        </div>
                        <div class="price-content">
                            <ul class="list-unstyled">
                                <li>Free Form to Signup</li>
                                <li>Premium Forum Support</li>
                                <li>Unlimited Access to Store</li>
                                <li class="ablock">Access to Premium Content</li>
                                <li class="ablock">Limitless Storage Utility</li>
                                <li class="ablock">24/7 Effective Live Support</li>
                                <li>Free Future Updates &amp; Fix</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="">Comprar Agora</a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="price-table-wrapper wow fadeIn" data-wow-delay="0.3s">
                        <div class="price-header">
                            <h3>Premium</h3>
                            <span class="price">R$399</span>
                            <span>Mês</span>
                        </div>
                        <div class="price-content">
                            <ul class="list-unstyled">
                                <li>Free Form to Signup</li>
                                <li>Premium Forum Support</li>
                                <li>Unlimited Access to Store</li>
                                <li class="ablock">Access to Premium Content</li>
                                <li class="ablock">Limitless Storage Utility</li>
                                <li class="ablock">24/7 Effective Live Support</li>
                                <li>Free Future Updates &amp; Fix</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="">Comprar Agora</a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="price-table-wrapper price-table-featured wow fadeIn" data-wow-delay="0.5s">
                        <div class="price-header">
                            <h3>Enterprize</h3>
                            <span class="price">R$599</span>
                            <span>Mês</span>
                        </div>
                        <div class="price-content">
                            <ul class="list-unstyled">
                                <li>Free Form to Signup</li>
                                <li>Premium Forum Support</li>
                                <li>Unlimited Access to Store</li>
                                <li>Access to Premium Content</li>
                                <li class="ablock">Limitless Storage Utility</li>
                                <li class="ablock">24/7 Effective Live Support</li>
                                <li>Free Future Updates &amp; Fix</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="">Comprar Agora</a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="price-table-wrapper wow fadeIn" data-wow-delay="0.7s">
                        <div class="price-header">
                            <h3>Ultimate</h3>
                            <span class="price">R$699</span>
                            <span>Mês</span>
                        </div>
                        <div class="price-content">
                            <ul class="list-unstyled">
                                <li>Free Form to Signup</li>
                                <li>Premium Forum Support</li>
                                <li>Unlimited Access to Store</li>
                                <li>Access to Premium Content</li>
                                <li>Limitless Storage Utility</li>
                                <li>24/7 Effective Live Support</li>
                                <li>Free Future Updates &amp; Fix</li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="">Comprar Agora</a>
                        </div>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
        </div>
    </section><!-- Ends: .price-table --> --}}
    
    <!-- Testimonial -->
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Cliente Felizes</h2>
               </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="testimonial-slider owl-carousel wow fadeInUp">
                        <div class="slide-single">
                            <div class="client-info">
                                <ul class="list-unstyled">
                                    <li class="client-image">
                                        <img src="/site/images/client.png" alt="">
                                    </li>
                                    <li class="client-name">
                                        <h3>Jonathon Smith</h3>
                                        <h4>Senior Developer</h4>
                                        <span>Google Inc</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="client-text">
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .slide-single -->
                        <div class="slide-single">
                            <div class="client-info">
                                <ul class="list-unstyled">
                                    <li class="client-image">
                                        <img src="/site/images/client.png" alt="">
                                    </li>
                                    <li class="client-name">
                                        <h3>Jonathon Smith</h3>
                                        <h4>Senior Developer</h4>
                                        <span>Google Inc</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="client-text">
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .slide-single -->
                        <div class="slide-single">
                            <div class="client-info">
                                <ul class="list-unstyled">
                                    <li class="client-image">
                                        <img src="/site/images/client.png" alt="">
                                    </li>
                                    <li class="client-name">
                                        <h3>Jonathon Smith</h3>
                                        <h4>Senior Developer</h4>
                                        <span>Google Inc</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="client-text">
                                <p>Texto aqui</p>
                            </div>
                        </div><!-- Ends: .slide-single -->
                    </div><!-- Ends: .testimonial-slider -->
                </div>
            </div>
        </div>
    </section><!-- Ends: .testimonial -->
    
    {{-- <!-- Team -->
    <section class="team">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Nosso Time</h2>
               </div>
                <div class="col-sm-12">
                    <div class="team-carousel owl-carousel wow fadeInUp">
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team03.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team02.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team01.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team04.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team03.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team02.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team01.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team04.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                        <div class="team-single">
                            <figure>
                                <img src="/site/images/team03.jpg" alt="" class="img-responsive">
                                <figcaption>
                                    <div>
                                        <h3>Henry Kevil</h3>
                                        <span>Lead Developer</span>
                                        <ul class="list-unstyled">
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div><!-- Ends: .team-single -->
                    </div><!-- Ends: .team-carousel -->
                </div><!-- Ends: .col-sm-12 -->
            </div>
        </div>
    </section><!-- Ends: .team --> --}}

     <!-- Blog -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header">
                   <h2>Nosso Blog</h2>
                </div>
                @foreach($blog as $row)
	                <div class="col-sm-4">
	                    <div class="blog-single wow fadeIn" data-wow-delay="0.1s">
	                        <figure>
	                            <img src="/uploads/conteudos/{{ $row->image }}" alt="" class="img-responsive" style="width:100%;height:200px;">
	                            <figcaption>
	                                <ul class="list-unstyled post-meta clearfix">
	                                    <li>23 Fev, 2018 - por Marcio</li>
	                                    <li><a href="">Projeto</a></li>
	                                </ul>
	                                <h3>{{ $row->title }}</h3>
	                                <p>{{ $row->content }}</p>
	                                <ul class="list-unstyled post-bottom">
	                                    <li><a href="/construcao/{{ $row->slug_title }}">Leia Mais</a></li>
	                                    <li>#{{ $row->section }} #{{ $row->category }}</li>
	                                </ul>
	                            </figcaption>
	                        </figure>
	                    </div>
	                </div><!-- Ends: .col-sm-4 -->
                @endforeach
                <div class="col-sm-12">
                    <div class="blog-btn wow bounceIn" data-wow-delay="0.3s">
                        <a href="">Ir para Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Ends: .blog -->
    
    <!-- Download App -->
    <section class="download-app" id="download-app">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <h2>Baixe Agora</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, sed, error! Neque veniam veritatis necessitatibus non optio expedita ipsa incidunt. Laborum, ad, ea. Dolore, quo.</p>
                    <ul class="list-unstyled">
                        <li><a href=""><img src="/site/images/playstore.png" alt=""></a></li>
                        <li><a href=""><img src="/site/images/istore.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Ends: .download-app -->
    
    <!-- Change Log -->
    <section class="change-log">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header">
                   <h2>Histórico do App</h2>
                </div>
                <div class="col-sm-12">
                    <div class="changelog-timeline wow fadeInUp" data-wow-delay="0.2s">
                        <div class="timeline-single">
                            <div class="content-left">
                                <h3>Preparação do conteúdo</h3>
                                <p>Texto aqui.</p>
                            </div>
                            <div class="content-right timeline-date">
                                <span>Feb 24, 2017</span>
                            </div>
                            <div class="icon"><i class="fa fa-heart"></i></div>
                        </div><!-- Ends: .timeline-single -->
                        <div class="timeline-single">
                            <div class="content-left timeline-date">
                                <span>Jan 14, 2017</span>
                            </div>
                            <div class="content-right">
                                <h3>Planejamento do app</h3>
                                <p>Texto aqui.</p>
                            </div>
                            <div class="icon"><i class="fa fa-heart"></i></div>
                        </div><!-- Ends: .timeline-single -->
                        <div class="timeline-single">
                            <div class="content-left">
                                <h3>Lançamento da Versão 1.0</h3>
                                <p>Texto aqui.</p>
                            </div>
                            <div class="content-right timeline-date">
                                <span>Julho 08, 2018</span>
                            </div>
                            <div class="icon"><i class="fa fa-heart"></i></div>
                        </div><!-- Ends: .timeline-single -->
                    
                    </div><!-- Ends: .changelog-timeline -->
                </div><!-- Ends: .col-sm-12 -->
            </div>
        </div>
    </section><!-- Ends: .change-log -->
    
    <!-- FAQ -->
    <section class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header">
                   <h2>FAQ's</h2>
                </div>
                <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
                            <h3>Se eu baixar tem algum custo? </h3>
                            <p>Texto aqui</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
                            <h3>Como cadastro minha empresa ou escritório?</h3>
                            <p>Texto aqui.</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
<h3>Como cadastro minha empresa ou escritório?</h3>
                            <p>Texto aqui.</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                </div><!-- Ends: .col-sm-6 -->
                <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
<h3>Como cadastro minha empresa ou escritório?</h3>
                            <p>Texto aqui.</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
<h3>Como cadastro minha empresa ou escritório?</h3>
                            <p>Texto aqui.</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                    <div class="faq-single">
                        <div class="faq-icon">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                        <div class="faq-content">
<h3>Como cadastro minha empresa ou escritório?</h3>
                            <p>Texto aqui.</p>
                        </div>
                    </div><!-- Ends: .faq-single -->
                </div><!-- Ends: .col-sm-6 -->
            </div>
        </div>
    </section><!-- Ends: .faqs -->
    
    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
<h3>Assine a nossa newsletter para obter as últimas atualizações </h3>
                    <form action="/#">
                        <input type="text" placeholder="E-mail" required>
<button type="submit">Assine</button>
                    </form>
                </div><!-- Ends: .col-sm-12 -->
            </div>
        </div>
    </section><!-- Ends: .newsletter -->
    
    <!-- Cliets Logo -->
    <section class="clients-logo">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.1s"><img src="/site/images/client01.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.2s"><img src="/site/images/client02.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.3s"><img src="/site/images/client03.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.4s"><img src="/site/images/client04.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.5s"><img src="/site/images/client01.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-2 col-xs-6 wow fadeInLeft" data-wow-delay="0.6s"><img src="/site/images/client02.jpg" alt="" class="img-responsive"></div>
            </div>
        </div>
    </section><!-- Ends: .clients-logo -->
    
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Contato</h2>
               </div>
                <div class="col-md-8 col-sm-7">
                    <div class="contact-wrapper wow fadeInLeft" data-wow-delay="0.1s">
                        <form id="ajax-contact" method="post" action="send.php.html">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit">Enviar Mensagem</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div><!-- Ends: .col-sm-8 -->
                <div class="col-md-4 col-sm-5">
                    <div class="contact-details wow fadeInRight" data-wow-delay="0.3s">
                <h3>Entrar em contato</h3>
                        <p>Texto aqui.</p>
                        <ul class="list-unstyled contact-info-list">
                            <li><i class="fa fa-phone"></i> Tel.: +55 (45)99456- 9789</li>
<li>
    <i class="fa fa-envelope"></i> Email: contato@construacontatos.com.br</a>
</li>
                            <li><i class="fa fa-globe"></i> Web: www.construacontatos.com.br</li>
                        </ul>
                        <ul class="list-unstyled contact-social">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .contact -->

@endsection