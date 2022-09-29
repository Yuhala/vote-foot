@extends('adminlte::layouts.app')

@section('htmlheader_title')
    SERVICES MARKET
@endsection

@section('main-content')
    @if(Session::has('cart'))

        <div class=" row col-md-6 col-md-offset-3">

            <div class="box box-primary col-sm-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Recently Added Products</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        @foreach($products as $product)
                        <li class="item">
                            <div class="product-img">
                                <img src="{{$product['item']['imagePath']}}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="{{route('shop.market')}}" class="product-title">{{$product['item']['title']}}
                                    <span class="label label-primary pull-right">${{$product['price']}}</span></a>
                        <span class="product-description">
                            Quantity: {{$product['qty']}}
                        </span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="{{route('shop.market')}}" class="uppercase">View All Products</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>



    <hr>

        <div class="row no-print">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <div class="product-info">
                    <span class="pull-left">
                   <h3> Total: ${{$totalPrice}}</h3>
                </span>
                </div>


                <a href="{{route('invoice')}}" type="" class="btn btn-success pull-right"><i class="fa fa-ticket"></i>See Invoice
                </a>

            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection
