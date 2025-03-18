<?php

$datos=[
    [
    'lugar'=>'Gijón',
    'img'=>'laboral.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Turismo','Cultura','Gastronomía']
    ],
    [
    'lugar'=>'Oviedo',
    'img'=>'naranco.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Cultura','Gastronomía','Elegancia','Ópera']
    ],
    [
    'lugar'=>'Cudillero',
    'img'=>'niemeyer.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Turismo','Cultura','Gastronomía','Industria']
    ],
    [
    'lugar'=>'Pola Siero',
    'img'=>'niemeyer.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Turismo','Cultura','Gastronomía','Industria']
    ],
    [
    'lugar'=>'La Cuenca (la buena)',
    'img'=>'niemeyer.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Turismo','Cultura','Gastronomía','Industria']
    ],
    [
    'lugar'=>'Avilés',
    'img'=>'niemeyer.jpg',
    'texto'=>'Una de las cidades del norte de España más contaminaes',
    'ambito'=>['Turismo','Cultura','Gastronomía','Industria']
    ]
];



$miJSON = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

file_put_contents('datos.json',$miJSON );