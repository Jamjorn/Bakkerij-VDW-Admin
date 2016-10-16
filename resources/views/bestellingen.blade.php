@extends('app')



@section('content')

<script type="text/javascript">

$(document).ready(function(){
    $('.btnPrint').printPage();

});

</script>       
        

<div class="col-xs-10 col-xs-push-2">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bestelling overzicht</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="createBestelling">Nieuwe bestelling</a>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>RouteNR.</th>
            <th>KlantNR.</th>
            <th>Produkt</th>
            <th>ProduktNR.</th>
            <th>Aantal</th>
            <th>Totaalprijs</th>
            <th>Afhaaldatum</th>
            <th>Opmerkingen</th>
            <th>Vastebestelling</th>
            <th>Vastebestellingdag</th>
            <th>prijsprodukt</th>
            <th>VolgNR.</th>
            <th>Betaald</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    @foreach ($bestellingen as $bestelling)
    <tr>
        <td>{{ $bestelling->Routenummer}}</td>      
        <td><a class="btn btn-info" href="<?php echo '/showKlant/'. $bestelling->KlantId  ?>">{{ $bestelling->KlantId}}</a></td>
        <td>{{ $bestelling->Produkt}}</td>
        <td><a class="btn btn-info" href="{{ route('productCRUD.show',$bestelling->bestelnummer) }}">{{ $bestelling->Produktnummer}}</a></td>
        <td>{{ $bestelling->Hoeveelheid}}</td>
        <td>{{ $bestelling->Totaalprijs}}</td>
        <td>{{ $bestelling->Afhaaldatum}}</td>
        <td>{{ $bestelling->Opmerkingen}}</td>
        <td>{{ $bestelling->Vastebestelling}}</td>
        <td>{{ $bestelling->Vastebestellingdag}}</td>
        <td>{{ $bestelling->prijsprodukt}}</td>
        <td>{{ $bestelling->volgnummer}}</td>
        <td> {{ $bestelling->Betaald}}</td>
        <td>{{ $bestelling->Status}}</td>


        <td>    
            <a class="btn btn-info" href="{{ route('productCRUD.edit',$bestelling->bestelnummer) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('bestellingen.edit',$bestelling->bestelnummer) }}">Edit</a>
            <a class="btn btn-danger" href="<?php echo 'deleteBestelling/'. $bestelling->bestelnummer  ?>">Delete</a>
         
        </td>
    </tr>
    @endforeach
    </table>
    {!! $bestellingen->render() !!}
    <a class="btnPrint btn-info" href="printpreviewBig" >Show</a>
  </div>


@endsection