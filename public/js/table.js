



document.addEventListener("DOMContentLoaded",()=>{
    
    const rows = document.querySelectorAll("tr[data-href]");
    rows.forEach(row =>{
        row.addEventListener("click", ()=>{
          if (window.confirm("Start to picking")) {
            // Code à exécuter si l'utilisateur clique sur le bouton "OK"
            window.location.href = row.dataset.href;
          } else {
            // Code à exécuter si l'utilisateur clique sur le bouton "Annuler"
            return;
          }
           
        });
    })
});

const barcode = document.getElementById('barcode');
console.log(barcode);
console.log(barcode.textContent);

const itemInput = document.querySelector("input[type=text]");

itemInput.addEventListener("blur", myEvent);

function myEvent(e) {
  console.log(e.target.value);
  const value = e.target.value;
  
  if(value.length == 10){
    document.getElementById('post-barcode').submit();
  }
}

function produitCode() {
  var valeur = prompt("Entrez une valeur :");
  console.log(valeur);
}

const amount = {$item};
if(amount >1){
  for(i=2;i<=amount;i++){
    prompt("Ajouter du produit","ok");
  }
}