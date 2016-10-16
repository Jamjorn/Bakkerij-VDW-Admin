@extends('app')



@section('content')



<div class="col-xs-10 col-xs-push-2">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Route overzicht</h2>
            </div>

        </div>
    </div>
    

    <form action="showRouteDetails" role="form" method='post'><br>
               <input name="routeNumber" id="routeNumber"></input>
       <input type="submit" value="Verzenden" name="submit">
  </form>




    <table class="table table-bordered">
        
        <tr>
            <th>Routenummer.</th>
            <th>Klantnummer.</th>
       
            <th>totaalprijs.</th>
        </tr>  
            <?php 
            if(isset($Tot)){
                $totaal = 0;
                ?>
         
              @foreach ($Tot as $r)
             <tr>
                <td>{{ $r->Routenummer}}</td>
                <td>{{ $r->KlantId}}</td>
                <td>{{ $r->sum}}</td>
            </tr>
             <?php
              $totaal += $r->sum
             ?>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td> Totaal Route: <?php echo $totaal ?></td>
            </tr>
            <?php  }?>
            
           
   
  </div>

  


@endsection
        

