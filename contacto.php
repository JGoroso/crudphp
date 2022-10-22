<?php include("php/cabecera.php") ?>
<div class="content">
  <div class="description-container">
    <h1>CONTACANOS</h1>
    <p>LLena el formulario y en breve te contactaremos</p>
  </div>


  <section style="display: flex; justify-content: center;">
    <form class="row g-3 needs-validation" id="formMasco">
      <div class="col-md-4">
        <label for="name" class="form-label">Nombre completo</label>
        <span id="name-error"></span>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="col-md-4">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartiremos tu email con nadie.</div>
      </div>
      <div class="col-md-4">
        <label for="name" class="form-label">Telefono (ej: 5429923##)</label>
        <input type="text" class="form-control" id="telefono">
      </div>

      <div class="col-md-4" id="radios">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Ya tengo MascoSalud
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            No tengo MascoSalud
          </label>
        </div>
      </div>
      <div class="col-md-4">
        <label for="consulta">Valor consulta:</label>
        <input type="text" name="consulta" class="form-control" disabled="disabled" id="consulta" />
      </div>

      <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Tipo de animal</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Elegir...</option>
          <option>Perro</option>
          <option>Gato</option>
          <option>Otro</option>
        </select>
      </div>
      <div style="width: 100%; display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <div class="md-4 form-check mt-5">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Todos los datos ingresados son reales</label>
        </div>
        <button type="submit" malito="" id="btnSubmit" class="btn btn-primary" style="width: 20%;">Enviar</button>
      </div>
    </form>
  </section>
</div>
<footer>

</footer>
<script src="controls.js"></script>
<script src="alertify.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="formenviado.js"></script>
<script src="radiosform.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</body>

</html>