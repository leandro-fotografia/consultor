<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo()?></title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
		<meta name="keywords" content="Leandro" />
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script type="application/x-javascript">
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
		</script>
        <!--// Meta tag Keywords -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>
    <!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.html">
					Leandro
				</a>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item  mr-lg-3">
							<a class="nav-link scroll" href="#estatisticas">Estatísticas</a>
						</li>
						<li class="nav-item  mr-lg-3">
							<a class="nav-link scroll" href="#sobre">Perfil</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link scroll" href="#consultoria">Consultoria</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link scroll" href="#empresas">Empresas</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link scroll" href="#projetos">Projetos</a>
						</li>
						<li class="nav-item mr-lg-3">
							<a class="nav-link scroll" href="#contact">Contato</a>
						</li>
					</ul>
					<div class="buttons">
						<p>
							<a class="text-white" href="https://www.linkedin.com/in/leandrolnogueira/"><i class="fab fa-linkedin-in"></i></a>
							<i class="fas mr-1 fa-phone"></i> <?=getTelefone(get_the_ID());?>							
						</p>						
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->