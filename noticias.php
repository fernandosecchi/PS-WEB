<?php include_once('assets/head.php')?>

    <!--API Mensajerías-->
    <div class="WA reboteIn"><i class="icono-WA fa fa-whatsapp" aria-hidden="true"></i></div>
    <!--API Mensajerías-->
       
    <span class="ir-arriba fa fa-arrow-up" aria-hidden="true"></span>
    
    <!----------Menú de navegación --------->
	<nav class="navbar navbar-blog navbar-expand-lg">
		<div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <p id="logo">Pablo Suárez Ingeniería</p>
            <!--<img src="img/logo-light.png" alt="logo">-->      
        </a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   <span class="icon-bar"><i class="fas fa-bars"></i></span>
			</button>

			<!-- Menú links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
			        <li class="nav-item"><a class="nav-link" href="index.php">Nosotros</a></li>
			        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link active" href="galeria.php">Galería</a></li>
			        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
			        <li class="nav-item"><a class="nav-link" href="#contact-info">Contacto</a></li>
			    </ul>
			</div>
		</div>
	</nav>
    <!------------- Fin menú de navegación---------->

    <!----------Contenido galería---------->
    <section class="works section-padding" data-scroll-index="3">
        <div class="container-fluid">
        <div class="row ml-20 mr-20 mt-20 mb-20">

<?php

$articulos = simplexml_load_string(file_get_contents('http://www.puertodeguayaquil.gob.ec/category/noticias/feed/'));
$num_noticia=1;
$max_noticias=10;  // acá establecer el número máximo de noticias a mostrar
echo "<h4>{$articulos->channel->title}</h4>";

foreach($articulos->channel->item as $noticia){ 
    $fecha = date("d/m/Y - H:i", strtotime($noticia->pubDate));?>
    
    <article class="mt-20 mb-20">
        <h6><a href="<?php echo $noticia->link; ?>" target="_blank"><?php echo $noticia->title; ?></a></h6>

        <?php echo "Fecha: " . $fecha; ?>
        <?php echo ($noticia->children("content", true)); ?>
    </article>


    <?php $num_noticia++; 
    if($num_noticia > $max_noticias){
        break;
    }
}?>

        </div>
    </div>
</section>


<?php include_once('assets/contacto.php')?>

<?php include_once('assets/footer.php')?>