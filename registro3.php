<?php

	$nombre=$_POST['nombre'];
	$puesto=$_POST['puesto'];
	$direcc= $_POST['direcc'];
	$costo= $_POST['costo'];
	
$conexion = mysqli_connect("localhost", "root","Admin123", "avihome2");

			if (!$conexion)
			{
				die("\nError de Conexión: " . mysqli_connect_errno());
				exit();
			}

			$query ="SELECT MAX(id_personal)+ 1 as id_personal FROM personal";
				$id=mysqli_query($conexion,$query);
				$nid =0;
				while ($objet = mysqli_fetch_object($id)) {
					$nid = $objet->id_personal;
				}
            $insertar = "INSERT INTO personal VALUES('$nid','$nombre','$puesto','$direcc','$costo')";
				if(mysqli_query($conexion,$insertar)){
                    ?>
            <script type="text/javascript">
            alert("Se ingresaron los datos Correctamente");
            window.location="personas.html";
</script>
                <?php
                    
                }else {
                    ?>
                <script type="text/javascript">
                alert("Losentimos no se inserto nada vuelve a intentarlo mas tarde");
            window.location="personas.html";
</script>
<?php
                }

			//Libero recursos
			mysqli_close($conexion);

/*
	require("conexion.php");
		
	

				$query ="SELECT MAX(id_inmueble)+ 1 as id_inmueble FROM inmueble";
				$id=mysqli_query($mysqli,$query);
				$nid =0;
				while ($objet = mysqli_fetch_object($id)) {
					$nid = $objet->id_inmueble;
				}

				mysqli_query($mysqli,"INSERT INTO inmueble VALUES('$nid','$tipo','$dire','$dime','$cost')");

				
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("registrado con éxito");</script> ';

				header('Location: ../index.html');

		*/		
?>