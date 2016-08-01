@extends('app')

@section('header')
	
       <div class="header-news-overzicht full-height  col-xs-10 col-xs-push-2 no-padding">
			<div class="newsOverzichtOverlay col-xs-12 no-padding">
	       		<div class="col-xs-12">
	           		 <h1 id="sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background  no-margin text-align-center white">Nieuwsoverzicht</h2>
	          	   <div class="clear"></div>
	           		 <h2 id="sub-sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background no-margin text-align-center white">Bekijk hieronder het nieuwsoverzicht!</h2>
	           	</div>
	      	</div>
  	 </div>

@endsection


@section('news')

    @include('partials.news_block_overzicht')


@endsection


@section('footer')

    @include('partials.footer')

@endsection
