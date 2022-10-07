<?php

function cargarControlador($controlador){
    $nombreControlador = $controlador;
    $archivoControlador = 'controllers/'.$nombreControlador.'.php';
    echo $nombreControlador;

    if(!is_file($archivoControlador)){
        $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
        
    }

    require_once ($archivoControlador);
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controller, $accion){
    if(isset($accion) && method_exists($controller, $accion)){
        $controller->$accion();
    } else {
        $controller->ACCION_PRINCIPAL();
        

    }
}



?>