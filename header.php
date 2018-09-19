<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title>MOBESTON</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
    <div class="row menu1">
        <div class="col-lg-2 telmail">
            <i class="fa fa-phone" ></i>
            +372 58414005
        </div>
        <div class="col-lg-3  telmail">
            <i class="fa fa-envelope" ></i>
            info@autovaruosad.ee

        </div>

        <ul class="nav col-lg-7 justify-content-lg-end nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    <img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Tracking.png'" alt="">
                    Отследить груз
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link "   data-target="#exampleModal" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Loginicon.png" alt="">
                    Войти
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  data-target="#exampleModal1" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/user.png" alt="">

                    Регистрация
                </a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/Russia.png" alt="">
                    Рус
                </a>
                <div class="dropdown-menu menu2">
                    <a class="dropdown-item" href="#">Eng</a>
                    <a class="dropdown-item" href="#">DE</a>
                    <a class="dropdown-item" href="#">Укр</a>

                </div>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
        </div>

    </div>

 <!-- модальное окно входа-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php get_template_part( '/woocommerce/includes/parts/wc-form', 'login');?>
                </div>

            </div>
        </div>
    </div>
    <!-- модальное окно регистрации-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Регистрация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php get_template_part( '/woocommerce/includes/parts/wc-form', 'register');?>
                </div>

            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-xl  navbar-light custom-menu">

        <div class="navbar-header">

            <?php $logo_id = carbon_get_theme_option('est_header_logo');
            $logo = $logo_id ? wp_get_attachment_image_src($logo_id,'full'): '';?>
            <img class="navbar-brand" src="<?php echo $logo[0]; ?>" alt="">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class= "ml-auto" >
                <ul class=" nav navbar-nav nav-fill" style="font-size: 20px;">
                    <li class="nav-item  "><a class="nav-link " href="#">Главная </a></li>
                    <li class="nav-item "><a class="nav-link" href="#">Запчасти</a></li>
                    <li class="nav-item " ><a class="nav-link" href="#">О компании</a></li>
                    <li class="nav-item " ><a class="nav-link" href="#">Контакты</a></li>
                    <li class="nav-item " ><div><a class="nav-link cart-contents" href="<?php $link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url();
                                                                            echo $link; ?>">
                                <div class="shopcart">
                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                    <b>Корзина: </b><?php echo WC()->cart->get_cart_total(); ?>
                                </div>
                            </a></div></li>

                </ul>
            </div>
        </div>

    </nav>
    <div class="banner">
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1 col-xl-1"></div>
            <div class="text">
                <h3>Ищете запчасти?</h3>
                <p class="oferta">Мы поставляем лучшие запчасти с 1996 года</p>
                <p class="oferta2">У нас можно найти запчасти по номеру машины или по коду детали</p>
<!-- Тут чекбоксы еще не подключены-->
                <div class="form-check form-check-inline">


                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">Номер детали</label>

                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">Номер авто</label>
                </div>



                    <form method="get" action="<?php esc_url( home_url( '/' )); ?>">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="inlineFormInputGroup">123 ABC</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="<?php echo get_template_directory_uri(). '/assets/' ?>image/piston.png" alt=""></div>
                                    </div>
                                    <input type="text" value="<?php get_search_query();?>" name="s" class="form-control" id="inlineFormInputGroup" placeholder="123 ABC">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" value="<?php esc_attr_x( 'Search', 'submit button' )?>" class="btn btn-danger mb-2"> <i class="fa fa-search" aria-hidden="true"></i> Поиск</button>
                            </div>
                            </div>
                    </form>
            </div>


        </div>

    </div>


</div>


<div class="category container-fluid">
    <div class="row justify-content-lg-center">
        <a href="#"> <img src="./img/car.jpg" alt=""> </a>
        <a href="#"><img src="./img/track.jpg" alt=""></a>
        <a href="#"><img src="./img/autotires.jpg" alt=""></a>
        <a href="#"><img src="./img/autochemi.jpg" alt=""></a>
        <a href="#"><img src="./img/autogoods.jpg" alt=""></a>
        <a href="#"><img src="./img/Acsesuars.jpg" alt=""></a>

    </div>

</div>
    <p class="woocommerce-error"> kdsalkfd;slfjds;jgfjbhdjklf</p>
	<div id="content" class="site-content">

