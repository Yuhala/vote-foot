@extends('adminlte::layouts.app')

@section('contentheader_title')

@endsection
@section('main-content')
    <div class="row col-md-6 col-md-offset-3">
        <h3 class="box-title text-center">Credit Card Payment</h3>
        <div class="box box-info col-sm-6">
            <div class="box-header">

                <h4>Your Total: ${{$total}}</h4>
            </div>
            <div id="charge-error" class="alert alert-danger {{!Session::has('error')? 'hidden':''}}">
                {{Session::get('error')}}
            </div>
            <form action="{{route('checkout')}}" method="post" id="checkout-form">
                <div class="box-body">
                    <!--Name field-->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="name" class="form-control " required>
                        </div>
                    </div>
                    <!--Address Field-->
                    <div class="form-group">
                        <label for="name">Address</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </div>
                            <input type="text" id="address" class="form-control " required>
                        </div>
                    </div>
                    <!--Holder Name-->
                    <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="card-name" class="form-control " required>
                        </div>

                    </div>
                    <!--Card Number-->
                    <div class="form-group">
                        <label for="card-number">Credit Card Number</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <input type="text" id="card-number" class="form-control " required>
                        </div>

                    </div>
                    <!--Card Expiration info-->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-month">Expiration Month</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="card-expiry-month " class="form-control " required>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-year">Expiration Year</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="card-expiry-year " class="form-control " required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-barcode"></i>
                            </div>
                            <input type="text" id="card-cvc" class="form-control " required>
                        </div>

                    </div>




                </div>
                {{csrf_field()}}
                <div class="box-footer clearfix">
                    <button type="submit"  class="btn btn-sm btn-info btn-flat pull-right">Purchase</button>
                </div>
            </form>
            <!-- /.box-body -->
        </div>

    </div>

@endsection


