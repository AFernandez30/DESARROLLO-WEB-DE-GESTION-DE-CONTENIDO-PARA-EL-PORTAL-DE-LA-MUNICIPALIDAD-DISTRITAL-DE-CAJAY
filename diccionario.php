<?php
header('Content-Type: text/html; charset=UTF-8');
include_once("conexion.php");
function generarDescripcion($tipoDato) {
    if (strpos($tipoDato, 'int') !== false) {
        $matches = [];
        preg_match('/\d+/', $tipoDato, $matches);
        $cantidadDigitos = isset($matches[0]) ? $matches[0] : 'desconocida';
        return 'Llave primaria con capacidad de hasta ' . $cantidadDigitos . ' dígitos autogenerados de manera unica y secuencial. ';
    } elseif (strpos($tipoDato, 'float') !== false) {
        return 'Número decimal.';
    } elseif (strpos($tipoDato, 'varchar') !== false) {
        $length = substr($tipoDato, strpos($tipoDato, '(') + 1, -1);
        return 'Cadena de caracteres de hasta '.$length.' caracteres.';
    } elseif ($tipoDato === 'text') {
        return 'Texto largo con capacidad de caracteres de longitud máxima de 65,535 bytes.';
    } elseif ($tipoDato === 'datetime') {
        return 'Fecha y hora en formato YYYY-MM-DD HH:MM:SS.';
    } elseif ($tipoDato === 'timestamp') {
        return 'Marca de tiempo en formato YYYY-MM-DD HH:MM:SS.';
    } elseif ($tipoDato === 'boolean') {
        return 'Valor booleano (verdadero o falso).';
    } else {
        return 'Tipo de dato desconocido.';
    }
}
function getPrimaryKey($table,$db) {
    // Aquí debes implementar la lógica para obtener la llave primaria de la tabla
    // Puedes usar consultas SQL o métodos proporcionados por tu sistema de base de datos
    $primaryKey = null;

    $query = "SHOW KEYS FROM $table WHERE Key_name = 'PRIMARY'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $primaryKey = $row['Column_name'];
    }

    return $primaryKey;
}

function getForeignKeys($table,$db) {
    // Aquí debes implementar la lógica para obtener las llaves foráneas de la tabla
    // Puedes usar consultas SQL o métodos proporcionados por tu sistema de base de datos

    // Ejemplo usando MySQLi:
    $foreignKeys = [];

    $query = "SELECT COLUMN_NAME
              FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
              WHERE TABLE_NAME = '$table'
              AND CONSTRAINT_NAME <> 'PRIMARY'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $foreignKeys[] = $row['COLUMN_NAME'];
        }
    }

    return $foreignKeys;
}

$tables = array();

$query = "SHOW TABLES";
$result = $db->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_row()) {
        $tables[] = $row[0];
    }
}
$dictionary = array();

foreach ($tables as $table) {
    $query = "DESCRIBE " . $table;
    $result = $db->query($query);

    $columns = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $columns[] = $row;
        }
    }

    // Obtener información sobre llaves primarias y foráneas
    $primaryKey = getPrimaryKey($table,$db); // Función para obtener la llave primaria de la tabla
    $foreignKeys = getForeignKeys($table,$db); // Función para obtener las llaves foráneas de la tabla
    
    // Agregar información de llaves primarias y foráneas a las columnas
    foreach ($columns as &$column) {
        $column['Key'] = '';
        if ($column['Field'] === $primaryKey) {
            $column['Key'] = 'Primaria';
        } elseif (in_array($column['Field'], $foreignKeys)) {
            $column['Key'] = 'Foránea';
        }
    }

    $dictionary[$table] = $columns;
}

// Crear un arreglo para almacenar los datos del diccionario
$datosDiccionario = [];

foreach ($dictionary as $table => $columns) {
    $tabla = $table;

    foreach ($columns as $column) {
        $columna = $column['Field'];
        $tipoDato = $column['Type'];
        $llave = $column['Key'];
        $datosDiccionario[] = [$tabla, $columna, $tipoDato, $llave];
    }

    // Agregar una línea en blanco después de cada tabla
    $datosDiccionario[] = [];
}

// Nombre del archivo CSV a generar
$nombreArchivo = 'diccionario.csv';

// Abrir el archivo en modo escritura
$archivo = fopen($nombreArchivo, 'w');

// Escribir los encabezados de columna en el archivo CSV
fputcsv($archivo, ['Tabla', 'Columna', 'Tipo de dato', 'Llave', 'Descripción']);
foreach ($datosDiccionario as $fila) {
    if (count($fila) === 0) {
        fputcsv($archivo, []); // Línea en blanco después de cada tabla
    } else {
        list($tabla, $columna, $tipoDato, $llave) = $fila;    
        $llaves = utf8_decode($llave);
        $descripcion = utf8_decode(generarDescripcion($tipoDato));
        fputcsv($archivo, [$tabla, $llaves, $columna, $tipoDato, $descripcion]);
    }
}
fclose($archivo);

// Descargar el archivo CSV generado
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
readfile($nombreArchivo);


?>