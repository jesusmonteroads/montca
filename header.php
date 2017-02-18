
  <?php 

    $titulos = [

    'index.php' => 'Montca - Soluciones web - Colombia',

    'pagina-web.php' => 'Montca - Páginas web - Colombia',

    'posicionamiento-web.php' => 'Montca - Posicionamiento web - Colombia',

    'hosting.php' => 'Montca - Hosting - Colombia',

    'contacto.php' => 'Montca - Contacto - Colombia'

    ];



    $uri = end(explode("/", $_SERVER['PHP_SELF']));

   ?>

<?php 
    $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 ?>

<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="img/favicon.png" />
  	<title><?php echo $titulos[$uri]; ?></title>
    <meta description="Crea con nosotros páginas web Personales, Empresariales o Ecommerce. Con diseños a la medida de tus necesidades.">

    <meta property="og:title" content="<?php echo $titulos[$uri]; ?>" />
    <meta property="og:description" content="Crea con nosotros páginas web Personales, Empresariales o Ecommerce. Con diseños a la medida de tus necesidades." />
    <meta property="og:type" content="website" />
    <meta property="og:locale:alternate" content="es_ES" />
    <meta property="og:url" content="<?php echo $url_actual; ?>" />
    <meta property="og:image" content="http://conceptodefinicion.de/wp-content/uploads/2015/10/pagina-web-2-e1444136736137.jpg" />
</head>
<body class="header-moved">

    <header>
        <div class="container">
            <div id="logo-wrapper">
                <div class="cell-view"><a id="logo" href="index.php"><img src="img/logo.png" alt="" /></a></div>
            </div>
            <div class="open-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-container">
                <div class="scrollable-container">
                    <div class="header-left">
                        <nav>
                            <div class="menu-entry active">
                                <a href="/">Inicio</a>
                                
                            </div>
                            <div class="menu-entry">
                                <a href="pagina-web">Paginas Web</a>
                              
                            </div>
                            <div class="menu-entry">
                                <a href="posicionamiento-web">Posicionamiento</a>
                            </div>
                             <div class="menu-entry">
                                <a href="hosting">Hosting</a>
                                
                            </div>
                            
                            <div class="menu-entry">
                                <a href="contacto">Contacto</a>
                            </div>

                        </nav>
                    </div>
                    <div class="header-right">
                        <div class="header-inline-entry">
                            <div><span class="glyphicon glyphicon-time"></span> Soporte al Cliente <b>24/7</b></div>
                            <div><span class="glyphicon glyphicon-phone"></span><a href="tel:+573016861707" class="telephone-link">+57 301 686 1707</a></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="content-wrapper">

        <div class="container-above-header">
            <!-- BLOCK "TYPE 9" -->
            <div class="block type-9">
                <div class="container">
                    <div class="entry">
                        <h3 class="title wow fadeInLeft">Promoción</h3>
                        <div class="text wow fadeInRight"> <b>10% Descuento</b> para nuevos clientes  <!-- <span><b></b><small>/</small></span> --></div>
                    </div>
                </div>
            </div>
        </div>
