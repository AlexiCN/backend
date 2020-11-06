<?php
#Cargar todas las librerias
include_once 'config/config.inc.php';
include_once 'helpers/url_helper.php';
include_once 'includes/adodb5/adodb.inc.php';
include_once 'includes/fpdf182/fpdf.php';

include_once 'libraries/Base.php';
include_once 'libraries/Controller.php';
include_once 'libraries/Rutas.php';

#uso de _autoload

spl_autoload_register(function($nombreClase){
    include_once 'libraries/'.$nombreClase.'.php';
    });
?>