alert("Bienvenue sur le site Arcadia");

let choix = true;
function change() {
  let button = document.getElementById("button");
  if (choix == true) {
    button.style.backgroundColor = "red";
    choix = false;
  } 
  else {
    button.style.backgroundColor = "#F8F5E3";
    choix = true;
  }
}
