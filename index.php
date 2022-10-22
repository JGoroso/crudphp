<?php include("php/cabecera.php") ?>
<?php include("conexionbd.php") ?>
<?php
$txtId  = (isset($_POST['txtId'])) ? $_POST['txtId'] : "";
$delete = (isset($_POST['delete'])) ? $_POST['delete'] : "";

$selectAllSQL = $conexion->prepare('SELECT * FROM products');
$selectAllSQL->execute();
//Fetchall -> Recupera todos los registros para guardarlo en listaproductos.
$listaProductos = $selectAllSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<section class="hero-container">
  <div class="text">
    <h1>¿Conoces MascoSalud? <span>Te cuento</span></h1>
    <p>Somos la primer "obra social" desinada a tu mascota. L Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s,</p>
    <div class="button-group">
      <a href="/nosotros.html"> <button type="button" class="btn btn-dark">Nosotros</button></a>
      <a href="/contacto.html"><button type="button" class="btn btn-warning">Contacto</button></a>
      <a href="/ubicacion.html"> <button type="button" class="btn btn-success">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z">
            </path>
            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
          </svg>
          ¿Donde estamos?
        </button></a>
    </div>
  </div>
  <div class="img">
    <img src="/assets/imgs/hero.png" alt="" srcset="">
  </div>
</section>
<section class="products-container">
  <h2>¿Sabias que... </h2>
  <h5>Siendo parte de mascosalud podras acceder a los mejores beneficios en los siguientes productos...</h5>

  <!-- <div class="pets">
    <div id="perro">
      <button><img src="./assets/imgs/perro.png" alt="perro" srcset=""></button>
      <h6>Perros</h6>
    </div>
    <div id="gato">
      <button><img src="./assets/imgs/gato.png" alt="gato" srcset=""></button>
      <h6>Gatos</h6>
    </div>
    <div id="other">
      <but ton><img src="./assets/imgs/otheres.png" alt="otros" srcset=""></button>
        <h6>Otros</h6>
    </div> -->
  </div>

  <div class="products-grid">
    <?php foreach ($listaProductos as $product) { ?>
      <div class="first-column" id="products">
        <div class="div1" id="first">
          <img src='<?php echo $product['imagen']; ?> alt=' suple' />
          <h5><?php echo $product['nombre']; ?></h5>
          <div class="div2">
            <h6 class="categoria"><?php echo $product['categoria']; ?></h6>
            <h6 class="precio">$<?php echo $product['precio']; ?></h6>
          </div>
        </div>

      </div>
    <?php } ?>
  </div>
  </div>

</section>



<footer>

</footer>


<script src="products.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>