<?php
    session_start();
    if(isset($_SESSION['errores'])){
        foreach($_SESSION['errores'] as $error){
            echo $error . '<br />';
        }
        unset($_SESSION['errores']);
    }
    if(!isset($_SESSION['admin'])){
        include '../../../html/inicio_sesion.html';
    }
    else{
        header('Location:../inicio.php');
    }

//    include 'html/inicio_sesion.html';