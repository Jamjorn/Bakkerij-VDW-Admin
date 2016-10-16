@extends('app')



@section('content')

<div class="col-xs-10 col-xs-push-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Bestelling</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/bestellingen"> Back</a>
            </div>
        </div>
    </div>
     
    <form action="/updateBestelling/{{ $row->bestelnummer }}" role="form" method='post'><br>

    <input name='Routenummer' type ='number' placeholder ="routenummer" value="{{ $row->Routenummer }}"  required><br>
    <input name='Klantnummer' type ='number' placeholder ="Klantnummer" value="{{ $row->KlantId }}"   required><br>
    <input name='Produkt' type ='tekst' placeholder ="Produkt" class="biginput" id="produkt" value="{{ $row->Produkt }}"  required ><br>
    <input name='Produktnummer' type ='number' placeholder ="Produktnummer" value="{{ $row->Produktnummer }}"   required min="0" ><br>
    <input name='Hoeveelheid' type ='number' placeholder ="Hoeveelheid" value="{{ $row->Hoeveelheid }}"   required min="0"><br>
    <input name='Totaalprijs' type ='number' placeholder ="Totaalprijs" value="{{ $row->Totaalprijs }}"   required min="0" max="9999" step="0.01" ><br>
    <input name='Afhaaldatum' type ='date' placeholder ="Afhaaldatum"  value="{{ $row->Afhaaldatum }}"  ><br>
    <input name='Opmerkingen' type ='tekst' placeholder ="Opmerkingen"  value="{{ $row->Opmerkingen }}" ><br>
    <input name='Vastebestelling' type ='number' placeholder ="Vastebestelling" value="{{ $row->Vastebestelling }}"   ><br>
    <input name='Vastebestellingdag' type ='number' placeholder ="Vastebestelling" value="{{ $row->Vastebestellingdag }}"    ><br>
    <input name='Prijsprodukt' type ='number' placeholder ="prijsprodukt" value="{{ $row->prijsprodukt }}"   required min="0" max="9999" step="0.01" ><br>
    <input name='Volgnummer' type ='number' placeholder ="volgnummer" value="{{ $row->volgnummer }}"   required><br>
    <input name='Betaald' type ='number' placeholder ="Betaald" value="{{ $row->Betaald }}"   ><br>
    <input name='Status' type ='tekst' placeholder ="Status"  value="{{ $row->Status }}"  ><br>

        <input type="submit" value="Verzenden" name="submit">
  </form>

@endsection