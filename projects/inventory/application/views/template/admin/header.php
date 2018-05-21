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
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <title>Petalia Furnitures</title>
</head>

<body>
    <header class="container-fluid">
        <div class="mainHeader">
            <div class="col-sm-6">
                <div class="row">
                    <div class="logo">
                        <h1><a href="<?php echo base_url("Main/admin")?>"><?php echo $pageTitle ?></a></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="login">
                        <p>Welcome! <a href="#">Elvin Mendoza</a> [<span>Admin</span>] | <a href="<?php echo base_url("Main/index")?>">Log Out</a></p>
                    </div>
                </div>
            </div>
        </div> 
        <nav class="nav-web">
            <div class="text-center">
                <ul class="breadcrumb">
                <li class=""><a href="<?php echo base_url("Main/admin")?>">DASHBOARD</a></li>
                <li class=""><a href="<?php echo base_url("Main/employee")?>">EMPLOYEE</a></li>
                <li class=""><a href="#">INVENTORY</a></li>
                <li class=""><a href="#">SAMPLE</a></li>
                <li class=""><a href="#">SAMPLE</a></li>
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
                    <li class=""><a href="#">DASHBOARD</a></li>
                    <li class=""><a href="#">EMPLOYEE</a></li>
                    <li class=""><a href="#">INVENTORY</a></li>
                    <li class=""><a href="#">SAMPLE</a></li>
                    <li class=""><a href="#">SAMPLE</a></li>
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
