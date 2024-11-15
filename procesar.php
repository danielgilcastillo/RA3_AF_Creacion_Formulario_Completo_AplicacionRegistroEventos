<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "el formulario se envio por método POST<br>";


    if (isset($_POST['fname'])) {
        $nombre = $_POST['fname'];
        echo "El nombre se ha recibido <br>";
        if (empty($nombre)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $nombre<br>";
        }
    }
    
    
    if (isset($_POST['correo'])) {
        $correo = $_POST['correo'];
        echo "El correo se ha recibido <br>";
        if (empty($correo)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $correo<br>";
        }
    }
    
    if (empty($telefono)) {
        echo "El telefono está vacío<br>";
    } else {
        $telefono = $_POST['telefono'];
        echo "El telefono que se ha recibido es $telefono<br>";
    }
    
    if (empty($fnacimiento)) {
        echo "La fecha de nacimiento está vacía<br>";
    } else {
        $fnacimiento = $_POST['fnacimiento'];
        echo "La fecha de nacimiento que se ha recibido es $fnacimiento<br>";
    }
    
    if (empty($genero)) {
        echo "El genero de nacimiento está vacía<br>";
    } else {
        $genero = $_POST['genero'];
        echo "El género que se ha recibido es $genero<br>";
    }
    
    
    
    if (isset($_POST['fevento'])) {
        $fevento = $_POST['fevento'];
        echo "La fecha del evento se ha recibido <br>";
        if (empty($fevento)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $fevento<br>";
        }
    }
    if (isset($_POST['tentrada'])) {
        $tentrada = $_POST['tentrada'];
        echo "El tipo de entrada que se ha recibido es $tentrada<br>";
    }
    
    if (isset($_POST['pcomidas'])) {
        $pcomidas = $_POST['pcomidas'];
        echo "La preferencia de comida que se ha recibido es $pcomidas<br>";
    }
    
    if (isset($_POST['nusuario'])) {
        $nusuario = $_POST['nusuario'];
        echo "El nombre del usuario se ha recibido <br>";
        if (empty($nusuario)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $nusuario<br>";
        }
    }
    
    if (isset($_POST['contrasena'])) {
        $contrasena = $_POST['contrasena'];
        echo "La contrasena se ha recibido <br>";
        if (empty($nusuario)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $contrasena<br>";
        }
    }
    
    if (isset($_POST['confcontrasena'])) {
        $confcontrasena = $_POST['confcontrasena'];
        echo "La confirmación de la contraseña se ha recibido <br>";
        if (empty($confcontrasena)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $confcontrasena<br>";
        }
    }
    if (isset($_POST['pregcorreo'])) {
        $pregcorreo = $_POST['pregcorreo'];
        echo "Preferencia de correo que se ha recibido es $pregcorreo<br>";
    }
    
    
    if (isset($_POST['terminos'])) {
        $terminos = $_POST['terminos'];
        echo "Los terminos de la contraseña se ha recibido <br>";
        if (empty($terminos)) {
            echo "pero ha llegado vacío<br>";
        } else {
            echo "Su valor es $terminos<br>";
        }
    }
    
    if (empty($caleventos)) {
        echo "La calificación de eventos está vacía<br>";
    } else {
        $caleventos = $_POST['caleventos'];
        echo "La calificación de eventos que se ha recibido es $caleventos<br>";
    }
    if (empty($cadicionales)) {
        echo "Los comentarios adicionales están vacíos<br>";
    } else {
        $cadicionales = $_POST['cadicionales'];
        echo "Los comentarios adicionales que se han recibido son $cadicionales<br>";
    }
    


    
} else {
    echo "el formulario NO se envio por método POST<br>";
}
