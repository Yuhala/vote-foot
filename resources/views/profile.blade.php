
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Profile information
@endsection

@section('main-content')

    <div class=" row col-md-8 col-md-offset-2">
        <div class="box box-info col-sm-6 ">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Orders</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Popularity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>Call of Duty IV</td>
                            <td><span class="label label-success">Shipped</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{route('shop.market')}}" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>

            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
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
                    <li class="item">
                        <div class="product-img">
                            <img src="{{asset('img/avatar.png')}}" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Samsung TV
                                <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="{{route('shop.market')}}" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>



@endsection