@extends('app')



@section('content')

  <div class="contentWapper col-xs-10 col-xs-push-2 no-padding">

  	<div class="dbWhiteSpaceBig col-xs-12"></div>

  	  	<div class="col-xs-4 no-padding"><span class="productOverview">Product Overview</span> </div>

  	  	<div class="col-xs-5 no-padding"></div>
          
          <div class="col-xs-3"><div class="productview">
          <a href="productToevoegen" class="btn btn-success btn-lg btn-block hugeAdmin">Voeg een nieuw product toe</a>
          </div> 
        </div>

  	<div class="dbWhiteSpaceBig col-xs-12"></div>
  	<div class="contentwrapper-Overzicht col-xs-12">
  		<div class="productMenuBar col-xs-12">
  		<div class="col-xs-2 no-padding"><p>Product Afbeelding</p></div>
      <div class="col-xs-1 no-padding"></div>
  		<div class="col-xs-3 no-padding"><p>Product beschrijving</p></div>
  		<div class="col-xs-2 no-padding"><p>Prijs</p></div>
  		<div class="col-xs-2 no-padding"><p>Extra</p></div>
      <div class="col-xs-1 no-padding"></div>
		</div>

  	</div>
  	<div class="dbWhiteSpaceSmall col-xs-12"></div>

     @foreach($data as $getData)




  	<div class="OverviewTabel col-xs-12">
  	  	<div class="dbWhiteSpaceSmall col-xs-12"></div>	
  		<div class="col-xs-2 no-padding"> <img src=

      <?php 

      if(! $getData->path){

        echo "img\media.png";
      }
      else{

        echo $getData->path;
      }
        ?>

       alt="" class="RecentToegevoegTwo col-xs-12 no-padding" /></div>
      <div class="col-xs-1 no-padding"></div>
  		<div class="col-xs-3 no-padding"><p> {{ $getData->name }}</p></div>
  		<div class="col-xs-2 no-padding"><p>&#8364 {{ $getData->price }}</p></div>
  		<div class="col-xs-2 no-padding"><p>Waarschuwing: <?php  if(!$getData->warning){echo "nee";}else{  echo $getData->warning;  }?><br> Leverdagen: nee<br> PostNl: nee</p></div>
  		<div class="col-xs-1 no-padding">

  			
  			<a href="<?php echo 'productedit/'. $getData->id  ?>"><div class="col-xs-2"><div class="edit"><span class="glyphicon glyphicon-pencil big"></span></div></div></a>

       <a href="<?php echo 'delete/'. $getData->id  ?>" > <div class="col-xs-2"><div class="trash"><span class="glyphicon glyphicon-trash small"></span></div></div></a>

  			<div class="col-xs-8"></div>

  		</div>

  		<div class="col-xs-1 no-padding"></div>

  	</div>
  @endforeach


	
  	<div class="col-xs-1 no-padding"></div>
	<div class="overviewLine col-xs-10 no-padding"></div>
	<div class="col-xs-1 no-padding"></div>

	<div class="col-xs-12">
<?php echo $data-> render() ?>
		
	</div>

</div>

@endsection


