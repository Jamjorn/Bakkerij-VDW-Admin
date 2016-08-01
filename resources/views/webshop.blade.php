@extends('app')

@section('header')
    <div id="header-webshop" class="header-default full-height  col-xs-10 col-xs-push-2">
        <h2 id="sub-header-webshop" class="col-xs-4 col-xs-push-4 dark-transparant-background no-margin text-align-center white">Webshop</h2>
    </div>
@endsection

@section('content')
<div class="col-xs-10 col-xs-push-2 no-padding">
    <div id="specialiteiten" class="category-webshop-item pink-overlay col-xs-2">Specialiteiten</div>
    <div id="groot-brood" class="category-webshop-item yellow-overlay col-xs-2">Groot brood</div>
    <div id="klein-brood" class="category-webshop-item grey-overlay col-xs-2">Klein brood</div>
    <div id="zoete-snacks" class="category-webshop-item green-overlay col-xs-2">Zoete snacks</div>
    <div id="hartige-snacks" class="category-webshop-item orange-overlay col-xs-2">Hartige snacks</div>
    <div id="cake-koeken" class="category-webshop-item yellow-overlay col-xs-2">Cake &amp; Koeken</div>
    <div id="vlaaien" class="category-webshop-item yellow-overlay col-xs-2">Vlaaien</div>
    <div id="bbq-category" class="category-webshop-item grey-overlay col-xs-2">BBQ<br/> Tapas<br/> Borrelbrood</div>
    <div id="gebak" class="category-webshop-item green-overlay col-xs-2">Gebak</div>
    <div id="taarten" class="category-webshop-item orange-overlay col-xs-2">Taarten</div>
    <div id="speciale-gelegenheden-category" class="category-webshop-item yellow-overlay col-xs-2">Speciale Gelegenheden</div>
    <div id="feestdagen" class="category-webshop-item orange-overlay col-xs-2">Feestdagen</div>
</div>

<div class="wrapper-filter-zoeken col-xs-10 col-xs-push-2 no-padding">

    <div class="col-xs-10 col-xs-push-1">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Zoek product...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-xs-9 -->
</div>

<div class="col-xs-10 col-xs-push-2 no-padding">
    <div class="uitgelicht col-xs-6">UITGELICHT</div>

        @foreach($products as $product)
        <div class="product col-xs-3 no-padding ">
            <div class="prijs-show">&euro; {{ $product->price }}</div>
                <img src="{{ $product->path }}" alt="" class="col-xs-12 no-padding" />
             

            <div class="product-dark-overlay extra-product-info col-xs-12 no-padding">
                <div class="product-prijs col-xs-12 no-padding">
                    <div class="prijs-left col-xs-6">Prijs:</div>
                    <div class="prijs-right col-xs-6">&euro; {{ $product->price }}</div>
                </div>
                <p>{{ $product->product_name }}</p>
                <div class="clear"></div>
                <div class="product-buttons col-xs-8 col-xs-push-2">
                    <span class="min-button">-</span>
                    <input type="text" class="product-aantal" value="0"></input>
                    <span class="plus-button">+</span>
                </div>
                <div class="opmerking-button col-xs-12">+ opm</div>
            </div>

        </div>
        @endforeach

        <div class="alle-producten col-xs-6">
            <span class="category-cta col-xs-12">Alle producten</span>
            <span class="product-counter col-xs-12">[290]</span>
            <div class="clear"></div>
            <span class="glyphicon glyphicon-circle-arrow-right"></span>
        </div>
</div>
    
    <div class="col-xs-10 col-xs-push-2 no-padding">
        <div id="tip1-header"class=" col-xs-4">Tip 1</div>
        <div id="tip2-header"class=" col-xs-4">Tip 2</div>
        <div id="tip3-header"class=" col-xs-4">Tip 3</div>
        <div id="tip1"class="tips col-xs-4">Wist je dat...<div class="tip1-text">Broden heel erg gezond zijn!</div></div>
        <div id="tip2"class="tips col-xs-4">Wist je dat...<div class="tip1-text">Broden heel erg gezond zijn! Vooral volkoren?</div></div>
        <div id="tip3"class="tips col-xs-4">Wist je dat...<div class="tip1-text">Broden heel erg gezond zijn! Of zoiets met extra tekst, meer tekst ter illustratie</div></div>
    </div>

@endsection

@section('footer')

    @include('partials.footer')

@endsection