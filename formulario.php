<?php
include "conexiones.php";

$user_id=null;
$sql1= "select * from person where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="id_producto">id_producto</label>
    <input type="text" class="form-control" value="<?php echo $person->id_producto; ?>" name="id_producto" required>
  </div>
  <div class="form-group">
    <label for="nombre">nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="piezas">piezas</label>
    <input type="text" class="form-control" value="<?php echo $person->piezas; ?>" name="piezas" required>
  </div>
  <div class="form-group">
    <label for="precio">precio</label>
    <input type="text" class="form-control" value="<?php echo $person->precio; ?>" name="precio" >
  </div>
  <div class="form-group">
    <label for="total">total</label>
    <input type="text" class="form-control" value="<?php echo $person->total; ?>" name="total" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra ese producto intente de nuevo buscar</p>
<?php endif;?>