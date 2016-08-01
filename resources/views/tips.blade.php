@extends('app')

@section('header')
       <div class="header-tips full-height  col-xs-10 col-xs-push-2">

	       <div class="col-xs-12">
	            <h1 id="sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background  no-margin text-align-center white">Nieuws</h2>
	             <div class="clear"></div>
	            <h2 id="sub-sub-header-nieuws" class="col-xs-6 col-xs-push-3 dark-transparant-background no-margin text-align-center white">Recent in het nieuws!</h2>       
	       </div>
            
       </div>
@endsection


@section('content')

   @include('partials.tipspartial')

@endsection


@section('footer')

    @include('partials.footer')

@endsection
