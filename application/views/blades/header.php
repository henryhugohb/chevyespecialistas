<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--link rel="shortcut icon" href="assets/icons/favicon.ico"-->
        <?php 
        foreach($data->css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <!--link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" /-->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php foreach($data->js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <!--script src="../assets/bootstrap/js/bootstrap.min.js"></script-->
        <title><?php echo $titulo; ?></title>
        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }
            #title {
                color: blue;
                text-decoration: none;
                font-size: 40px;
                text-align: center;

            }
        </style>
    </head>