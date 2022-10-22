<?php include("cabecera.php") ?>
<?php include("conexionbd.php") ?>
<?php
$txtId  = (isset($_POST['txtId'])) ? $_POST['txtId'] : "";
$delete = (isset($_POST['delete'])) ? $_POST['delete'] : "";

$selectAllSQL = $conexion->prepare('SELECT * FROM products');
$selectAllSQL->execute();
//Fetchall -> Recupera todos los registros para guardarlo en listaproductos.
$listaProductos = $selectAllSQL->fetchAll(PDO::FETCH_ASSOC);


if ($delete) {
  $deleteFromSQL = $conexion->prepare('DELETE FROM products WHERE id=:id');
  $deleteFromSQL->bindParam(':id', $txtId);
  $deleteFromSQL->execute();
  
}
?>


<div class="container mt-10">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-xs-6">
            <h2>Administrador de <b>Productos</b></h2>
          </div>
          <div class="col-xs-6">
            <a href="create-product.php" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar producto</span></a>
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($listaProductos as $product) { ?>
            <tr>
              <td><?php echo $product['nombre']; ?></td>
              <td><?php echo $product['categoria']; ?></td>
              <td><?php echo $product['precio']; ?></td>
              <td>
                <form method="post">
                  <!-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
                  <input type="hidden" name="txtId" id="txtId" value="<?php echo $product['id']; ?>">
                  <button type="submit" class="delete" name="delete" value="delete"><i class="material-icons icon-red" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</body>

</html>