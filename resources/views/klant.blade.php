@extends('app')



@section('content')



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
        </tr>
    @foreach ($klant as $k)
    <tr>
       <td>{{ $k->KlantId}}</td>
        <td>{{$k->Achternaam}}</td>
        <td>{{ $k->Voorletters}}</td>
        <td>{{ $k->Voorvoegsel}}</td>
        <td>{{ $k->Adres}}</td>
        <td>{{ $k->Postcode}}</td>
        <td>{{ $k->Plaats}}</td>
        <td>{{ $k->Telefoonnummer}}</td>
        <td>{{ $k->Korting}}</td>
        <td>{{ $k->Volgnummer}}</td>
  

        <td>    
            <a class="btn btn-info" href="<?php echo '/showKlant/'. $k->KlantId  ?>">Show</a>
            <a class="btn btn-primary" href="{{ route('klant.edit',$k->KlantId) }}">Edit</a>
            <a class="btn btn-danger" href="<?php echo 'deleteKlant/'. $k->KlantId  ?>">Delete</a>
         
        </td>


      
    </tr>
    @endforeach
    </table>
  {!! $klant->render() !!}
  </div>

  


@endsection