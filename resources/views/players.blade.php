@extends('adminlte::layouts.app')

@section('content')

<div style="text-align:center;padding-bottom:20px">
  <h1>Select 4 goalkeepers</h1>
</div>

@foreach($players->chunk(4) as $productChunk)

<div class="row">
    @foreach($productChunk as $player)
    <div class="col-lg-3">
        <div class="thumbnail">
            <img src="{{$player->imagePath}}" alt="Book">
            <div class="caption">
                <h3>{{$player->playerName}}</h3>
                <p class="description">
                    {{$player->clubName}}
                </p>
                <div class="clearfix">
                    <div class="pull-left price">Age: {{$player->playerAge}}</div>

                    <a href="{{route('product.addToCart',['id'=>$player->id ])}}" class="btn pull-right btn-success" role="button">Vote</a>


                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach

@endsection