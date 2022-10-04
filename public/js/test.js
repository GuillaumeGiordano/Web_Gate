  
function myFunction() 
{
  result = document.getElementById("cadena");

  nom = document.getElementById("nom");
  prenom = document.getElementById("prenom");
  portable = document.getElementById("portable");
  service = document.getElementById("service");

  if(result.value == "Mode lecture")
  {
    result.value = "Mode modif";
    
    nom.readOnly = false;
    prenom.readOnly = false;
    portable.readOnly = false;
    
  }else
  {
    result.value = "Mode lecture";
    
    nom.readOnly = true;
    prenom.readOnly = true;
    portable.readOnly = true;
    
  }
}

function showHide (id)
{
      let togg1 = document.getElementById("togg1");
      let d0 = document.getElementById("d0");

      togg1.addEventListener("click", () => {

      //recuperation de l'etat actuel de l'element et affectation de son opposé
      var showHide = (document.getElementById(id).style.display != 'none' ) ? 'none' : 'block';
      //nouvelle valeur pour l'element id
      // document.getElementById(id).style.display = showHide;
      d0.style.display = showHide;

     //report des valeurs dans un champ caché du formulaire
     var id_input = id+'_affiche';
     var input;
     if (input = document.getElementById(id_input)) input.value = showHide;

      })
}


    // SWITCH
    window.onload = () => {
      let boutons = document.querySelectorAll(".essai");
      for (let bouton of boutons) {
          bouton.addEventListener("click", activer);
      }
    }

    function activer(){
      let xmlhttp = new XMLHttpRequest;
      xmlhttp.open('GET', 'activeUser.php?id='+this.dataset.id ,true);
      xmlhttp.send();
    }