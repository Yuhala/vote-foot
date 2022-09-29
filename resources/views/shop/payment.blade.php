@extends('adminlte::layouts.app')

@section('contentheader_title')
    <p></p>
@endsection

@section('main-content')
    <div class="row col-md-6 col-md-offset-3">
      <center>  <h3 class="box-title">Payment Methods</h3></center>

        <div id="charge-error" class="alert alert-danger {{!Session::has('error')? 'hidden':''}}">
            {{Session::get('error')}}
        </div>
        <div class="box box-primary col-sm-6">
            <div class="box-header with-border">
                Your Total: ${{$total}}
            </div>
            <!-- /.box-header -->
            <form >
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">

                            <a class="product-title">@include('shop.paypal')   Pay via PayPal</a>

                        </li>
                        <li class="item">
                            <a href="{{route('checkout')}}" class="product-title"><img src="{{asset('img/mastercard.png')}}"> Pay via Credit Card</a>

                        </li>
                        <li class="item">
                            <a href="https://mobilemoney.mtncameroon.net/MoMoWebAppMTNCameroon/" class="product-title"><img src="{{asset('img/mobii.PNG')}}"> Pay via Mobile Money</a>
                        </li>
                    </ul>
                </div>
            </form>
            {{csrf_field()}}
        </div>

    </div>

@endsection






