<?php
/**
 * Template Name: Home
 */
get_header();
?>
<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
<script type="text/javascript">
jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });
});
</script>
<!-- banner -->
<section class="banner" id="home">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <?php foreach (get_field('imagens') as $obj) : ?>
            <li>
                <div style="background: url(<?=$obj['imagem']?>) no-repeat 0px 0px; background-size: cover;"
                    class="slider-info bg1 w3-agile-grid">
                    <div class="bs-slider-overlay">
                        <div class="banner-text container agile-info">
                            <h5 class="tag text-center mb-3 text-uppercase"><?=$obj['texto_menor']?></h5>
                            <h1 class="movetxt text-center agile-title text-uppercase"><?=$obj['titulo']?></h1>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="container text-center mt-3 py-3" id="estatisticas">
    <div class="row">
        <?php foreach (get_field('contadores') as $contador) : ?>
        <div class="col px-0  agileits_w3layouts_about_counter_left w3-agile-grid">
            <div class="counterinfo agile-info">
                <h3><?=$contador['titulo']?></h3>
                <?php if ($contador['grandeza'] == 'R$'): ?>
                <span><?=$contador['grandeza']?></span><span class="counter"><?=$contador['numero']?></span>
                <?php else: ?>
                <span class="counter"><?=$contador['numero']?></span><span><?=$contador['grandeza']?></span>
                <?php endif; ?>
            </div>
            <div class="clearfix"> </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- servicesbottom -->
<section class="service-bottom mt-3" id="sobre">
    <div class="container-fluid">

        <div class="row services-bottom">
            <!-- Counter -->
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-6 p-0 text-white">
                        <div class="layer agile-info p-4 ">
                            <h3 class="heading mb-lg-5 mb-4">Sobre</h3>
                            <div class="text">
                                <?= get_field('portugues'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 text-white">
                        <div class="layer agile-info p-4">
                            <h3 class="heading mb-lg-5 mb-4">About</h3>
                            <div class="pr-3 col-md-12">
                                <?= get_field('ingles'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!-- //Clients -->
        </div>
    </div>
</section>
<!-- //servicesbottom -->
<!-- about -->
<section class="about pt-4 container" id="consultoria" >
    <div class="row">

        <div class="col-md-8">
            <h3 class="heading mb-md-2 mb-2 col-12">Qualificações / Skills</h3>
            <div class="row">
                <div class="py-md-3 col-6">
                    <?= get_field('qualificacao_texto'); ?>
                </div>
                <div class="py-md-3 col-6">
                    <?= get_field('qualificacao_texto_ingles'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-0">
            <div class="col-md-12 mt-0 p-0">
                <h3 class="heading mb-md-2 mb-2 col-12 ml-0 p-0" style="margin-left: -7% !important;">Cursos / Courses
                </h3>
                <div class="row agile-info mt-3">
                    <div class="col-12 ml-0 p-0">
                        <?php foreach (get_field('cursos') as $curso) : ?>
                        <div class="col-12 ml-0 p-0">
                            <p class="margin py-1"><span class="fas fa-check-square mr-2"
                                    aria-hidden="true"></span><?=$curso['nome']?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="depoimentos" style="background: white">
<div style="background: rgba(0, 0, 0, 0.03);" class="pt-4">
    <div class="container">
    <div class="col-12 about-grids px-0 text-justify">
        <h4 class="heading mb-md-2 mb-2 col-12 ml-0 p-0">Depoimentos / Recommendations</h4>
        <div class="row  owl-carousel owl-theme slider-cima">

            <?php foreach (get_field('depoimentos') as $dep) : ?>
            <div>
                <p class="text-center" style="background:white;color:black; padding-left: 18px;">
                    <?=$dep['depoimento'];?>
                </p>
                <p class="text-center" style="background:white;color:black; padding-left: 18px;">
                    <?=$dep['autor'];?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    </div>
</section>
<section class="work py-4 mt-2" id="empresas">
    <div class="work-layer py-4">
        <div class="container py-md-3">
            <h3 class="heading">Empresas / Companies</h3>
            <div class="row  agile-info mt-3">
                <div class="col-6 ">
                    <div class="row px-2">
                        <h3 class="col-12 my-3">Vicência / Experience</h3>
                        <?php foreach(get_field('vivencia') as $obj) : ?>
                        <div class="col-md-4 col-sm-6 steps-reach px-3 my-3">
                            <img src="<?=$obj['logo']?>" class="img-fluid" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row px-2">
                        <h3 class="col-12 my-3">Parceiros / Partners</h3>
                        <?php foreach(get_field('parceiros') as $obj) : ?>
                        <div class="col-md-4 col-sm-6 steps-reach px-3 my-3">
                            <img src="<?=$obj['logo']?>" class="img-fluid" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //how we work -->

<!-- management services -->
<section class="services py-3" id="projetos">
    <div class="container agile-info py-md-3">
        <h3 class="heading  mb-3">Consultoria / Consulting</h3>
        <div class="row service_grids text-white d-flex align-items-baseline">
            <?php foreach (get_field('caixa') as $caixa) : ?>
            <div class="col-md-3 col-sm-6">
                <div class="team-members">
                    <img src="<?=$caixa['imagem']?>" class="img-fluid img-service" alt="image">
                    <h4 class="title-service p2 mt-2"><?=$caixa['titulo']?></h4>
                    <p class="mx-3 text-center mt-2"><?=$caixa['sub_titulo']?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- //management services -->

<section class="services py-3" style="background-color: whitesmoke;">
    <div class="container agile-info py-md-3">
        <h3 class="heading mb-lg-3 mb-3">Projetos / Projects</h3>
        <div class="row blog-grids owl-carousel owl-theme slider-baixo">

            <?php foreach (get_field('caixa_projeto') as $caixa) : ?>
            <div class="col-lg-12 w3-agile-grid">
                <div class="row blog-grid1 mr-lg-1">
                    <div class="col-lg-7 col-md-8 agile-info col-sm-7 blog-text">
                        <p class="mt-2"><?=$caixa['data']?></p>
                        <div class="p2">
                            <?=$caixa['texto']?>
                        </div>
                    </div>
                    <div class="col-4 mt-5">
                        <img src="<?=$caixa['imagem']?>" class="img-fluid img-service">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<section id="contact">
    <div class="container inner">
        <h2 class="text-left mb-4 mt-4">Entre em contato / Contact</h2>
        <?=get_field('texto_contato')?>

        <div class="divide50"></div>
        <div class="form-container">
            <?=do_shortcode('[contact-form-7 id="218" title="Formulário de contato 1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer();?>