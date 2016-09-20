@extends('app')



@section('content')



<div class="col-xs-10 col-xs-push-2">
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Voeg een nieuwe Klant toe</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="klant"> Back</a>
            </div>
        </div>
    </div>
    <form action="createKlant" role="form" method='post'><br>
      
    
    <input name='Achternaam' type ='tekst' placeholder ="Achternaam" required ><br>
    <input name='Voorletters' type ='tekst' placeholder ="Voorletters"   ><br>
    <input name='Voorvoegsel' type ='tekst' placeholder ="Voorvoegsel"   ><br>
    <input name='Adres' type ='tekst' placeholder ="Adres"    ><br>
    <input name='Postcode' type ='tekst' placeholder ="Postcode"  ><br>
    <input name='Telefoonnummer' type ='number' placeholder ="Telefoonnummer" ><br>
    <input name='Korting' type ='tekst' placeholder ="Korting"   ><br>
    <input name='Volgnummer' type ='number' placeholder ="volgnummer"    required><br>


    <input type="submit" value="Verzenden" name="submit">
    
  </form>

  </div>



@endsection

