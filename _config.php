<?php


const DEBUG = true;

const DATA =[
    'sitetitle' => 'Titulo de la web', 
    'sitename' => 'Nombre de la web',
    'sitelogo' => 'Sitio de la web',
    'siteurl' => '',
    'siteurl' => 'URL_ADDRESS:8000',
    'siteemail' => 'EMAIL_ADDRESS',
    'sitedescription' => 'Descripcion de la web',
    'sitekeywords' => 'Palabras clave de la web',
    'sitedate' => '2023-01-01',
    'siteauthor' => 'Autor de la web',
    'sitecopyright' => 'Copyright de la web',
];



function debug($string){
    if(DEBUG){
        echo '<pre>';
        var_dump($string);
        echo '</pre>';
    }
}