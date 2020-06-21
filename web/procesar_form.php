<?php
    $servicios = $nombre_error = $email_error = $telef_error = $inmueble_error = "";
    $nombre = $apellido = $email = $telefono = $inmueble = $supcub = $supdesc = $calle = "";
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
        $lista_servicios = "<ul>";
        foreach ($servicios_array as $servicio) {
            $lista_servicios .= "<li>" . get_servicio($servicio) . "</li>";
            $servicios .= "'$servicio',";
        }
        $lista_servicios .= "</ul>";

        if (!empty($_POST["supcub"])) {
            $supcub = test_input($_POST["supcub"]);
            }
        if (!empty($_POST["supdesc"])) {
            $supdesc = test_input($_POST["supdesc"]);
        }
        if (!empty($_POST["calle"])) {
            $calle = test_input($_POST["calle"]);
        }


        if ($nombre_error == '' and $email_error == '' and $telef_error == '' and $inmueble_error == '')
        {
            $cuerpo = '';
            $cuerpo .= "Nombre: " . $nombre . "\n";
            $cuerpo .= "Apellido: " . $apellido . "\n";
            $cuerpo .= "Email: " . $email . "\n";
            $cuerpo .= "Teléfono: " . $telefono . "\n";
            $cuerpo .= "Inmueble: " . get_inmueble($inmueble) . "\n";
            $cuerpo .= "Servicios: " . $lista_servicios . "\n";
            $cuerpo .= "Sup. Cubierta: " . $supcub . "\n";
            $cuerpo .= "Sup. Descubierta: " . $supdesc . "\n";
            $cuerpo .= "Calle: " . $calle . "\n";
        }
        $to      = 'maildeprueba@host.com';
        $subject = 'KeepHouse Web - Solicitud de presupuesto';
        if (mail($to, $subject, $cuerpo)){
            $exito = "Solicitud de Presupuesto enviada exitosamente";
            //reset form values to empty strings
            $servicios = $nombre = $apellido = $email = $telefono = $inmueble = $supcub = $supdesc = $calle = "";
        }

    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function get_inmueble($sigla) {
        if ($sigla == 'CA') {
            return 'CASA';
        } elseif ($sigla == 'DE') {
            return 'DEPARTAMENTO';
        } else {
            return 'NO SELECCIONADO';
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
