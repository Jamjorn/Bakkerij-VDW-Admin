@extends('app')



@section('content')

  <div class="contentWapper col-xs-10 col-xs-push-2 no-padding">

  	<div class="dbWhiteSpaceBig col-xs-12"></div>
  	  	<div class="col-xs-3 no-padding"><span class="productOverview">Product Overview</span> </div>
  	  	<div class="col-xs-3"><div class="productview">
  	  		<a href="#" class="btn btn-success btn-lg btn-block hugeAdmin">Voeg een nieuw product toe</a>
  	  		</div> 
  	  	</div>
  	  	<div class="col-xs-6 no-padding"></div>

  	<div class="dbWhiteSpaceBig col-xs-12"></div>
  	<div class="contentwrapper-Overzicht col-xs-12">
  		<div class="productMenuBar col-xs-12">
  		<div class="col-xs-3 no-padding"><p>Product Afbeelding</p></div>
  		<div class="col-xs-3 no-padding"><p>Product beschrijving</p></div>
  		<div class="col-xs-2 no-padding"><p>Prijs</p></div>
  		<div class="col-xs-4 no-padding"><p>Extra</p></div>
		</div>

  	</div>
  	<div class="dbWhiteSpaceSmall col-xs-12"></div>
  	<div class="OverviewTabel col-xs-12">
  	  	<div class="dbWhiteSpaceSmall col-xs-12"></div>	
  		<div class="col-xs-3 no-padding"><div class="OvervieuwPicture"></div></div>
  		<div class="col-xs-3 no-padding"><p>Taart voor twaalf personen, meer tekst ter illustratie.</p></div>
  		<div class="col-xs-2 no-padding"><p>&#8364 12.95</p></div>
  		<div class="col-xs-2 no-padding"><p>Waarschuwing: nee<br> Leverdagen: nee<br> PostNl: nee</p></div>
  		<div class="col-xs-1 no-padding">

  			
  			<div class="col-xs-2"><div class="edit"><span class="glyphicon glyphicon-pencil big"></span></div></div><div class="col-xs-2"><div class="trash"><span class="glyphicon glyphicon-trash small"></span></div></div>
  			<div class="col-xs-8"></div>

  		</div>

  		<div class="col-xs-1 no-padding"></div>

  	</div>
  	<div class="col-xs-1 no-padding"></div>
	<div class="overviewLine col-xs-10 no-padding"></div>
	<div class="col-xs-1 no-padding"></div>

	<div class="OverviewTabel col-xs-12">
  	  	<div class="dbWhiteSpaceSmall col-xs-12"></div>	
  		<div class="col-xs-3 no-padding"><div class="OvervieuwPicture"></div></div>
  		<div class="col-xs-3 no-padding"><p>Taart voor twaalf personen, meer tekst ter illustratie.</p></div>
  		<div class="col-xs-2 no-padding"><p>&#8364 12.95</p></div>
  		<div class="col-xs-2 no-padding"><p>Waarschuwing: nee<br> Leverdagen: nee<br> PostNl: nee</p></div>
  		<div class="col-xs-1 no-padding">

  			
  			<div class="col-xs-2"><div class="edit"><span class="glyphicon glyphicon-pencil big"></span></div></div><div class="col-xs-2"><div class="trash"><span class="glyphicon glyphicon-trash small"></span></div></div>
  			<div class="col-xs-8"></div>

  		</div>

  		<div class="col-xs-1 no-padding"></div>

  	</div>
  	<div class="col-xs-1 no-padding"></div>
	<div class="overviewLine col-xs-10 no-padding"></div>
	<div class="col-xs-1 no-padding"></div>

	<div class="col-xs-12">

		<nav>
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">Previous</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">Next</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
	</div>

</div>

@endsection