<?php
function run(){
    $viewData = array(
        "cuenta"=>"1503199101444",
        "nombre"=>"Luis Ernesto Santillana Lopez",
        "correo"=>"netoluis944@gmail.com"
    );

    $proyectos = array(
        array("id"=>"1","name"=>"Titulo Primaria","location"=>"Escuela privada evangelica","year"=>"2004"),
        array("id"=>"2","name"=>"Titulo Secundaria","location"=>"Colegio Julio Verne","year"=>"2011"),
        array("id"=>"3","name"=>"Practica profesional de bachiller en informatica","location"=>"Colegio Julio Verne","year"=>"2011"),
        array("id"=>"4","name"=>"Realizacion del ESVU1 UNICAH","location"=>"UNICAH Santa Clara","year"=>"2017"),
        array("id"=>"5","name"=>"Realizacion del ESVU2 UNICAH","location"=>"UNICAH Santa Clara","year"=>"2020")
    );
    $viewData["proyectos"]=$proyectos;
    renderizar("about", $viewData);
    
    
}
run();

?>