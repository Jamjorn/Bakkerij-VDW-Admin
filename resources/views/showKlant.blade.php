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
                <h2>Klant details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/klant">Back</a>
            </div>
        </div>
    </div>
    <?php if(isset($klant)){ ?>
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
    <form action="/date/{{ $klant->KlantId}}" role="form" method="POST">
    <input type="text" class="daterange" id="datepicker" name="datepicker" />
<input type="hidden" name="to" id="to" value="">
<input type="hidden" name="from" id="from" value="">


 <script type="text/javascript">
$('#datepicker').daterangepicker({
    "showDropdowns": true,
    "showWeekNumbers": true,
    "ranges": {'Today': [moment(), moment()],
                           'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                           'Last 7 Days': [moment().subtract('days', 6), moment()],
                           'Last 30 Days': [moment().subtract('days', 29), moment()],
                           'This Month': [moment().startOf('month'), moment().endOf('month')],
                           'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                       
    },
    "locale": {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Bevestig",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Zelf datums kiezen",
        "weekLabel": "W",
        "daysOfWeek": [
            "Su",
            "Mo",
            "Tu",
            "We",
            "Th",
            "Fr",
            "Sa"
        ],
        "monthNames": [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ],
        "firstDay": 1
    },
    "linkedCalendars": false,
    "alwaysShowCalendars": true,
    "startDate": "10/09/2016",
    "endDate": "10/15/2016"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        $('#to').val(start.format('YYYY-MM-DD 00:00:00'));
       $('#from').val(end.format('YYYY-MM-DD 00:00:00'));
});
               </script>

  <input type="submit" value="Verzenden" name="submit">
</form>
 <table class="table table-bordered">
<tr>
            <th>KlantId.</th>
            <th>Produkt.</th>
            <th>Produktnummer</th>
            <th>Hoeveelheid.</th>
            <th>Totaalprijs</th>
            <th>Afhaaldatum</th>
            <th>Opmerking</th>
            <th>Betaald</th>
         
        </tr>
<?php 
$totaal = 0;

    if(isset($row)){    ?>
            @foreach ($row as $r)
            <tr>
<td>{{ $r->KlantId}}</td>
<td>{{ $r->Produkt}}</td>
<td>{{ $r->Produktnummer}}</td>
<td>{{ $r->Hoeveelheid}}</td>
<td>{{ $r->Totaalprijs}}</td>  
<td>{{ $r->Afhaaldatum}}</td>
<td>{{ $r->Opmerkingen}}</td>
<td>{{ $r->Betaald}}</td>
</tr>


 <?php $totaal += $r->Totaalprijs  ?>

    @endforeach<?php

?>
<tr>
           
            <th>Totaalprijs <?php echo $totaal ?> </th>
         
        </tr>
        <?php

    }
?>

</table>
 <?php }else echo "Klant is verwijderd uit het systeem" ?>
  </div>




@endsection