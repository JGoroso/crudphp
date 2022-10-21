let productPerro = ["Cucha 2.0", "Alimento Pedigree", "Correa Especial"];
let preciosPerro = [1200, 4000, 300];
let productGato = ["Bebedero Tecnologico", "Juguete raton", "Afilador de uñas"];
let preciosGato = [4000, 2000, 5300];
let productOtro = ["Pack Coballo", "Ropa Cosplay", "Pack Conejos"];
let preciosOtro = [2200, 1200, 3000];
const radiobtn = document.getElementById("radios");
const btn = document.getElementById("btnSubmit");
const options = document.getElementById("validationCustom04");
const consulta = document.getElementById("consulta");
const result = document.getElementById("result");

let calculate = 0;

document.getElementById("perro").addEventListener("click", (e) => {
  e.preventDefault();
  options.innerHTML = "";
  for (let i = 0; i < productPerro.length; i++) {
    options.innerHTML +=
      "<option value='" +
      preciosPerro[i] +
      "'>" +
      productPerro[i] +
      "</option>";
    consulta.value = `$ ${options[0].value}`;
  }
});

document.getElementById("gato").addEventListener("click", (e) => {
  e.preventDefault();
  options.innerHTML = "";
  for (let i = 0; i < productGato.length; i++) {
    options.innerHTML +=
      "<option value='" + preciosGato[i] + "'>" + productGato[i] + "</option>";
    consulta.value = `$ ${options[0].value}`;
  }
});

document.getElementById("other").addEventListener("click", (e) => {
  e.preventDefault();
  document.getElementById("validationCustom04").innerHTML = "";
  for (let i = 0; i < productOtro.length; i++) {
    options.innerHTML +=
      "<option value='" + preciosOtro[i] + "'>" + productOtro[i] + "</option>";
    consulta.value = `$ ${options[0].value}`;
  }
});
options.addEventListener("click", () => {
  if (options[0].selected) {
    calculate = options[0].value * 0.45;
    consulta.value = `$ ${options[0].value}`;
  } else if (options[1].selected) {
    calculate = options[1].value * 0.25;
    consulta.value = `$ ${options[1].value}`;
  } else {
    calculate = options[2].value * 0.65;
    consulta.value = `$ ${options[2].value}`;
  }
});

btn.addEventListener("click", () => {
  if (options[0].selected) {
    calculate = options[0].value * 0.45;
    alert("El descuento es de " + calculate);
  } else if (options[1].selected) {
    alert("El descuento es de " + calculate);
  } else {
    alert("El descuento es de " + calculate);
  }
});
