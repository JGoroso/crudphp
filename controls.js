let nameInput = document.getElementById("name");
let telephoneInput = document.getElementById("telefono");
let emailInput = document.getElementById("exampleInputEmail1");
const btnSubmit = document.getElementById("btnSubmit");
const checkReal = document.getElementById("exampleCheck1");

const expresionName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
const expresionEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
const expresionPhone = /^\d+$/;

btnSubmit.addEventListener("click", (e) => {
  e.preventDefault();
  if (!expresionName.test(nameInput.value) || nameInput.value == null) {
    alertify.error("El campo es invalido");
    document.getElementById("name").style.boxShadow = "0 0 5px red";
  } else {
    document.getElementById("name").style.boxShadow = "0 0 5px green";
  }
  console.log(emailInput);
  if (!expresionEmail.test(emailInput.value)) {
    alertify.error("El campo solo acepta emails");
    document.getElementById("exampleInputEmail1").style.boxShadow =
      "0 0 5px red";
  } else {
    document.getElementById("exampleInputEmail1").style.boxShadow =
      "0 0 5px green";
  }

  if (!expresionPhone.test(telephoneInput.value)) {
    alertify.error("El campo solo acepta numeros");
    document.getElementById("telefono").style.boxShadow = "0 0 5px red";
  } else {
    document.getElementById("telefono").style.boxShadow = "0 0 5px green";
  }
  console.log("enviado");
});

function isChecked() {
  checkReal.addEventListener("click", () => {
    if (checkReal.checked) {
      btnSubmit.disabled = false;
    } else {
      btnSubmit.disabled = true;
    }
  });
}
