@extends('app')



@section('content')

<div class="col-xs-10 col-xs-push-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Klant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/klant"> Back</a>
            </div>
        </div> 
    </div>
         <form action="/updateKlant/{{ $row->KlantId }}" role="form" method='post'><br>

    <input name='KlantId' type ='number' placeholder ="KlantId" value="{{ $row->KlantId }}"  required disabled><br>
    <input name='Achternaam' type ='tekst' placeholder ="Achternaam"value="{{ $row->Achternaam }}"  required ><br>
    <input name='Voorletters' type ='tekst' placeholder ="Voorletters"value="{{ $row->Voorletters }}"   ><br>
    <input name='Voorvoegsel' type ='tekst' placeholder ="Voorvoegsel"value="{{ $row->Voorvoegsel }}"   ><br>
    <input name='Adres' type ='tekst' placeholder ="Adres" value="{{ $row->Adres }}"   ><br>
    <input name='Postcode' type ='tekst' placeholder ="Postcode" value="{{ $row->Postcode }}"  ><br>
    <input name='Telefoonnummer' type ='number' placeholder ="Telefoonnummer" value="{{ $row->Telefoonnummer }}" ><br>
    <input name='Korting' type ='tekst' placeholder ="Korting" value="{{ $row->Korting }}"  ><br>
    <input name='Volgnummer' type ='number' placeholder ="volgnummer" value="{{ $row->Volgnummer }}"   required><br>
   
        <input type="submit" value="Verzenden" name="submit">
  </form>

   
     
   
@endsection