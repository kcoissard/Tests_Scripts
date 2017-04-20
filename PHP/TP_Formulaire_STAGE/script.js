//VARIABLES GLOBALES
var d = document; 
var add = d.getElementById("btn btn-info"); //bouton ajout de champs
var deleteButton = d.getElementsByClassName("btn btn-danger"); //bouton suppression champ
var backup = d.getElementById("0").cloneNode(true);
var previousId;
var checkNeeded=[];


for(var i = 0; i < deleteButton.length; i++){ // ajout événement click sur les boutons "-" deja presents
  deleteButton[i].addEventListener("click",supprimerLigne);
}

// ajout événement click sur les boutons "+"
add.addEventListener("click",function(){
  var clone;
  var objectToClone = d.getElementsByClassName("champs_text"); 
  var target  = d.getElementById("formulaire");
 
  for(var i = 0; i < objectToClone.length; i++){  // id du dernier élément trouvé
    if(i === objectToClone.length-1){
      previousId = parseInt(objectToClone[i].getAttribute("id"));
    }
  }



  clone = backup.cloneNode(true);
  // on incrémente l'idmax puis on le met sur le clone
  clone.setAttribute("id",++previousId);
  // on ajoute le clone à la suite
  target.appendChild(clone);


  var newDelete = clone.getElementsByClassName("btn btn-danger");

  for(var j = 0; j < newDelete.length; j++){  // ajout fonction de suppression
    newDelete[j].addEventListener("click",supprimerLigne);
  }
});



function supprimerLigne(event){
  var el = event.target;
  var parent = el.parentNode;
  var grandParent = parent.parentNode;
  var id = parseInt(parent.getAttribute("id"));

  grandParent.removeChild(parent);
  for(var i = 0; i < checkNeeded.length; i++){
    if(checkNeeded[i] === id){
      checkNeeded.splice(i,1);
    }
  }
}
