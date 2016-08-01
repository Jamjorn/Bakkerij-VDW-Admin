@extends('app')



@section('content')


<script type="text/javascript">
var mainchecked = false;  
    function checkAll() {


        //get all input elements
        var inputs = document.getElementsByTagName('input');
        
        //if the box is being checked
        if(!mainchecked) {
                    
            //loop through all inputs
            for(i = 0; i < inputs.length; i++) {
                //does it have autocheck?
                if(inputs[i].className == 'autocheck') {
                    //then check the box!
                    inputs[i].checked = "checked";  
                	 
                }
            }
            mainchecked = true;
        } else {
            //box is being unchecked, uncheck everything
            
            for(i = 0; i < inputs.length; i++) {
                  if(inputs[i].className == 'autocheck') {
                    //then check the box!
                    inputs[i].checked = "";  
                }
            }
            mainchecked = false;
        }
       
    }

</script><script type="text/javascript">
    function ShowHideDiv(previewt) {
        var previewtext = document.getElementById("previewtext");
        previewtext.style.display = previewt.checked ? "block" : "none";
    }
</script>


  <div class="contentWapper col-xs-10 col-xs-push-2 no-padding">



  	<div class="dbWhiteSpaceBig col-xs-12"></div>

  	  	<div class="col-xs-5 no-padding"><span class="productOverview">Product Toevoegen</span>
  	  		<div class="afbeeldingInvoegen col-xs-12 ">
  	  			<div class="overlayWhite col-xs-12 no-padding">
  	  				<div class="col-xs-3">
  	  				</div>
  	  				<div class="marginLeft col-xs-1"><div class="edit">
	  	  				<span class="glyphicon glyphicon-pencil bigEdit"></span>
	  	  			</div>
	  	  			<div class="col-xs-8">
  	  				</div>
	  	  		</div>


  	  		</div>
  	  	</div>
  	  	<div class="dbWhiteSpaceBig col-xs-12"></div>

  	  	<div class="col-xs-11 col-xs-push-1 no-padding">
  	  		<div class="col-xs-4  no-padding">
  	  			<div ng-app="">				
					<input type="text" ng-model="naam" placeholder="productnaam">
				</div>
  	  	
  	  		</div>
  	  		<div class="col-xs-8 no-padding">
  	  			<div class="edit">
  	  				<span class="glyphicon glyphicon-pencil bigEdit"></span>
	  	  		</div>
	  	  	</div>
  	 	 </div>

  	 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  	
  	  	<div class="col-xs-11 col-xs-push-1 no-padding">
  	  			<div class="col-xs-4  no-padding">
  	  			<div ng-app="">				
					<input type="text" ng-model="prijs" placeholder="Prijs">
				</div>
  	  	
  	  		</div>
  	  		<div class="col-xs-8 no-padding">
  	  			<div class="edit">
  	  				<span class="glyphicon glyphicon-pencil bigEdit"></span>
	  	  		</div>
	  	  	</div>
  	 	 </div>

  	 	  <div class="dbWhiteSpaceSmall col-xs-12"></div>

  	  	<div class="col-xs-11 col-xs-push-1 no-padding">
  	  		<div class="col-xs-4  no-padding">
  	  			<div ng-app="">				
					
					<textarea class="productToevoegen textarea col-xs-12" resize="none" ng-model="beschrijving" value="" rows="4" name="'comments'" id="message" placeholder="beschrijving" required></textarea>
			
				</div>
			</div>
  	  		<div class="col-xs-8 no-padding">

  	  			<div class="edit">
  	  				<span class="glyphicon glyphicon-pencil bigEdit"></span>
	  	  		</div>
	  	  	</div>
  	 	 </div>

  	 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>

		 <div class="dbWhiteSpaceBig col-xs-12">
				<div class="checkbox col-xs-1 no-padding">
					<label for="chkPassport">
						<input type="checkbox"id="chkPassport" onclick="javascript:checkAll();ShowHideDiv(this)">
						<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
						  </label>
		        </div>
		        <div class="col-xs-11">PostNl</div>
		      

		</div>
			<form id="product-form" action="" method="post" role="form" style="display: block;">
									<div class="checkbox col-xs-1">
										<label>
											<input type="checkbox" value="">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
											  </label>
							        </div>
									<div class="form-group col-xs-11">
										<input type="text" ng-model="warning" name="warning" id="warning" tabindex="1" class="form-control" placeholder="Type uw waarschuwing" value="">
								</div>

									<div class="checkbox col-xs-1">
										<label>
											<input type="checkbox" value="">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
											  </label>
							        </div>
									<div class="form-group col-xs-11">
										

											<select class="js-example-basic-multiple" multiple="multiple">
											  		<option value="Ma">Maandag</option>
											  		<option value="Di">Dinsdag</option>
											  		<option value="Wo">Woensdag</option>
											  		<option value="Do">Donderdag</option>
											  		<option value="Vr">Vrijdag</option>
											  		<option value="Za">Zaterdag</option>
											   		<option value="Zo">Zondag</option>
											    
											</select>
									</div>
									<div class="checkbox col-xs-1">
										<label>
											<input type="checkbox" value="">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
											  </label>
							        </div>
									<div class="form-group col-xs-11">
										<input type="text" ng-model="prijsAanbieding" name="prijsAanbieding" id="price" tabindex="2" class="form-control" placeholder="Prijs aanbieding">
									</div>

							
								</form>

								 <div class="dbWhiteSpaceBig col-xs-12"></div>

								<div class="col-xs-12">
								<div class="col-xs-4"><div class="productview">
									<a href="#" class="btn btn-success btn-lg btn-block hugeAdmin">Voeg product toe</a>
									</div> 
									<div class="col-xs-8"></div>
								</div>
								 <div class="dbWhiteSpaceBig col-xs-12"></div>

								</div>

  	</div>

  <div class=" previewScreen col-xs-2">
  	<div class="afbeeldingInvoegenPreview col-xs-12 no-padding no-margin">
  	  			<div class="overlayWhitePreview col-xs-12 no-padding no-margin">
  	  				

  	  		</div>
  	  	</div>
  	<div class="col-xs-12"><p>Productnaam: </p>	<div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  	<div class="col-xs-12"><span class="prevText"><p ng-bind="naam"></p><span></div>
  
  	<div class="col-xs-12"><p>Prijs:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  	<div class="col-xs-12"><span class="prevText">	<p ng-bind="prijs"></p><span></div>
  	

  	<div class="col-xs-12"><p>Beschrijving:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  		<div class="col-xs-12"><span class="prevText"><p ng-bind="beschrijving"></p><span></div>
  	

  	<div class="col-xs-12"><p>Waarschuwing:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  		<div class="col-xs-12"><span class="prevText"><p ng-bind="warning"></p><span></div>

	<div class="col-xs-12"><p>Leverbaar op:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  		<div class="col-xs-12"></div>
  	
  	<div class="col-xs-12"><p>Prijs aanbieding:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  		<div class="col-xs-12"><span class="prevText"><p ng-bind="prijsAanbieding"></p><span></div>

 <div class="dbWhiteSpaceVSmall col-xs-12"></div>
  	<div class="checkboxPreview col-xs-1">	 
										<label>
											<input type="checkbox"  id="" class="autocheck" disabled >
											
											  </label>	

							        </div> <div class="previewtext col-xs-9" id="previewtext" style="display: none"><p>PostNL bezorging</p></div>
  </div>



  	  	<div class="col-xs-5 no-padding"><span class="productOverview">Recent Toegevoegde Producten</span>

  	  		 <div class="dbWhiteSpaceBig col-xs-12"></div>

  	  		 	<div class="formProductToevoegen col-xs-11">
  	  		 		<div class="col-xs-4"><p>Afbeelding</p></div>
  	  		 		<div class="col-xs-4"><p>Productnaam</p></div>
  	  		 		<div class="col-xs-4"><p>Controls</p></div>
  	  		 	</div>
  	  		 	<div class="col-xs-1"></div>

  	  		 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  		 <div class="recentToegevoegBorderBot col-xs-11 no-margin" >
  	  		 	<div class="RecentToegevoegdOne col-xs-4 no-margin"></div>
  	  		 	<div class="col-xs-4 no-margin">Stokbrood</div>
  	  		 	<div class="col-xs-4 no-margin">
  	  		 		<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button>
					<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>


  	  		 	</div>
  	  		 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  		 </div>
  	  		  <div class="col-xs-1"></div>

			<div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  	
  	  		 <div class="recentToegevoegBorderBot col-xs-11 no-margin" >
  	  		 	<div class="RecentToegevoegdTwo col-xs-4 no-margin"></div>
  	  		 	<div class="col-xs-4 no-margin">Cake</div>
  	  		 	<div class="col-xs-4 no-margin">
  	  		 		<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button>
					<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>


  	  		 	</div>
  	  		 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  		 </div>
  	  		  <div class="col-xs-1"></div>

			<div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  	
  	  		 <div class="recentToegevoegBorderBot col-xs-11 no-margin" >
  	  		 	<div class="RecentToegevoegdThree col-xs-4 no-margin"></div>
  	  		 	<div class="col-xs-4 no-margin">Koeken</div>
  	  		 	<div class="col-xs-4 no-margin">
  	  		 		<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button>
					<button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>


  	  		 	</div>
  	  		 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  		 </div>
  	  		  <div class="col-xs-1"></div>
  	  		  <div class="dbWhiteSpaceVSmall col-xs-12"></div>

  	  		   <div class="col-xs-11 no-margin">
	  	  		  	<div class="col-xs-7 no-margin">
	  	  		  	</div>
	  	  		  	<div class="col-xs-5 no-margin">
	  	  		  		<div class="productview col-xs-12">
	  	  		  			<a href="#" class="btn btn-success btn-lg btn-block hugeAdmin">Bekijk productlijst</a>
	  	  		  		</div>
	  	  		  	</div>
	  	  		  
  	  		  </div>
  	  		
		
  	  	  
  	  	
</div>

  	

@endsection

