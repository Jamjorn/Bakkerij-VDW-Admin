@extends('app')



@section('content')

<div class="col-xs-10 col-xs-push-2">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="CRUDcreate"> Create New Product</a>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Productnummer</th>
            <th>Naam</th>
            <th>PrijsEenheid</th>
             <th>Prijsroute</th>
              <th>btw</th>
               <th>Groep</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td >{{  $product->Produktnummer }} </td>
        <td>{{ $product->Naamprodukt}}</td>
        <td >{{ $product->PrijsEenheid}}</td>
        <td>{{ $product->Prijsroute}}</td>
        <td>{{ $product->btw}}</td>
        <td>{{ $product->groep}}</td>


        <td>
            <a class="btn btn-info" href="{{ route('productCRUD.show',$product->Produktnummer) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('productCRUD.edit',$product->Produktnummer) }}">Edit</a>
            <a class="btn btn-danger" href="<?php echo 'deleteCrud/'. $product->Produktnummer  ?>">Delete</a>
         
        </td>
    </tr>
    @endforeach
    </table>
    {!! $products->render() !!}
  </div>


@endsection