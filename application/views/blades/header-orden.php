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
        <title>Ordenes de Trabajo</title>
    </head>
    <body>
        <!-- Beginning header -->
        <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo site_url('main')?>">Inicio - <?php echo date("Y-m-d"); ?></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href='<?php echo site_url('orden/Nueva')?>'>Nueva</a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('orden/buscar')?>'>Buscar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- End of header-->
        