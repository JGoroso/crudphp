const btnsubmit = document.getElementById("btnSubmit");

const isSubmit = () => {
  btnsubmit.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Tu informacion fue enviada");
  });
};
