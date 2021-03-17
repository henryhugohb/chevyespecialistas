<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="<?php echo base_url('assets/icons/favicon.ico'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <script src="<?php echo base_url('assets/bootstrap/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/bootstrap.min.js'); ?>"></script>        
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!-- Beginning header -->
        <nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar-fixed-top-->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('orden/home')?>"><i>Chevyespecialistas</i></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href='#'>Listar</a></li>
                                <li><a href='#'>Nuevo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href='#'>Listar</a></li>
                                <li><a href='#'>Nuevo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vehiculos
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href='#'>Listar</a></li>
                                <li><a href='#'>Nuevo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orden de Trabajo
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href='<?php echo site_url('orden')?>'>Listar</a></li>
                                <li><a href='<?php echo site_url('orden/Nueva')?>'>Nueva</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historico de Trabajos
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href='<?php echo site_url('orden/historico_vehiculo')?>'>Vehiculo</a></li>
                                <li><a href='#'>Cliente</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventario
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Stock de productos</a></li>
                                <li><a href="#">Proyecciones de consumo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tecnicos
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Listar</a></li>
                                <li><a href="#">Nuevo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Listar</a></li>
                                <li><a href="#">Nuevo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of header-->
        <div class="container-fluid"  style="margin-top:50px">
        