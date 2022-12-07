<html>
<head>
	<title>Agregar base de datos</title>
</head>

<body>
<?php

include_once("../configuration.php");

if(isset($_POST['Submit'])) {	
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$telefono = $mysqli->real_escape_string($_POST['telefono']);
	$email = $mysqli->real_escape_string($_POST['email']);
    $observaciones = $mysqli->real_escape_string($_POST['observaciones']);
		

	if(empty($nombre) || empty($telefono) || empty($email) || empty($observaciones)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>Espacio obligatorio.</font><br/>";
		}
		if(empty($telefono)) {
		}
		if(empty($email)) {
			echo "<font color='red'>Espacio obligatorio.</font><br/>";
		}
        if(empty($observaciones)) {
		}
		echo "<br/><Mensaje enviado correctamente!;'>Go Back</a>";
	} else { 

			

		$sql = "INSERT INTO bestbrand(nombre,telefono,email,observaciones) VALUES('$nombre','$telefono','$email','$observaciones')";
		$result = $mysqli->query($sql);
;
       header("location:./contactsend.php");;
	}
}
?>
</body>
</html>
