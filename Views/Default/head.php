<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distribuidora Primavera</title>

    <link rel="stylesheet"  href="<?php echo URL.RQ ?>css/bootstrap.css" />
    <link rel="stylesheet"  href="<?php echo URL.RQ ?>css/style.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light" style="background-color:#343a40;border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand text-white" >
                <img src="<?php echo URL.RQ ?>images/icons/logo-google.png" class="mx-auto w-25 imglogo">Primavera
                </a>
                <?php
                 $user = Session::getSession("User"); 
                 if(null != $user){
                 ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a  class="nav-link text-white" title="Manage">Hola
                           <?php echo $user["Name"]." ".$user["LastName"]?>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="<?php echo URL?>Index/Logout"  class="nav-link text-white" title="Manage">Salir</a>
                        </li>
                    
                    </ul>
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a href="<?php echo URL?>Main/Main" class="nav-link text-white" >Principal</a>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Clientes</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo URL?>Client/Client">Lista de Clientes</a>
                                <a class="dropdown-item" href="<?php echo URL?>Client/Register">Agregar Clientes</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Proveedores</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo URL?>Provider/Provider">Lista de Proveedores</a>
                                <a class="dropdown-item" href="<?php echo URL?>Provider/Register">Agregar Proveedores</a>
                            </div>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Usuarios</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo URL?>User/User">Lista de Usuarios</a>
                                <a class="dropdown-item" href="<?php echo URL?>User/Register">Agregar Usuarios</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php }?>
            </div>
        </nav>
    </header>
