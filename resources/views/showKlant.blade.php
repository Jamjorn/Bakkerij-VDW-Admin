@extends('app')



@section('content')

           <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<div class="col-xs-10 col-xs-push-2">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Klanten overzicht</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="createKlant">Klant toevoegen</a>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Klantnummer.</th>
            <th>Achternaam.</th>
            <th>Voorletters</th>
            <th>Voorvoegsel.</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Plaats</th>
            <th>Telefoonnummer</th>
            <th>Korting</th>
            <th>Volgnummer</th>
            <th></th>

        </tr>

    <tr>
       
        <td>{{ $klant->KlantId}}</td>
        <td>{{ $klant->Achternaam}}</td>
        <td>{{ $klant->Voorletters}}</td>
        <td>{{ $klant->Voorvoegsel}}</td>
        <td>{{ $klant->Adres}}</td>
        <td>{{ $klant->Postcode}}</td>
        <td>{{ $klant->Plaats}}</td>
        <td>{{ $klant->Telefoonnummer}}</td>
        <td>{{ $klant->Korting}}</td>
        <td>{{ $klant->Volgnummer}}</td>
  

        <td>    
        
            <a class="btn btn-primary" href="{{ route('klant.edit',$klant->KlantId) }}">Edit</a>
            <a class="btn btn-danger" href="<?php echo 'deleteKlant/'. $klant->KlantId  ?>">Delete</a>
         
        </td>


      
    </tr>
 
    </table>
    <form action="date/{{ $klant->KlantId}}"  role="form" method="POST">
    <input type="text" class="daterange" />



  <input type="submit" value="Verzenden" name="submit">
</form>
 <script type="text/javascript">
    $('.daterange').daterangepicker();
</script>
  </div>




@endsection