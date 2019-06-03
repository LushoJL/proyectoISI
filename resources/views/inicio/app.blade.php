<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title> MICRO EMPRESA "MACOBA"</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('estilos')}}/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('estilos')}}/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="{{asset('estilos')}}/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('estilos')}}/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('estilos')}}/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('estilos')}}/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="{{asset('estilos')}}/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="{{asset('estilos')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->

		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="{{asset('estilos')}}/#"><i class="fa fa-phone"></i> +591 71904667</a></li>
						<li><a href="{{asset('estilos')}}/#"><i class="fa fa-envelope-o"></i> elizapayllo@gmail.com</a></li>
						<li><a href="{{asset('estilos')}}/#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="{{asset('estilos')}}/#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="{{asset('estilos')}}/#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{asset('estilos')}}/#" class="logo">
									<img src="{{asset('estilos')}}/./img/eli.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="{{asset('estilos')}}/#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('estilos')}}/./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="{{asset('estilos')}}/#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('estilos')}}/./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="{{asset('estilos')}}/#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="{{asset('estilos')}}/#">View Cart</a>
											<a href="{{asset('estilos')}}/#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="{{asset('estilos')}}/#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<!-- Example single danger button -->
					<ul class="main-nav nav navbar-nav">
						
						
						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    Abarote
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
						  
						   <li><a href="">Aceite y Vinagre</a></li>
						   <li><a href="">Arroz y Granos</a></li>
						   <li><a href="">Azúcar</a></li>
						   <li><a href="">Cereales y Avena</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    Carne y Pescado
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
			
						   <li><a href="">Cerdo</a></li>
						   <li><a href="">Aves</a></li>
						   <li><a href="">Res</a></li>
						   <li><a href="">lPescados</a></li>
						  </ul>
						</li>
						

						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    Frescos
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">

						   <li><a href="{{route('refrescos.leches')}}">LECHES LIQUIDAS</a></li>
						   <li><a href="">Crema de leche</a></li>
						   <li><a href="">Fiambres y embutidos</a></li>
						   <li><a href="">Frutas y verduras</a></li>
						  </ul>
						</li>


						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    congelado
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">

						   <li><a href="">Carnes y Pollo</a></li>
						   <li><a href="">Frutas y verduras</a></li>
						   <li><a href="">Helados</a></li>
						   <li><a href="">Hielo</a></li>
						  </ul>
						</li>


						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    Chocolate y golosina
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
						   <li><a href="">Chocolate</a></li>
						   <li><a href="">Golosina</a></li>
						   
						  </ul>
						</li>


						<li class="dropdown">

						  <a id="dLabel" data-target="#" href="http://example.com/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						    Panaderia Pasteleria
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" aria-labelledby="dLabel">
				
						   <li><a href="">Masas y Tortillas</a></li>
						   <li><a href="">Pan embolsado</a></li>
						   <li><a href="">Pastelería</a></li>
						   <li><a href="">Pan fresco</a></li>
						  </ul>
						</li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		@yield('content')

	

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">ACERCA DE NOSOTROS</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="{{asset('estilos')}}/#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="{{asset('estilos')}}/#"><i class="fa fa-phone"></i>+591 71904667</a></li>
									<li><a href="{{asset('estilos')}}/#"><i class="fa fa-envelope-o"></i>micromarket@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">PRODUCTOS</h3>
								<ul class="footer-links">
									<li><a href="{{asset('estilos')}}/#">ABARROTES</a></li>
									<li><a href="{{asset('estilos')}}/#">CARNE Y PESCADO</a></li>
									<li><a href="{{asset('estilos')}}/#">CHOCOLATES Y GOLOSINAS</a></li>
									<li><a href="{{asset('estilos')}}/#">BEBIDAS LICORES Y TABACO</a></li>
									<li><a href="{{asset('estilos')}}/#">CUIDADO PESONAL</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">NUESTROS SERVICIOS</h3>
								<ul class="footer-links">
									<li><a href="{{asset('estilos')}}/#">ZONA DE COBERTURA MINIMARKET</a></li>
									<li><a href="{{asset('estilos')}}/#">CONTACTENOS</a></li>
									
									<li><a href="{{asset('estilos')}}/#">PREGUNTAS FRECUENTES</a></li>
									<li><a href="{{asset('estilos')}}/#">PEDIDOS Y DEVOLUCIONES</a></li>

									<li><a href="{{asset('estilos')}}/#">TERMINOS Y CONDICIONES</a></li>

																	</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">SERVICIO</h3>
								<ul class="footer-links">
									<li><a href="{{asset('estilos')}}/#">MY CUENTA</a></li>
									<li><a href="{{asset('estilos')}}/#">VER CARRITO</a></li>
									<li><a href="{{asset('estilos')}}/#">LISTA DE DESEOS</a></li>
									<li><a href="{{asset('estilos')}}/#">RASTREAR MI ORDEN</a></li>
									<li><a href="{{asset('estilos')}}/#">AYUDA</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="{{asset('estilos')}}/#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{asset('estilos')}}/https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('estilos')}}/js/jquery.min.js"></script>
		<script src="{{asset('estilos')}}/js/bootstrap.min.js"></script>
		<script src="{{asset('estilos')}}/js/slick.min.js"></script>
		<script src="{{asset('estilos')}}/js/nouislider.min.js"></script>
		<script src="{{asset('estilos')}}/js/jquery.zoom.min.js"></script>
		<script src="{{asset('estilos')}}/js/main.js"></script>

	</body>
</html>

