
<?php include('Partials/header.php')?>      
<?php 
    if(isset($_GET['messageStatus'])){
        $status = "<p class=''>Votre message a bien été envoyé ! Merci !</p>";
    }else {
        $status = "";
    }
?>

<div class="title">
        <h1>Contactez-nous</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-10 mx-auto" id="form_contact">
            <form method="post" action="envois_mail.php" enctype="multipart/form-data" id="form_contact">
            <?= $status?>
                <div class="row"> 
                    <div class="col-sm-6">
                        <div class="form-group"> <!-- Name -->
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="Firstname" name="FirstName" placeholder="First Name">
                                </div>
                            </div>	
                        </div>
                        <div class="form-group"> <!--LastName -->
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
                                </div>
                            </div>	
                        </div>
                        <div class="form-group"> <!--email-->
                            <div class="row">
                                <div class="col">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>	
                        </div>
                    </div>          
                    <div class="col-sm-6">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder = "Votre message"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <select name="format">
                                        <option value="html"> html </option>
                                        <option value="txt"> texte </option>    
                                    </select>

                                    <input type="file" name="photo" id="photo"/>
                                </div>
                            </div>
                        </div> 
                        <button type="submit" id="button_form" onsubmit="return false;" class="btn btn-warning text-white float-right">Envoyer</button>	
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>

    <p>&nbsp;</p>


	<script src="verif_formulaire.js"></script> 

<?php include('Partials/footer.php')?>