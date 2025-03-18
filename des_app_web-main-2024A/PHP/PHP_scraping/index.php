<?php
// URL de la página web que quieres analizar
$url = "https://www.elpais.com";

// Crear un objeto DOMDocument
$dom = new DOMDocument();

// Suprimir los errores por etiquetas mal formadas en la página
libxml_use_internal_errors(true);

// Cargar la página web
$dom->loadHTMLFile($url);

// Crear una lista desordenada (ul) para almacenar los resultados
echo "<ul>";

// Obtener todos los elementos h2 de la página
$h2Elements = $dom->getElementsByTagName("h2");

// Recorrer los elementos h2 y mostrar su contenido en la lista
foreach ($h2Elements as $h2) {
    echo "<li>" . $h2->textContent . "</li>";
}

// Cerrar la lista desordenada
echo "</ul>";
?>