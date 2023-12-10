<?php

include "conexiones.php";

$user_id=null;
$sql1= "select * from person where id_producto like '%$_GET[s]%' or nombre like '%$_GET[s]%' or piezas like '%$_GET[s]%' or precio like '%$_GET[s]%' or total like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>id_producto</th>
	<th>nombre</th>
	<th>producto</th>
	<th>piezas</th>
	<th>total</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id_producto"]; ?></td>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["piezas"]; ?></td>
	<td><?php echo $r["precio"]; ?></td>
	<td><?php echo $r["total"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro de seleccionar eso?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados al agregar</p>
<?php endif;?>
