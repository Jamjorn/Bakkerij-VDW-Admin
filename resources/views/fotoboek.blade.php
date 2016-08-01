@extends('app')

@section('header')
        <div class="header-medium-large  colorGrey col-xs-10 col-xs-push-2"> 
        	<div class=" col-xs-12">
        		<h4  class="white col-xs-12 text-align-center larger-height-heading ">FOTOBOEK</h4>
        	</div>
        	<div class="buttonfotoboekwrap">
        	<div class="col-xs-1"></div>
        	<a ng-click="setRoute('home') "><div class="sideLeft text-align-center  col-xs-3"><p><b>Koeken</b></p></div></a>
        	<a ng-click="setRoute('about') "><div class="middle text-align-center  col-xs-4"><p><b>Tekenfiguren</b></p></div></a>
        	<a ng-click="setRoute('experiments') "><div class="sideRight text-align-center  col-xs-3"><p><b>Taarten</b></p></div></a>
        	<div class="col-xs-1"></div>
        </div>
        </div>



	
@endsection

        
  <div id="con">
   <div ng-view></div>
</div>     
        





@section('footer')

    @include('partials.footer')

@endsection
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.1/angular.min.js"></script>
<script src="https://code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>
<script type="text/javascript" src="js/bakkerij.js"></script>