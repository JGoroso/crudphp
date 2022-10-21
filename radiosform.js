const radiobtn = document.getElementById("radios");
const checkOne = document.getElementById("flexRadioDefault1");
const checkTwo = document.getElementById("flexRadioDefault2");
const consulta = document.getElementById("consulta");



const isRadioSelected = (nombre) => {
  radiobtn.addEventListener("click", () => {
    if (checkOne.checked) {
      consulta.value = `$800`;
      console.log(nombre)
    } else if (checkTwo.checked) {
      consulta.value = `$1500`;
    }
  });
};

isRadioSelected()


