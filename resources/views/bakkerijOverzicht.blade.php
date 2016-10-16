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
                <h2>BakkerijTotaal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/klant">Back</a>
            </div>
        </div>
    </div>
   
   
    <form action="/bakkerijOverzicht" role="form" method="POST">
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
            <th>KlantNR.</th>
            <th>Produkt</th>
            <th>ProduktNR.</th>
            <th>Aantal</th>
            <th>Totaalprijs</th>
            <th>Afhaaldatum</th>
            <th>Vastebestelling</th>
            <th>prijsprodukt</th>
            <th>Betaald</th>
        </tr>
        <?php $totaal = 0;
        if(isset($row)){
         ?>
@foreach ($row as $r)
    <tr>
       <td>{{ $r->KlantId}}</td>
        <td>{{$r->Produkt}}</td>
        <td>{{ $r->Produktnummer}}</td>
        <td>{{ $r->Hoeveelheid}}</td>
        <td>{{ $r->Totaalprijs}}</td>
        <td>{{ $r->Afhaaldatum}}</td>
        <td>{{ $r->Vastebestelling}}</td>
        <td>{{ $r->prijsprodukt}}</td>
        <td>{{ $r->Betaald}}</td>

            <?php
            
              $totaal += $r->Totaalprijs
             ?>

      
    </tr>
    @endforeach
    <td>Totaalbedrag tussen <?php echo $start.  "  en   " .$end.  "   =" .$totaal; ?></td>

    <?php }?>

  </div>




@endsection