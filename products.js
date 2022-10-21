const selectPerro = document.getElementById("perro");
const selectGato = document.getElementById("gato");
const selectOther = document.getElementById("other");
const firstDiv = document.getElementById("first");
const secondDiv = document.getElementById("second");
const thirdDiv = document.getElementById("third");

selectPerro.addEventListener("click", () => {
  firstDiv.innerHTML = `<img src='https://planetaperruno.com/wp-content/uploads/2020/08/cama-para-perros-barata-marca-mubytree-1024x737.jpg' alt='cuchita'/><h5>Cuchas ergonomicas</h5>`;
  secondDiv.innerHTML = `<img src='https://toquipetshop.com.ar/wp-content/uploads/2019/02/derma-defence.png' alt='cuchita'/><h5>Alimentos especiales</h5>`;
  thirdDiv.innerHTML = `<img src='https://www.diariosigloxxi.com/multimedia/images/1462458442_accesorios_para_perros_innovadores.jpg' alt='tarros'/><h5>Innovadores</h5>`;
});
selectGato.addEventListener("click", () => {
  firstDiv.innerHTML = `<img src='https://m.media-amazon.com/images/I/81efFOXgj0L._AC_SX466_.jpg' alt='suple'/><h5>Suplementos</h5>`;
  secondDiv.innerHTML = `<img src='https://www.hillspet.es/content/dam/pim/hills/es_es/sd/dry/sp-feline-science-plan-adult-optimal-care-with-tuna-dry-productShot_500.png' alt='alimentos'/><h5>Alimentos especiales</h5>`;
  thirdDiv.innerHTML = `<img src='https://www.gatostienda.es/pics/2022/02/24/pewingo-fuente-para-perros-2l-silenciosa-bebedero-gatos-automatica-con-agua-nivel-led-indicadora-filtro-de-carbon-activadoy-4-juguetes-fuente-para-75994.jpg' alt='tarros'/><h5>Innovadores</h5>`;
});
selectOther.addEventListener("click", () => {
  firstDiv.innerHTML = `<img src='https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/ropa-mascota-polo-ralph-lauren-1634739723.jpg?crop=1.00xw:0.715xh;0,0.154xh&resize=480:*' alt='suple'/><h5>Ropa</h5>`;
  secondDiv.innerHTML = `<img src='https://www.icinf.cl/img-5_105629/images-3m-5m-retr%C3%A1ctil-correa-de-perro-cachorro-de-gato-de.jpg' alt='alimentos'/><h5>Correa retractil especiales</h5>`;
  thirdDiv.innerHTML = `<img src='https://www.gatostienda.es/pics/2022/02/24/pewingo-fuente-para-perros-2l-silenciosa-bebedero-gatos-automatica-con-agua-nivel-led-indicadora-filtro-de-carbon-activadoy-4-juguetes-fuente-para-75994.jpg' alt='tarros'/><h5>Juguetes</h5>`;
});
