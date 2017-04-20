<!DOCTYPE html>
<html>

	<head> 
		<meta charset = "utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    	<link rel="stylesheet" href="assets/css/style.css"/>
		<Title> Formulaire Dynamique </title>


		<!-- JS ET JQUERY pour refresh sans recharger la page-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script language="javascript">

		$(document).ready(function(){
			$(".refresh").click(function () {
		    	$(".imgcaptcha").attr("src","captcha.php?_="+((new Date()).getTime()));
		    });
		});

		// DANS UN  VRAI FORMULAIRE ON IRA VERIFIER LA CAPTCHA, VOIR DANS LA DEMO
		</script>
	</head>
	



	
  <body>

    <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">

		<div id="formulaire">
	  	<div class="panel panel-default">
		 	<div class="panel-heading">
		   		 <h3 style ="font-weight: bold;" class="panel-title"> Prise de rendez-vous </h3>
		  	</div>
		  	
		 	<div class="panel-body">
		 		<p style="color:red;"> * Champs obligatoire </p>
			 	<form  action="#null" method="post" class="form-horizontal" role="form">

			 		<!-- NOM--> <!-- A RETENIR <div class="FORM INLINE col-sm-6"> pour mettre les éléments côtes à côtes-->
					  <div class="form-group">
					  	<div>
							<label for="name" class="col-sm-3 control-label"> Nom <span class="star">*</span></label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" name="name" placeholder="Nom" autofocus required>
							    </div>
						</div>
						<button type="button" class="btn btn-danger"> Supprimer </button>
					  </div>

					  <!-- ADRESSE-->
					  <div class="form-group">
					  	<div>
							<label for="adress" class="col-sm-3 control-label"> Adresse <span class="star">*</span></label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" name="adress" placeholder="Adresse" required>
						    </div>	
						</div>
						<button type="button" class="btn btn-danger"> Supprimer </button>
					  </div>

					<!-- EMAIL-->
					  <div class="form-group">
						<div>
							<label for="email" class="col-sm-3 control-label"> Email <span class="star">*</span></label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" name="email" placeholder="Email" required>
							    </div>
						</div>
						<button type="button" class="btn btn-danger"> Supprimer </button>
					  </div>
					
					<!-- TELEPHONE-->
					  <div class="form-group">
						<div>
						    <label for="phoneNumber" class="col-sm-3 control-label"> Téléphone <span class="star">*</span></label>
							    <div class="col-sm-6">
							      <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" name="phoneNumber" placeholder="Numéro de téléphone" required>
							    </div>
						</div>
						<button type="button" class="btn btn-danger"> Supprimer </button>
					  </div>

					<!-- DATE RDV-->
						<div class="form-group">
							<div>
							    <label for="dateRdv" class="col-sm-3 control-label"> Date et heure du rendez-vous <span class="star">*</span></label>
								<div class="col-sm-6">
								    <input type="date"  name="dateRDV" class="form-control" required>
								    <input type="time" name="heureRDV" class="form-control" required>
								</div>
							</div>
							<button type="button" class="btn btn-danger"> Supprimer </button>
						</div>

						<!-- REMARQUE-->
						<div class="champs_text" id="0">
							<div class="form-group">
								<div>
							 	   <label for="remarque" class="col-sm-3 control-label"> Remarque (optionnel)</label>
								    <div class="col-sm-6">
								      <textarea class="form-control" rows="3" placeholder="Ecrivez une remarque si nécessaire." name="remarque"></textarea>
								    </div>
								</div>
								<button type="button" class="btn btn-danger"> Supprimer </button>
						  </div>
						</div>
							
						<!-- AJOUT CHAMP-->
						<div class="form-group">
					 	   <label for="ajout_champ" class="col-sm-3 control-label"> Ajoutez un champ :</label>
						    <div class="col-sm-8">
						    <button type="button" class="btn btn-info"> + </button>
						    </div>
					  </div>
					


						
						<!-- CAPTCHA-->
						<div class="form-group">
					 	   <label for="captcha" class="col-sm-3 control-label"> Captcha <span class="star">*</span> </label>
					 	   <div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Entrez le code" id="captcha" name="captcha" required>
								<img src="captcha.php" class="imgcaptcha" alt="captcha"  />
								<img src="assets/images/refresh.png" alt="reload" class="refresh" />
							</div>
						</div>
					  
				
					   <div class="form-group">
						    <!-- <div class="col-sm-offset-1 col-sm-10"> -->

						    <div class="button_submit">
						      <input class="btn btn-primary submit" type="submit" value="Envoyer" name="submit_button"/>
						     </div>
		 			   </div>
				 

				</form>
					
		 	</div><!-- Form-Panel-Body -->
		</div><!-- panel panel-default -->
		</div><!--  formulaire -->
	  </div> <!-- col-md-8 -->
	</div> <!-- row -->

    <script src="script.js"></script>
    </body>

</html>