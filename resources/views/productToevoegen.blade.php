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

<script type="text/javascript">
function readBox(){

  var txtinput = document.getElementById('test').value;
  alert(txtinput);



};

</script>





  <div class="contentWapper col-xs-10 col-xs-push-2 no-padding">



  	<div class="dbWhiteSpaceBig col-xs-12"></div>


  	<div class="col-xs-3 no-padding"><span class="productOverviewDif">Product Toevoegen</span>
          <div class="col-xs-11 col-xs-push-1">
            <div class="dbWhiteSpaceBig col-xs-12"></div>

  	<form action="verify" role="form" method='post' ecypte="multipart/form-data">
    <input name='naam' type ='tekst' placeholder ="Naam" ng-model="naam" required>
    <br>
    <br>
    <input name='prijs' type ='number' placeholder ='Prijs' ng-model="prijs" required min="0" max="9999" step="0.01" size="4" >
    <br>
    <br>
    <input name='beschrijving' type ='tekst' placeholder ='Beschrijving' ng-model="beschrijving" required>
    <br>
    <br><label for="chkPassport"> PostNL
            <input type="checkbox"id="chkPassport" onclick="javascript:checkAll();ShowHideDiv(this)">           
              </label>
    <br>
    <br>
    <input name='waarschuwwing' type ='tekst' placeholder ='waarschuwing' ng-model="warning" >
    <br>
    <br>
    <input name='aanbieding' type ='tekst' placeholder ='Prijs Aanbieding' ng-model="prijsAanbieding">
    <br>
    <br>
    <input name="file"  type='file' id="file"/>
        <br>

    
        
        
    <input type="submit" value="Verzenden" name="submit">
  </form>

					</div>

  	</div>
<div class='col-xs-2'><span class="productOverview">Product Overview</span>
  <div class=" previewScreen col-xs-12">
<script type="text/javascript">
                 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#file").change(function(){
        readURL(this);
    });
            </script>
                <div class="afbeeldingInvoegenPreview">
 <img id="blah" src="/inventory_images/media.png" alt="your image" height="100" />
</div>
  	  			
  	<div class="col-xs-12"><p>Productnaam: </p>	<div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  	<div class="col-xs-12"><span class="prevText"><p ng-bind="naam"></p><span></div>
  
  	<div class="col-xs-12"><p>Prijs:</p> <div class="recentToegevoegBorderBot col-xs-12 no-margin" ></div></div>
  	<div class="col-xs-12"><span class="prevText"> <p ng-bind="prijs">&#8364; </p><span></div>
  	

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
  </div>

<div class="col-xs-1"></div>

  	  	<div class="col-xs-6 no-padding"><span class="productOverview">Recent Toegevoegde Producten</span>

  	  		 <div class="dbWhiteSpaceBig col-xs-12"></div>

  	  		 	<div class="formProductToevoegen col-xs-11">
  	  		 		<div class="col-xs-4"><p>Afbeelding</p></div>
  	  		 		<div class="col-xs-3"><p>Productnaam</p></div>
              <div class="col-xs-1"><p>Prijs</p></div>
  	  		 		<div class="col-xs-4"><p>Controls</p></div>
  	  		 	</div>
  	  		 	<div class="col-xs-1"></div>

  	  		 <div class="dbWhiteSpaceSmall col-xs-12"></div>


           @if($latest !== '')

             @foreach($latest as $latest)
        	  		<div class="recentToegevoegBorderBot col-xs-11 no-margin" >
        	  		 	<div class="RecentToegevoegdOne col-xs-4 no-margin">  <img src="{{ $latest->path }}" alt="" class="RecentToegevoegdOne col-xs-12 no-padding" /></div>
        	  		 	<div class="col-xs-3 no-margin"> {{ $latest->name }}</div>
                    <div class="col-xs-1 no-margin"> &euro;{{ $latest->price }}</div>
        	  		 	<div class="col-xs-4 no-margin">
        	  		 		<a href="<?php echo 'productedit/'. $latest->id  ?>"><button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
      					
                <a href="<?php echo 'delete/'. $latest->id  ?>" > <button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button></a>


        	  		 	</div>
        	  		 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
        	  		 </div>
                  <div class="col-xs-1"></div>

                  <div class="dbWhiteSpaceSmall col-xs-12"></div>
            @endforeach
           @endif

  	  	



  	  		 	</div>
  	  		 	 <div class="dbWhiteSpaceSmall col-xs-12"></div>
  	  		 </div>

  	  		   <div class="col-xs-12 no-margin">
	  	  		  	<div class="col-xs-10 no-margin">
	  	  		  	</div>
	  	  		  	<div class="col-xs-2 no-margin">
	  	  		  		<div class="productview col-xs-12">
	  	  		  			<a href="productview" class="btn btn-success btn-lg btn-block hugeAdmin">Bekijk productlijst</a>
	  	  		  		</div>
	  	  		  	</div>
	  	  		      
          
  	  		  </div>
  	  		

  	  	
</div>


@endsection