@extends('app')



@section('content')

<div class="col-xs-10 col-xs-push-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="/updateCRUD/{{ $row->Produktnummer }}" role="form" method='post'>
  
    <input name='naam' type ='tekst' placeholder ="Naam" value="{{ $row->Naamprodukt }}" required>
     <input name='prijs' type ='number' placeholder ="PrijsEenheid" value="{{ $row->PrijsEenheid }}" required min="0" max="9999" step="0.01" size="4">
      <input name='route' type ='number' placeholder ="Prijsroute" value="{{ $row->Prijsroute }}" required min="0" max="9999" step="0.01" size="4">
       <input name='btw' type ='number' placeholder ="btw" value="{{ $row->btw }}" required min="0" max="9999" step="0.01" size="4">
        <input name='groep' type ='tekst' placeholder ="Groep" value="{{ $row->groep }}" required>


    <input type="submit" value="Verzenden" name="submit">

  </form>


@endsection