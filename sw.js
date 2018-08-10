/**********POP UP AGE**********/
// function ageVerif() {

//  let ageVerif = prompt("Please enter your age !");
  

//  do{
//    if (ageVerif < 18) {
//      document.location.href="https://www.imdb.com/";
//    }else if (!Number(ageVerif) ) {
//      alert("pas cool man ! Ecris moi un nombre");
//      ageVerif = prompt("Please enter your age !");
//    }else if(ageVerif== null || ageVerif == "" ){
//      alert("Come on man! Ecris moi un nombre");
//      ageVerif = prompt("Please enter your age !");
//    }
//  }while(Number(ageVerif)>=18)
// }

/**********POP UP CONTACT**********/
// function recup() {
//  var name = document.getElementById("fname").value;
//  var lastname = document.getElementById("lname").value;
//  var email = document.getElementById("exampleFormControlInput1").value;
//  var subject =  document.getElementById("subject").value;
//  var message = document.getElementById("message").value;



/**********BUTTON UP**********/
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});

/**********loginRegister**********/
function loginRegister(){
  $("#buttonLogin").click(function(){
    $("#loginModal").modal();
  });
  $("#buttonRegister").click(function(){
    $("#registerModal").modal();
  });
  $("#buttonSwitch").click(function(){
    $("#loginModal").modal("hide") && $("#registerModal").modal();
  });
}


$(document).ready(function(){
  // ageVerif();
  loginRegister();
});

  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('./service-worker.js').then(function(registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function(err) {
        // registration failed :(
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }
