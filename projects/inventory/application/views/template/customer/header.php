<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/fontawesome-all.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>"> 
    <title>Petalia Furnitures</title>
</head>

<body>
    <div class="header-banner">
        <div class="header-cover"></div>
        <div class="logo-cover">
            <h1><?php echo $pageTitle ?></h1>
        </div>
    </div>
        
    </div>
    <header>
        <div>
            <div class="mainHeader" id="mainHeader">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="search">
                            <input class="searchInput" type="search"><button class="btn searchBtn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="logo">
                            <h1><a href="<?php echo base_url("Main/index")?>"><?php echo $pageTitle ?></a></h1>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="login">
                            <p><a href="<?php echo base_url("Main/login")?>">SIGN-IN</a> | <a href="<?php echo base_url("Main/registration")?>">SIGN-UP</a></p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <nav class="nav-web">
            <div class="text-center">
                <ul class="breadcrumb">
                    <li class=""><a href="#">CATALOG</a></li>
                    <li class=""><a href="#">TRENDING</a></li>
                    <li class=""><a href="#">FEATURED PRODUCTS</a></li>
                    <li class=""><a href="#">MODERN</a></li>
                    <li class=""><a href="#">OUTDOORS</a></li>
                </ul>
            </div>
        </nav>

        <nav class="nav-mobile">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="#">CATALOG</a></li>
                        <li class=""><a href="#">TRENDING</a></li>
                        <li class=""><a href="#">FEATURED PRODUCTS</a></li>
                        <li class=""><a href="#">MODERN</a></li>
                        <li class=""><a href="#">OUTDOORS</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
