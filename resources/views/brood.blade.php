@extends('app')

@section('header')
       <div class="header-brood full-height  col-xs-10 col-xs-push-2">

	       <div class="col-xs-12">
	            <h1 id="sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background  no-margin text-align-center white">BIOLOGISCH BROOD</h2>
	             <div class="clear"></div>
	            <h2 id="sub-sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background no-margin text-align-center white">Zonnemaire</h2>       
	       </div>
            
       </div>
@endsection


@section('content')

   @include('partials.broodpartial')

@endsection


@section('footer')

    @include('partials.footer')

@endsection
