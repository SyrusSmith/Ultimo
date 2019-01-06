<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DogoShop</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/master1(MOD).css" rel="stylesheet">
    <link href="css/carru.scss" rel="stylesheet">
     
    <!-- Font generica -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     
     <!-- Fonts Carrousel -->
    <link href="https://fonts.googleapis.com/css?family=Chelsea+Market" rel="stylesheet">


</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- NAVBAR -->
        <div>
            <!-- SAQUÉ bg-dark fixed-top del class name, y cambié navbar-expand-lg por md (Código en línea 4109 a 4149 de bootsrap.css) -->
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
                            <a class="nav-link js-scroll-trigger" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#"><strong>Login</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#"><strong>Registro</strong></a>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </header>

   

<!-- MAIN -->
<main>
    <br>
    <br>
    <br>
     <!-- FORM REGISTRO ---------------------------------------------------->
        <section  class="tituloLinea">
            <div> 
                <p>REGISTRO</p>
                <hr>
            </div><br>
        </section>

        <section>
            <div class="conteiner-flex">
                <form class="form form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="reg-form">
                        <fieldset>
                            
                            <div class="form-group">
                                <label class="control-label col-md-2" for="nombre">Nombre:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="nombre" value="" placeholder=" Nombre *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="apellido">Apellido:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="apellido" value="" placeholder=" Apellido *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="email">e-Mail:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email" value="" placeholder=" Corre Electrónico *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="password">Password:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="password" placeholder=" Elegí tu contraseña *">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="cpassword">Confirma:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="cpassword" placeholder=" Confirmá tu contraseña *">
                                </div>
                                <?php if(isset($errores['password'])) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                                <?php endif; ?>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="dni">DNI:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="dni" value="" placeholder=" DNI">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="direccion">Dirección:</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="direccion" value="" placeholder=" Dirección">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="departamento">Departamento</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="departamento" value="" placeholder=" Piso/Departamento">
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="telefono">Teléfono</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="telefono" value="" placeholder=" Teléfono">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="localidad">Provincia</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="localidad" value="" placeholder=" Provincia">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="provincia">Provincia</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="provincia" value="" placeholder=" Provincia">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-2" for="codiga-postal">C. Postal</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="codigo-postal" value="" placeholder=" Código Postal">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-auto ">
                                    <h6>
                                        <label class="control-label"> (* campos obligatorios)</label>
                                    </h6>
                                </div>
                            </div>
                           
                            <!-- <div class="form-group">
                                <label class="control-label col-md-2" for="fecha-de-nacimiento">Fecha de Nacimiento</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="fecha-de-nacimiento" value="" placeholder=" Fecha de Nacimiento">
                                </div>
                            </div> -->
                            
                            <div class="form-group">
                                <label class="control-label col-md-1" for="genero" name="genero">Género:</label>
                                <div class="col-md-2">
                                    <input  type="radio" name="genero" value="f">
                                    <label class="control-label col-md-2" for="genero" name="femenino">Femenino</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="genero" value="m">
                                    <label class="control-label col-md-2" for="genero" name="masculino">Masculino</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="radio" name="genero" value="o">
                                    <label class="control-label col-md-2" for="genero" name="otro">Otro</label>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label col-md-2" for="avatar">Foto Perfil</label>
                                <div class="col-md-10">
                                    <input type="file" name="avatar">
                                    <?php if(isset($errores['avatar'])) :?>
                                    <div class="alert"><p><strong><?= $errores['avatar'] ?></strong></p></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div >
                                <hr>
                                
                                <!--<div class="conteiner-flex">
                                    <div class="form-group">
                                        <div class="col-md-auto">
                                            <label class="control-label" for="newsletter">Quiero suscribirme al newsletter semanal</label>
                                        </div>
                                        <div class="col-md-auto">
                                            <input type="checkbox" name="newsletter">
                                        </div>
                                    </div>
                                </div>-->
                                
                                <div class="conteiner-flex">
                                    <div class="form-group">
                                        <div class="col-md-auto">
                                            <label class="control-label" for="confirm">* Acepto Términos y Condiciones</label>
                                        </div>
                                        <div class="col-md-auto">
                                            <input type="checkbox" name="confirm">
                                        </div>
                                    </div>
                                </div>
                                <div class="conteiner-flex col-md-12">
                                <button class="btn form-btn" type="submit">ENVIAR</button>
                                <button class="btn form-btn" type="reset">BORRAR</button>
                                </div>
                            </div>       
                        </fieldset>
                    </div> 
                    
                </form>
                
            </div>
        </section>
    </main>
    
     
    <!----------- Footer ------------>

    <section>
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Productos</a></li>
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
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
    <section class="socalo">
        <p>Designed & Powered by <a href="#">Go.Na.He</a> - © 2018 Spring Full Stack - Digital House - All rights reserved</p>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>