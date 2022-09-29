@extends('adminlte::layouts.app')

@section('contentheader_title')

@endsection

 @section('main-content')
     <center><h3>Invoice</h3> </center>
     <div class="box box-info ">
         <div class="row">

             <div class="col-xs-8 col-xs-offset-2">
                 <h2 class="page-header">
                     <i class="fa fa-globe"></i> Network Project, Inc.
                     <small class="pull-right">Date: 2/10/2014</small>
                 </h2>
             </div>
             <!-- /.col -->
         </div>
         <!-- info row -->
         <div class="row invoice-info col-sm-8 col-sm-offset-2 ">
             <div class="col-sm-4 invoice-col">
                 From
                 <address>
                     <strong>Networking Project, Inc.</strong><br>
                     Polytech Yaounde<br>
                     Phone: (237) 671547718<br>
                     Email: me@netproject.com
                 </address>
             </div>
             <!-- /.col -->
             <div class="col-sm-4">
                 To
                 <address>
                     <strong>{{ Auth::user()->name }}</strong><br>
                     Address: {{ Auth::user()->address }}<br>
                     Phone: (555) 539-1037<br>
                     Email: {{ Auth::user()->email }}
                 </address>
             </div>
             <!-- /.col -->
             <div class="col-sm-4 ">
                 <b>Invoice #007612</b><br>
                 <br>
                 <b>Order ID:</b> 4F3S8J<br>
                 <b>Payment Due:</b> 2/22/2014<br>
                 <b>Account:</b> 968-34{{ Auth::user()->id }}
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->

         <!-- Table row -->
         <div class="row">
             <div class="col-xs-8 col-xs-offset-2 table-responsive">
                 <table class="table table-striped">
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
             <!-- /.col -->
         </div>
         <!-- /.row -->

         <div class="row col-xs-8 col-xs-offset-2">
             <!-- accepted payments column -->
             <div class="col-xs-6">
                 <p class="lead">Payment Methods:</p>
                 <img src="{{asset('img/visa.png')}}" alt="Visa">
                 <img src="{{asset('img/mastercard.png')}}" alt="Mastercard">
                 <img src="{{asset('img/paypal2.png')}}" alt="Paypal">
                 <img src="{{asset('img/mobii.PNG')}}" alt="Paypal">

                 <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                     In order to pay by cash on home delivery, generate pdf or print this invoice statement
                 </p>
             </div>
             <!-- /.col -->
             <div class="col-xs-6">
                 <p class="lead">Amount Due 2/22/2014</p>

                 <div class="table-responsive">
                     <table class="table">

                         <tr>
                             <th>Shipping:</th>
                             <td>$0.00</td>
                         </tr>
                         <tr>
                             <th>Total:</th>
                             <td>${{$total}}</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->

         <!-- this row will not appear when printing -->
         <div class="row no-print">
             <div class="col-xs-8 col-xs-offset-2">
                <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>-->
                 <a href="{{route('payment')}}" type="" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                 </a>
                 <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                     <i class="fa fa-download"></i> Generate PDF
                 </button>
             </div>
         </div>

     </div>



 @endsection