<?php

	$nombre=$_POST['nombre'];
	$direcc=$_POST['direcc'];
	$telefono= $_POST['telefono'];
	
$conexion = mysqli_connect("localhost", "root","Admin123", "avihome2");

			if (!$conexion)
			{
				die("\nError de Conexión: " . mysqli_connect_errno());
				exit();
			}

			$query ="SELECT MAX(id_cliente)+ 1 as id_cliente FROM cliente";
				$id=mysqli_query($conexion,$query);
				$nid =0;
				while ($objet = mysqli_fetch_object($id)) {
					$nid = $objet->id_cliente;
				}
            $insertar = "INSERT INTO cliente VALUES('$nid','$Nombre','$direcc','$telefono')";
				if(mysqli_query($conexion,$insertar)){
                    ?>
            <script type="text/javascript">
            alert("Se ingresaron los datos Correctamente");
            window.location="cliente.html";
</script>
                <?php
                    
                }else {
                    ?>
                <script type="text/javascript">
                alert("Losentimos no se inserto nada vuelve a intentarlo mas tarde");
            window.location="inmueble.html";
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