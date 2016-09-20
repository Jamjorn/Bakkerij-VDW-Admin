@extends('app')



@section('content')

<div class="col-xs-10 col-xs-push-2">
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('productCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="create" role="form" method='post'>
    <input name='naam' type ='tekst' placeholder ="Naam"  required>
     <input name='prijs' type ='number' placeholder ="PrijsEenheid" required min="0" max="9999" step="0.01" size="4">
      <input name='route' type ='number' placeholder ="Prijsroute"  required min="0" max="9999" step="0.01" size="4">
       <input name='btw' type ='number' placeholder ="btw"  required min="0" max="9999" step="0.01" size="4">
        <input name='groep' type ='tekst' placeholder ="Groep"  required>


    <input type="submit" value="Verzenden" name="submit">
  </form>

  </div>


@endsection