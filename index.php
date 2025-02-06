<?php

require_once ('../sistema-tareas/app/controllers/tareaController.php');
$url = $_SERVER['REQUEST_URI'];
$metodo = $_SERVER['REQUEST_METHOD'];



if( $url === '/'){
    $tareavista = new tareaController();
    $tareavista->vistaHome();
}