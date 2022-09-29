
@extends('adminlte::layouts.landing')

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$product->imagePath}}" alt="Book">
                        <div class="caption">
                            <h3>{{$product->title}}</h3>
                            <p class="description">
                                {{$product->description}}
                            </p>
                            <div class="clearfix">
                                <div class="pull-left price">${{$product->price}}</div>
                                @if(Auth::guest())
                                    <a href="{{url('/login')}}"
                                       class="btn pull-right btn-success" role="button">Add to Cart</a>
                                @else
                                    <a href="{{route('product.addToCart',['id'=>$product->id ])}}"
                                       class="btn pull-right btn-success" role="button">Add to Cart</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach

@endsection
