
   <?php
    include('Partials/header.php');
?>

 <link rel="stylesheet" href="formulaire_contact.css"/>
<link rel="stylesheet" type="text/css" href="../../Assets/css/style.css">
    <div class="container_form">
     
     
  <form method="post" action="envois_mail.php" enctype="multipart/form-data" onsubmit="return false;" id="form_contact">
      <h4> FORMULAIRE DE CONTACT </h4>
  <div class="div_une_ligne div_mail">
        <input type="mail" placeholder="mail" name="mail" id="mail"/>
  </div>
        
    <div class="div_deux_ligne"> 
         <input type="text" placeholder="nom" name="nom" id="nom"/>
         
          <input type="text" placeholder="prenom" name="prenom" id="prenom"/>
      </div>
          
        <div class="div_une_ligne">
           <select name="objet">
                  <option value="demande d'informations">Demande d'informations
                  </option>
                   <option value="Commande">Commande
                  </option>
              </select>
      </div>
            <div class="div_une_ligne">   
               <textarea name="message" id="textarea_message"></textarea>
      </div>
               
            <div class="div_deux_ligne">
             <select name="format">
                 <option value="html"> html </option>
                 <option value="txt"> texte </option>
                 
             </select>
  
          <input type="file" name="photo" id="photo"/>
      </div>
  
          <button id="button_form" >Contactez-moi</button>

  </form>
  <?php 
        
        
        ?>
  
</div> 

<script src="verif_formulaire.js"></script> 

<?php
    include('Partials/footer.php');
?>
 

  
  
  
  
  
  
  
  <!--
  
   CONTACT
   
            Mme <input type="radio" name="titre" value="Mme">
            Melle <input type="radio" name="titre" value="Melle">
            Mr <input type="radio" name="titre" value="Mr">
         
               Nom 
          
              <input type="text" placeholder="nom" name="nom" id="nom"/>
         
               Prénom 
           
              <input type="text" placeholder="prenom" name="prenom" id="prenom"/>
        
               email 
           
              <input type="mail" placeholder="mail" name="mail" id="mail"/>
        
         
               objet
           
              <select name="objet">
                  <option value="demande d'informations">Demande d'informations
                  </option>
                   <option value="Commande">Commande
                  </option>
              </select>
        
               Votre message
           
              <textarea name="message" id="textarea_message"></textarea>
       
               photo
          
              <input type="file" name="photo" id="photo"/>
         
       
               format de réponse souhaité
           
            HTML <input type="radio" name="format" value="HTML"/>
            Texte <input type="radio" name="format" value="Texte"/>
         
               <button type="" id="button_form">Contactez-moi</button>
       
</form>
<script src="verif_formulaire.js"></script>
<!--
<form method="POST" action="envois_mail.php" enctype="multipart/form-data">
      On limite le fichier à 100Ko
     <input type="hidden" name="MAX_FILE_SIZE" value="100000">
     Fichier : <input type="file" name="photo">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
-->