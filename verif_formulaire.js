let button = document.getElementById('button_form');
let nom = document.getElementById('LastName');
let prenom = document.getElementById('Firstname');
let mail = document.getElementById('email');
let form = document.getElementById('form_contact');
/* let test = nom.p;
 */console.log(nom.value);
function surligne(champ, erreur)
{
    if(erreur){
        champ.style.border = "1px solid #fba";
    }
    else{
        champ.style.backgroundColor = "";
    }
}


// FUCNTION POUR VERIFIER LE CHAMP NOM DANS LE FORMULAIRE
function verifNom(noms){
    if( noms > 20 ){
        
        surligne(nom, true);
    }
    
    else{surligne(nom, false);}
/*     console.log(nom);
 */}
/* verifNom(nom.value);
 */
// FUCNTION POUR VERIFIER LE CHAMP PRENOM DANS LE FORMULAIRE

function verifPrenom(prenoms){
    if(prenoms.length < 1 || prenoms > 20){
        surligne(prenom, true);
    }
    
    else{surligne(prenom, false);}
}
/* verifNom(prenom.value);
 */
// FUCNTION POUR VERIFIER LE CHAMP MAIL DANS LE FORMULAIRE
function verifMail(mails)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(mails))
   {
      surligne(mail, true);
      return false;
   }
   else
   {
      surligne(mail, false);
    
    $verif_of = "true";
    return $verif_of;
   }
}



button.addEventListener('click', function(){
    console.log(nom.value);
    verifNom(nom.value);
    verifPrenom(prenom.value);
    verifMail(mail.value);
    if($verif_of == 'true'){
        console.log("coucou");
        form.onsubmit = "return true;"
    }
      
})