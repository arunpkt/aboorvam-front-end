<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- title -->
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Arunkumar M">
    <!-- description -->
    <meta name="description" content="Aboorvam food products, the millet store offers wide variety of the value added millet and oil solution to lead healthy and happy life">
    <!-- keywords -->
    <meta name="keywords" content="Millet Dosa mix, instant dosa mix, cold pressed oil">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default navbar-expand-lg bg-white pt-2">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-md-12 p-0">
                    <div class="col-md-3 p-0 float-left d-flex w-100">
                        <a href="/" title="" class="logo navbar-brand w-75">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="POS Logo"
                                class="logo-white">
                        </a>
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-9 p-0 float-left">
                        <div class="row">
                            <div class="col-md-12 p-0 d-none d-lg-block">
                                <!-- Search -->
                                <div class="col-md-8 float-left p-0">
                                    <form action="#" method="post" class="form-inline">
                                        <div class="form-group search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="keyword" placeholder="Search entire store here">
                                                <span class="input-group-addon">
                                                    <a href="" class="justify-item-center">Search</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <!-- Email Id -->
                                <div class="col-md-4 float-right d-none d-md-block float-right text-right">
                                    <a href="mailto:aboorvamfoodproducts@gmail.com">aboorvamfoodproducts@gmail.com</a>
                                </div>
                            </div>  
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-12 float-right text-right p-0">
                                    <div class="col-md-12 p-0">
                                        <div class="navbar-collapse collapse alt-font" id="navbar-collapse-toggle-1">
                                            <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme-location' => 'top-menu',
                                                        'menu_class' => 'nav navbar-nav font-weight-700',
                                                    )
                                                )
                                            ?>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
