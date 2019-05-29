@extends('inicio/app')
@section('content')
	<!-- SECCION DE ACUERDO CALIENTE -->
		<div id="hot-deal" class="section">
			<!-- envase -->
			<div class="container">
				<!-- fila -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Dias</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Minutos</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Segundos</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">OFERTA CALIENTE ESTA SEMANA</h2>
							<p>Nueva coleccion hasta el 50% de descuento</p>
							<a class="primary-btn cta-btn" href="{{asset('estilos')}}/#">Compra ahora</a>
						</div>
					</div>
				</div>
				<!-- /fila -->
			</div>
			<!-- /envase -->
		</div>
		<!-- SECCION DE ACUERDO CALIENTE -->

		<!-- SECCION -->
		<div class="section">
			<!-- envase -->
			<div class="container">
				<!-- fila -->
				<div class="row">
					<!-- tienda -->
					<div class="col-md-3 col-xs-4">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('estilos')}}/./img/prod1.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Chocapic<br>Cereales Nestlé</h3>
								<a href="{{asset('estilos')}}/#" class="cta-btn">COMPRA Y AHORRA <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /tienda -->

					<!-- tienda -->
					<div class="col-md-3 col-xs-4">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('estilos')}}/./img/prod3.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Fideo<br> La Estrella</h3>
								<a href="{{asset('estilos')}}/#" class="cta-btn">COMPRA Y AHORA <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /tienda -->

					<!-- tienda -->
					<div class="col-md-3 col-xs-4">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('estilos')}}/./img/prod4.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Azucar<br>Guabira Extra Fina 2kg</h3>
								<a href="{{asset('estilos')}}/#" class="cta-btn">COMPRA Y AHORRA  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /tienda -->
					<!-- tienda -->
					<div class="col-md-3 col-xs-4">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('estilos')}}/./img/prod5.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Arroz<br>Urupe 1kg</h3>
								<a href="{{asset('estilos')}}/#" class="cta-btn">COMPRA Y AHORRA  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /tienda -->
				</div>
				<!-- /fila -->
			</div>
			<!-- /envase -->
		</div>
		<!-- /SECCION -->

		<!-- SECCION -->
		<div class="section">
			<!-- envase -->
			<div class="container">
				<!-- fila -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">NUEVOS PRODUCTOS</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="{{asset('estilos')}}/#tab1"><h5>ABARROTES</h5></a></li>
									<li><a data-toggle="tab" href="{{asset('estilos')}}/#tab1"><h5>CARNE Y<br> PESCADO</h5></a></li>
									<li><a data-toggle="tab" href="{{asset('estilos')}}/#tab1"><h5>CHOCOLATES<br>GOLOSINAS</h5></a></li>
									<li><a data-toggle="tab" href="{{asset('estilos')}}/#tab1"><h5>BEBIDAS LICORES<br>Y TABACO</h5></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /seccion titulo -->

					<!-- Fichas de productos y mancha -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- lengüeta -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- producto -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('estilos')}}/./img/prod2.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">Aceite</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">ABAROTES</p>
												<h3 class="product-name"><a href="{{asset('estilos')}}/#">ACEITE CARBONELL VIRGEN EXTRA FRASCO<BR> 250ML</a></h3>
												<h4 class="product-price">35,90 BS <del class="product-old-price">45.50 BS</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">añadir a comprar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir a la cesta</button>
											</div>
										</div>
										<!-- /producto -->

										<!-- producto -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('estilos')}}/./img/carne1.jpg" alt="">
												<div class="product-label">
													<span class="new">NUEVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CARNE Y PESCADO</p>
												<h3 class="product-name"><a href="{{asset('estilos')}}/#">Chuleta de Cerdo STEGE <br>Aprox. 1kg</a></h3>
												<h4 class="product-price">60.00 BS <del class="product-old-price">$65.50 BS</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">añadir a comprar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir a la cesta</button>
											</div>
										</div>
										<!-- /producto -->

										<!-- producto -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('estilos')}}/./img/golosina1.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">CHOCOLATES Y GOLOSINAS</p>
												<h3 class="product-name"><a href="{{asset('estilos')}}/#">CHOCOLATE BON O BON SURTIDO<br>272gr</a></h3>
												<h4 class="product-price">32,10 BS <del class="product-old-price">40.000 BS</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">añadir a comprar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir a la cesta</button>
											</div>
										</div>
										<!-- /producto -->

										<!-- producto -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('estilos')}}/./img/bebida1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">BEBIDAS LICORES Y TABACO</p>
												<h3 class="product-name"><a href="{{asset('estilos')}}/#">AGUA MINERAGUA LIMON <br>2LT</a></h3>
												<h4 class="product-price">8,30 BS <del class="product-old-price">9,50 BS</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">añadir a comprar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir a la cesta</button>
											</div>
										</div>
										<!-- /producto -->

										<!-- producto -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('estilos')}}/./img/cerveza1.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">BEBIDAS LICORES Y TABACO</p>
												<h3 class="product-name"><a href="{{asset('estilos')}}/#">MALTA SIN ALCOHOL MALTIN<br>350 ML</a></h3>
												<h4 class="product-price">4.50 BS <del class="product-old-price">5.00 BS</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">añadir a comprar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rapida</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> añadir a la cesta</button>
											</div>
										</div>
										<!-- /producto -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /lengúeta -->
							</div>
						</div>
					</div>
					<!-- Fichas de productos y mancha -->
				</div>
				<!-- /fila -->
			</div>
			<!-- /envase -->
		</div>
		<!-- /SECCION -->
@endsection
	
