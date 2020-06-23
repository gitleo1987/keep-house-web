<?php
    $servicios = $nombre_error = $email_error = $telef_error = $inmueble_error = "";
    $nombre = $apellido = $email = $telefono = $inmueble = $calle = "";
    $exito = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            $nombre_error = "Nombre es obligatorio";
        } else {
            $nombre = test_input($_POST["nombre"]);
        }
        if (!empty($_POST["apellido"])) {
            $apellido = test_input($_POST["apellido"]);
        }
        if (!empty($_POST["email"])) {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Formato incorrecto";
            }
        }
        if (empty($_POST["telefono"])) {
            $telef_error = "Teléfono es obligatorio";
        } else {
            $telefono = test_input($_POST["telefono"]);
        }
        if (empty($_POST["inmueble"])) {
            $inmueble_error = "Tipo de inmueble es obligatorio";
        } else {
            $inmueble = test_input($_POST["inmueble"]);
        }
        $servicios_array = $_POST['servicios'];
        $lista_servicios = "\n";
        foreach ($servicios_array as $servicio) {
            $lista_servicios .= "    - " . get_servicio($servicio) . "\n";
            $servicios .= "'$servicio',";
        }

        if (!empty($_POST["calle"])) {
            $calle = test_input($_POST["calle"]);
        }


        if ($nombre_error == '' and $email_error == '' and $telef_error == '' and $inmueble_error == '')
        {
            $cuerpo = '';
            $cuerpo .= "Nombre: " . strtoupper($nombre) . "\n";
            $cuerpo .= "Apellido: " . strtoupper($apellido) . "\n";
            $cuerpo .= "Email: " . $email . "\n";
            $cuerpo .= "Teléfono: " . $telefono . "\n";
            $cuerpo .= "Inmueble: " . get_inmueble($inmueble) . "\n";
            $cuerpo .= "Calle: " . strtoupper($calle) . "\n";
            $cuerpo .= "Servicios: " . $lista_servicios . "\n";

        $to      = 'e.alejandro.lemus@gmail.com,gabriel@waiser.com.ar';
        $subject = 'KeepHouse Web - Solicitud de presupuesto';
        if (mail($to, $subject, $cuerpo)){
            $exito = "Solicitud de Presupuesto enviada exitosamente";
            //reset form values to empty strings
            $servicios = $nombre = $apellido = $email = $telefono = $inmueble = $calle = "";
        } else {
            $exito = "Error al enviar";
        }
    } else {
            $exito = "Se encontraron errores";
        }

    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function get_inmueble($sigla) {
        switch ($sigla) {
            case 'CA':
                return 'CASA';
                break;
            case 'DE':
                return 'DEPARTAMENTO';
                break;
            case 'LC':
                return 'LOCAL COMERCIAL';
                break;
            case 'PH':
                return 'PH';
                break;
            case 'TE':
                return 'Terreno';
                break;
        }
    }

    function get_servicio($sigla)
    {
        switch ($sigla) {
            case "BA":
                return 'Servicio Básico';
                break;
            case "GA":
                return 'Gestión de Averías';
                break;
            case "CL":
                return 'Casa Lista';
                break;
            case "RC":
                return 'Representación ante el consorcio';
                break;
            case "PP":
                return 'Gestión y pago de proveedores';
                break;
            case "RV":
                return 'Reformas en la vivienda';
                break;
            case "TA":
                return 'Transfer desde el aeropuerto o Bahía Blanca';
                break;
            case "ER":
                return 'Envío / Recepción';
                break;
            case "LC":
                return 'Leña y Carbón';
                break;
            case "SA":
                return 'Servicio antiplagas';
                break;
        }
    }
?>
