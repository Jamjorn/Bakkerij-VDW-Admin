@extends('app')



@section('content')



<div class="col-xs-10 col-xs-push-2">
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Voeg een nieuwe bestelling toe</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="bestellingen"> Back</a>
            </div>
        </div>
    </div>
    <form action="createBestelling" role="form" method='post'><br>
      <input name='Routenummer' type ='number' placeholder ="routenummer"  required><br>
    <input name='Klantnummer' type ='number' placeholder ="Klantnummer"  required><br>
     <input name='Produkt' type ='tekst' placeholder ="Produkt" class="biginput" id="produkt" required ><br>
      <input name='Produktnummer' type ='number' placeholder ="Produktnummer"  required min="0" ><br>
       <input name='Hoeveelheid' type ='number' placeholder ="Hoeveelheid"  required min="0"><br>
        <input name='Totaalprijs' type ='number' placeholder ="Totaalprijs"  required min="0" max="9999" step="0.01" ><br>
        <input name='Afhaaldatum' type ='date' placeholder ="Afhaaldatum"  required><br>
        <input name='Opmerkingen' type ='tekst' placeholder ="Opmerkingen" ><br>
        <input name='Vastebestelling' type ='number' placeholder ="Vastebestelling" min="1"  required ><br>
        <input name='Prijsprodukt' type ='tekst' placeholder ="prijsprodukt"  required min="0" max="9999" step="0.01" ><br>
        <input name='Volgnummer' type ='number' placeholder ="volgnummer"  required><br>
        <input name='Betaald' type ='checkbox' placeholder ="Betaald"  required><br>
        <input name='Status' type ='tekst' placeholder ="Status"  required><br>


    <input type="submit" value="Verzenden" name="submit">
  </form>

  </div>


@endsection

