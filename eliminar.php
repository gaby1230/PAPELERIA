<?php

if(!empty($_GET)){
			include "conexiones.php";
			
			$sql = "DELETE FROM person WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente tu producto no deseado.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar tu producto intente de nuevo.\");window.location='../ver.php';</script>";

			}
}

?>