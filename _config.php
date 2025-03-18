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

// Conexión a base de datos
const HOST  = "localhost";
const USER = "root";
const PASS = "root";
const DBNA = "testeo";



function fetchAllRows($sql_query) {
    try {
        $conn = mysqli_connect(HOST, USER, PASS, DBNA);
        if (!$conn) {throw new Exception("Conexión fallida: " . mysqli_connect_error()); }

        $result = mysqli_query($conn, $sql_query);
        
        if (!$result) {
            throw new Exception("Error in query: " . mysqli_error($conn));
        }

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC); // Devuelve un array asociativo
        mysqli_close($conn);

        return $data;
    } catch (Exception $e) {
        return ["error" => $e->getMessage()]; // Devolver el error en caso de fallo
    }
}

// Uso de la función
$datos = fetchAllRows("SELECT id, firstname, lastname FROM MyGuests");

// Comprobamos si hay error antes de recorrer el array
if (isset($datos["error"])) {
    echo "Error: " . $datos["error"];
} else {
    foreach ($datos as $i) {
        echo "<li>{$i["id"]} - {$i["nombre"]}</li>";
    }
}





// Debug
function debug($input, $wrap = true) {
    if (DEBUG) {
        $html = '';
        if (is_string($input)) {
            $html = htmlspecialchars($input);
        } else {
            ob_start();
            print_r($input);
            $html = ob_get_clean();
        }
        // Si queremos que se envuelva en un 
        if ($wrap) {
            $html = "<pre class='debug'>" . $html . "</pre>";
        }
        echo $html;
    }
}