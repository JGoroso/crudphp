<?php include("php/cabecera.php") ?>

<div class="description-container">
  <h1>CALCULADORA DE DESCUENTO</h1>
  <label for="validationCustom04" class="form-label">Seleccione Mascota ⬇</label>
  <div class="pets">
    <div id="perro">
      <button><img src="./assets/imgs/perro.png" alt="perro" srcset=""></button>
      <h6>Perros</h6>
    </div>
    <div id="gato">
      <button><img src="./assets/imgs/gato.png" alt="gato" srcset=""></button>
      <h6>Gatos</h6>
    </div>
    <div id="other">
      <button><img src="./assets/imgs/otheres.png" alt="otros" srcset=""></button>
      <h6>Otros</h6>
    </div>


  </div>


  <div class="col-md-4" style="margin: 20px auto">
    <label for="validationCustom04" class="form-label">Seleccione Producto</label>
    <select class="form-select" id="validationCustom04" required>

    </select>
  </div>
  <div class="col-md-4" style="margin: 20px auto">
    <label for="consulta">Valor producto s/ Masco Salud</label>
    <input type="text" name="consulta" class="form-control" disabled="disabled" id="consulta" />
  </div>

  <button type="submit" style="margin: 20px auto" malito="" id="btnSubmit" class="btn btn-primary" style="width: 20%;" enabled>Calcular descuento</button>
</div>
</div>
<script src="calculadora.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</body>

</html>