<?php
/**
 * Template Name: Home
 */
get_header();
?>
<!-- banner -->
<section class="banner" id="home">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <?php foreach (get_field('imagens') as $obj) : ?>
            <li>
                <div style="background: url(<?=$obj['imagem']?>) no-repeat 0px 0px; background-size: cover;" class="slider-info bg1 w3-agile-grid">
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
<!-- //banner -->
<section class="estatisticas container text-center mt-3 py-3">
    <div class="row">
        <?php foreach (get_field('contadores') as $contador) : ?>
        <div class="col px-0  agileits_w3layouts_about_counter_left w3-agile-grid">
            <div class="counterinfo agile-info">
                <h3><?=$contador['titulo']?></h3>
                <span class="counter"><?=$contador['numero']?></span><span><?=$contador['grandeza']?></span>
            </div>
            <div class="clearfix"> </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- servicesbottom -->
<section class="service-bottom mt-3">
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
<section class="about py-4 container">
    <div class="row">
        
            <div class="col-md-6">
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
            <div class="col-md-5">
                <div class="col-md-12 mt-0">
                    <h3 class="heading mb-md-2 mb-2 col-12 ml-0 pl-0">Cursos</h3>
                    <div class="row agile-info mt-3">
                        <div class="col-12 ml-0">
                            <?php foreach (get_field('cursos') as $curso) : ?>
                            <div class="col-12 ml-0 pl-0">
                                <p class="margin py-1"><span class="fas fa-check-square mr-2" aria-hidden="true"></span><?=$curso['nome']?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mt-4 col-1 about-grids">
                            <div class="pr-md-0">
                                <h4 class="col-12  mb-2 pl-0">Curriculo</h4>
                                <div class="row">
                                    <div class="pl-0 ml-0 col-md-8">
                                        <div>
                                            <ul class="no-dot  justify-content-md-around">
                                                <?php foreach (get_field('curriculo') as $key => $obj) :?>
                                                    <li>
                                                        <a href="<?=$obj['arquivo']?>">
                                                        <?php if ($key%2 == 0): ?>
                                                        <h3 class="margin"><?=$obj['lingua']?></h3>
                                                        <?php else: ?>
                                                        <h3 class="green"><?=$obj['lingua']?></h3>
                                                        <?php endif; ?>
                                                    </a>
                                                    </li>
                                                <?php endforeach; ?>
                                                <li>
                                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
    </div>
</section>
<!-- //about -->

<!-- how we work -->
<section class="work py-4">
    <div class="work-layer py-4">
        <div class="container py-md-3">
            <h3 class="heading">Empresas</h3>
            <div class="row  agile-info mt-3">
                <div class="col-6 ">
                    <div class="row px-2">
                        <h3 class="col-12 my-3">Vivencia</h3>
                        <?php foreach(get_field('vivencia') as $obj) : ?>
                        <div class="col-md-4 col-sm-6 steps-reach px-3 my-3">
                            <img src="<?=$obj['logo']?>" class="img-fluid" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="row px-2">
                        <h3 class="col-12 my-3">Parceiros</h3>
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
<section class="services py-3">
    <div class="container agile-info py-md-3">
        <h3 class="heading  mb-3">Consultoria</h3>
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
        <h3 class="heading mb-lg-3 mb-3">Projetos</h3>
        <div class="row blog-grids owl-carousel owl-theme">
            
            <?php foreach (get_field('caixa_projeto') as $caixa) : ?>
            <div class="col-lg-12 w3-agile-grid">
                <div class="row blog-grid1 mr-lg-1">
                    <div class="col-lg-7 col-md-8 agile-info col-sm-7 blog-text">
                        <p class="mt-2"><?=$caixa['data']?></p>
                        <div class="p2">
                            <?=$caixa['texto']?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<?php get_footer();?>