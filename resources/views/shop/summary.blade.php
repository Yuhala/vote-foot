@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    <div class="container col-md-6 col-md-offset-3">
    <div class="panel-title text-center">
        <h2 class="title">Facture</h2>
        <hr />
    </div>
    <div class="row pad-top-botm ">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="images/logo.png" style="padding-bottom:20px;" alt="LOGO" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

            <strong>Shopping Cart</strong>
            <br />
            <i>Address :</i> Yaounde,
            <br />
            ENSP,
            <br />
            Cameroon.

        </div>
    </div>
    <div  class="row text-center contact-info">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <hr />
            <span>
                 <strong>Email : </strong>  ensp@projetreseau.com
            </span>
            <br/>
            <span>
                 <strong>Call : </strong>  +237-671-547-7718
             </span>
            <hr />
        </div>
    </div>
    <div  class="row pad-top-botm client-info">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4>  <strong>Information Client</strong></h4>
            <strong>Peterson Yuhala</strong>
            <br />
            <b>Address :</b> ENSP, Yaounde
            <br />
            Cameroon
            <br />
            <b>Tel :</b> +237-671547718
            <br />
            <b>E-mail :</b> petersonyuhala@gmail.com
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

            <h4>  <strong>Détails du Paiment </strong></h4>
            <b>Montant : ${{$total}}  </b><br/>
            <b>Statut :  Payé </b>
            <br />
            Date de Livraison :  23rd April 2017
            <br />
            Date d'Achat :  17th April 2017
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Libèlle</th>
                        <th>Quantité.</th>
                        <th>Unit Price</th>
                        <th>Sub Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product['item']['title']}}</td>
                            <td>{{$product['qty']}}</td>
                            <td>$ {{$product['price']/$product['qty']}}</td>
                            <td>${{$product['price']}}</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <hr />
        <div class="ttl-amts">
            <h5> Total  : $ {{$total}}  </h5>
        </div>


        <hr />
        <div class="ttl-amts">
            <h4> <strong>Net à Payer : $ {{$total}}</strong> </h4>

        </div>
    </div>
</div>

<div class="">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a href="{{route('payment')}}" type="button" class="btn btn-success">Checkout</a>
        <hr>
        <hr>
    </div>
</div>

</div>

@endsection






