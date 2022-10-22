<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>MascoSalud - Agregar Productos</title>
</head>

<body>

  <?php include("conexionbd.php");
  $txtNombre = (isset($_POST['nombreproducto'])) ? $_POST['nombreproducto'] : "";
  $txtCategoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : "";
  $intPrice = (isset($_POST['precio'])) ? $_POST['precio'] : "";
  $txtImage = (isset($_POST['imagen'])) ? $_POST['imagen'] : "";
  $agregar = (isset($_POST['agregar'])) ? $_POST['agregar'] : "";



  if ($agregar) {
    $addSQL = $conexion->prepare("INSERT INTO `products` (`nombre`, `categoria`, `precio`, `imagen`) VALUES (:nombre, :categoria, :precio, :img);");
    $addSQL->bindParam(':nombre', $txtNombre);
    $addSQL->bindParam(':categoria', $txtCategoria);
    $addSQL->bindParam(':precio', $intPrice);
    $addSQL->bindParam(':img', $txtImage);
    $addSQL->execute();
  }


  ?>

  <form method="post" class="form-signin">
    <div class="form-group">
      <label>Nombre producto <span class="text-danger">*</span></label>
      <input type="text" name="nombreproducto" id="nombreproducto" class="form-control" placeholder="Nombre de producto" required>
    </div>
    <div class="form-group">
      <label>Categoria <span class="text-danger">*</span></label>
      <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Ingrese categoria" required>
    </div>
    <div class="form-group">
      <label>Precio<span class="text-danger">*</span></label>
      <input type="number" name="precio" id="precio" class="form-control" placeholder="Ingrese precio" required>
    </div>
    <div class="form-group">
      <label>Imagen <span class="text-danger">*</span></label>
      <input type="text" name="imagen" id="imagen" class="form-control" placeholder="Ingrese imagen" required>
    </div>
    <div class="form-group">
      <button type="submit" name="agregar" value="agregar" id="submit" class="btn btn-success mt-2 w-100"> Agregar producto</button>
    </div>
    <div class="form-group">
      <a href="admin.php" class="btn btn-info mt-2 w-100">Volver</a>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>