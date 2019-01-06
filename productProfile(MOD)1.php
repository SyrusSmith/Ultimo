<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/master1(MOD).css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
<!-- HEADER -->
<header>
        <!-- NAVBAR -->
        <div>
            <nav class="navbar navbar-expand-md navbar-dark" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="index.php">Dogo Shop</a>

                <div class="conteiner-flex1">
                    <div class="redes-top">
                        <div class="social-icon">
                            <a href="#">
                                <img src="img/social-fb.svg" alt="Facebook">
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <img src="img/twitter-01.svg" alt="Twitter">
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <img src="img/social-ig.svg" alt="Instagram">
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="#">
                                <img src="img/social-email.svg" alt="Email">
                            </a>
                        </div>
                    </div>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="productCategory(MOD)1.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#info">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#"><strong>Login</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="rigister.php"><strong>Registro</strong></a>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="product">
            <aside>
                <div class="sidenav">
                    <div class="logocorpoFooter">
                        <a href="/">
                            <img src="img/imagen_corporate/logospring.png">
                        </a>
                    </div> 
                    <a href="/productos/categoria/5">ALIMENTOS</a>
                    <a href="/productos/categoria/1">INDUMENTARIA</a>
                    <a href="/productos/categoria/6">CUIDADOS</a>
                    <a href="/productos/categoria/3">JUGUETES</a>
                    <a href="/productos/categoria/2">DECO-PET</a>
                    <a href="/productos/categoria/4">TECH</a>   
                </div>
            </aside>

            <main>
				<div class="product">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="current_page">
									<ul>
										<li>
											<a href="/productos">Productos</a>
										</li>
										<li>
											<a href="categories.html">Sub-Categoría</a>
										</li>
										<li>Nombre de Producto</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row product_row">

							<!-- Product Image -->
							<div class="col-lg-6">
								<div class="product_image">
									<div class="product_image_large">
										<!-- <img src="/storage/{{ $product->photopath }}" alt=""> -->
										<img src="img/productos/alimento1.png" alt="">
									</div>
								</div>
							</div>

							<!-- Product Content -->
							<div class="col-lg-6">
								<div class="product_content">
									<div class="product_name">Alimento para Mascotas</div>
									<div class="product_price">$350.00</div>
									<hr>
									<div class="in_stock_container">
										<div class="in_stock in_stock_true"></div>
										<span>in stock</span>
									</div>
									<hr>
									<div class="product_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula.</p>
									</div>
									<hr>
									<!-- Product Quantity -->
									<form class="card-form-product" action="/productos/{{ $product->id }}/agregar" method="post">
										<div class="product_quantity_container">
											<span>Cantidad</span>
											<div class="product_quantity">
												<input id="quantity_input" type="number" value="1" name="stock">
											</div>
										</div>
									<!-- Product Size -->
									<hr>
									<div class="product_size_container">
										<span>Size</span>
										<div class="product_size">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li>
													<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
													<label for="radio_1">XS</label>
												</li>
												<li>
													<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
													<label for="radio_2">S</label>
												</li>
												<li>
													<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
													<label for="radio_3">M</label>
												</li>
												<li>
													<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
													<label for="radio_4">L</label>
												</li>
												<li>
													<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
													<label for="radio_5">XL</label>
												</li>
											</ul>
										</div>
										<hr>
									</div>
										<form class="card-form-product" action="/productos/{{ $product->id }}/agregar" method="post">
										
										<input type="hidden" name="product_id" value="{{ $product->id }}">
										<label for="stock" class="prod-ammount-label">Cantidad</label><input class="prod-ammount" type="number" value="1" name="stock">
										<button type="submit" class="btn btn-outline-secondary">Agregar al carrito</button>
									</form> 
								</div>
							</div>
						</div>
					</div>		
				</div>
            </main>
        </div>
    </div>

	<!-- FOOTER -->
    <footer class="footer-bs">
        <div class="row">

        	<div class="col-md-3">
                <div class="logocorpoFooter">
                    <img src="img/imagen_corporate/logospring.png">
                        <div class="logoTextoFooter">
                            <p>Dogo</p>
                        </div>
                        <div class="logoparrafoFooter">
                            <p><b>PET SHOP</b></p>
                        </div>
                </div>              
            </div>
            
            <div class="col-md-3 footer-nav">
            	<div class="col-md-5">
                    <ul class="pages">
						<li><a href="index.php">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="productCategory(MOD)1.php">Productos</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>

        	<div class="col-md-3 footer-social">
            	<h4>SEGUINOS</h4>
            	<ul>
                	<li><img src="img/social-fb.svg" alt="Facebook"><a href="#"> Facebook</a></li>
                	<li><img src="img/twitter-01.svg" alt="Twitter"><a href="#"> Twitter</a></li>
                	<li><img src="img/social-ig.svg" alt="Instagram"><a href="#"> Instagram</a></li>
                	<li><img src="img/social-email.svg" alt="Email"><a href="#"> Mail</a></li>
                </ul>
            </div>

        	<div class="col-md-3 footer-ns">
                <h4>Newsletter</h4>
                <h3>SIGN UP NOW</h3>
                <p>Subscribite ingresando tu email a nuestra tienda On Line y recibí todas las novedades, ofertas y beneficios disponibles</p>
                    <div class="input-group">
                      <input type="text" class="form-controll" placeholder="email@mail.com">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Enviar</button>
                      </span>
                    </div>
                 </p>
            </div>
        </div>
		<section class="socalo">
        	<p>Designed & Powered by <a href="#">Go.Na.He</a> - © 2018 Spring Full Stack - Digital House - All rights reserved</p>
    	</section>
    </footer>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootsrap.js"></script>
    <script src="js/bootsrap.bundle.js"></script>
    <script src="js/product.js"></script>
</body>
</html>