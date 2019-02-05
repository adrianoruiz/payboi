 <!-- Header -->
    <header id="home">
        @if(!isset($navHome))<!--  Caso não esteja na home adiciona navBar padrão -->
            <div  class="sticky-wrapper is-sticky" style="height: 80px;">
        @endif
            <nav class="navbar navbar-default" id="main-nav">
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-12">
    					    <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-morki">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/#">
                            <img src="/site/images/logo.png" alt=""  style="width: 100px"> </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-morki">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="/#home" data-scroll>Home</a></li>
                                    <li><a href="/#services" data-scroll>Serviços</a></li>
                                    <li><a href="/#features" data-scroll>Funcionalidades</a></li>
                                    <li><a href="/#screenshots" data-scroll>Telas</a></li>
                                    {{-- <li><a href="/#price-table" data-scroll>Planos</a></li> --}}
                                    <li><a href="/#testimonial" data-scroll>Testemunhos</a></li>
                                    <li><a href="/#blog" data-scroll>Blog</a></li>
                                    <li><a href="/#contact" data-scroll>Contato</a></li>
                                    <li class="nav-download-btn"><a href="/#download-app" data-scroll>Download</a></li>
                                </ul>
                            </div><!-- .navbar-collapse -->
    					</div>
    				</div>
    			</div>
    		</nav>
        @if(!isset($navHome))<!--  Caso não esteja na home adiciona navBar padrão -->
            </div>
        @endif
    </header><!-- Ends: header -->