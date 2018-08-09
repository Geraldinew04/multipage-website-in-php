<?php include('Partials/header.php')?>
		
<?php //include('Assets/PHP/function.php')?>

<div class="title_form">
	 <h1>Vous souhaitez soutenir la cause ?</h1>
</div>

<div class="container">
	<div class="row">
			<div class="col-sm-2">
				
			</div>

			<div class="col-sm-8" id="myform">
				<form method="post" action="Assets/PHP/function.php" name="myform">
					<div class="form-group"> <!-- Nom -->
						<div class="row">
							<div class="col">
				    			<input type="text" class="form-control" name="FirstName" placeholder="First Name">
							</div>
							<div class="col">
				    			<input type="text" class="form-control" name="LastName" placeholder="Last Name">
							</div>
		 				</div>	
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col">
				    			<input type="email" class="form-control" id="exmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
							</div>
						</div>	
					</div>

					<div class="form-check">
						<div class="col">
							<div class="form-group">
								<div class="form-row">
								    <div class="col">
								     	<input class="form-check-input" type="checkbox" value="culotte" id="culotte" name="culotte">
						  				<label class="form-check-label" for="culotte">
						    			 Culotte
						  				</label>
								    </div>
								    <div class="col">
								       	<select class="custom-select my-1 mr-sm-2" id="underwearSize" name="size_culotte">
		    								<option selected>Size</option>
										    <option value="S">S</option>
										    <option value="M">M</option>
										    <option value="L">L</option>
										</select>
								    </div>
								    <div class="col">
								      <select class="custom-select my-1 mr-sm-2" id="underwearQte" name="qte_culotte">
		    								<option selected>QTE</option>
										    <option value="1">1</option>
										    <option value="2">2</option>
										    <option value="3">3</option>
										    <option value="2">4</option>
										    <option value="3">5</option>
										</select>							    
									</div>
								  </div>	
							</div>

							<div class="form-group">
								<div class="form-row">
									 <div class="col">
										<input class="form-check-input" type="checkbox" value="tshirt" id="tshirt" name="tshirt">
									  	<label class="form-check-label" for="tshirt">
									    T-shirt
									  	</label>
									</div>
								  	<div class="col">
									       	<select class="custom-select my-1 mr-sm-2" id="tshirtSize" name="size_tshirt">
			    								<option selected>Size</option>
											    <option value="S">S</option>
											    <option value="M">M</option>
											    <option value="L">L</option>
											</select>
									    </div>
									    <div class="col">
									      <select class="custom-select my-1 mr-sm-2" id="tshirtQte" name="qte_tshirt">
			    								<option selected>QTE</option>
											    <option value="1">1</option>
											    <option value="2">2</option>
											    <option value="3">3</option>
											    <option value="2">4</option>
											    <option value="3">5</option>
											</select>							    
										</div>
									  </div>	
								</div>

							<div class="form-group">
								<input class="form-check-input" type="checkbox" value="flyers" id="flyers" name="flyers">
							  	<label class="form-check-label" for="flyers">
							    flyers
							  	</label>
							</div>  	
						</div>
					</div>

					<hr>

					<h2>Adresse de livraison</h2>

					  	<div class="form-group">
						    <label for="inputAddress">Adresse</label>
						    <input type="text" class="form-control" id="inputAddress" placeholder="Rue" name="street">
					  	</div>

					  <div class="form-group">
					    	<label for="inputAddress2">Adresse 2</label>
					    	<input type="text" class="form-control" id="inputAddress2" placeholder="" name="street2">
					  </div>

					  <div class="form-row">
					    <div class="form-group col-md-6">
					     	<label for="inputCity">Ville</label>
					     	<input type="text" class="form-control" id="inputCity" name="city">
					    </div>
					    <div class="form-group col-md-2">
					      	<label for="inputState">Code postal</label>
					     	<input type="text"  class="form-control" id="inputZip" name="zip">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputZip">Pays</label>
					      <input type="text" class="form-control" id="inputCountry" name="country">
					    </div>
					  </div>
					  <button type="submit" class="btn btn-warning text-white">Envoyer</button>				
				</form>
			</div>

			<div class="col-sm-2">
				
			</div>
		</div>
	</div>
	<p>&nbsp;</p>
<?php include('Partials/footer.php')?>