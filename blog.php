<?php include_once('assets/head.php');
      include_once('assets/loading.php');
?>

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
                    <li class="nav-item"><a class="nav-link" href="galería.php">Galería</a></li>
			        <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
			        <li class="nav-item"><a class="nav-link" href="#contact-info">Contacto</a></li>
			    </ul>
			</div>
		</div>
	</nav>
    <!------------- Fin menú de navegación---------->

        <section class="blogs section-padding" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					    <div class="post-img">
							<img src="img/blog/1.jpg" alt="" width="200px" height="100px">
                        </div>
					</div>
					<div class="col-md-6">
						<div class="posts">

							<div class="post">
                                
								<div class="content">
									<div class="post-meta">
										<div class="post-title">
											<h5><a href="#0">Título del post</a></h5>
										</div>
										<ul class="meta">
											<li><a href="#0"><i class="fa fa-user" aria-hidden="true"></i>Admin</a></li>
											<li><a href="#0"><i class="fa fa-calendar" aria-hidden="true"></i>6 augu 2017</a></li>
										</ul>
									</div>

									<div class="post-cont">
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has Lorem Ipsum is simply dummy text been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>

                                </div>
                                
							</div>

						</div>
					</div>

					<div class="posts">
					    <div class="post">
					        <div class="col-12 content">
					            <p class="spical">Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						        <p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown pis simply dummy text of the and type setting industry. Lorem Ipsum has Lorem Ipsum is simply dummy text been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

						        <div class="share-post">
							        <span>Share Post</span>
							        <ul>
								        <li><i class="icofont icofont-social-facebook"></i></li>
								        <li><i class="icofont icofont-social-twitter"></i></li>
								        <li><i class="icofont icofont-social-behance"></i></li>
								        <li><i class="icofont icofont-social-youtube"></i></li>
							        </ul>
						        </div>
					        </div>
					    </div>
					</div>

				</div>
			</div>
		</section>

	<?php include_once('assets/contacto.php')?>

<?php include_once('assets/footer.php');?>