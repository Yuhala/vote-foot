@extends('adminlte::layouts.app')

@section('page-title')



<div style="text-align:center;padding-bottom:40px" class="center">

    <h1>Faites votre liste des Lions Indomptables pour la Coupe du monde 2022!</h1>
    <img id="wc_img" src="images/wc_2022.png" alt="WC 2022">
    <br></br>




</div>



@endsection

@section('goalie-content')

<div style="text-align:center;padding-bottom:20px">
    @if(empty($checkedGoalies))
    <h3>Sélectionnez quatre (4) gardiens: 0/4 </h3>
    @else
    <h3>Sélectionnez quatre (4) gardiens: {{$checkedGoalies}}/4 </h3>
    @endif


</div>






@foreach($goalies->chunk(4) as $goalieChunk)

<div class="row">
    @foreach($goalieChunk as $goalie)
    <div class="col-lg-3">
        <div class="thumbnail">
            <img src="{{$goalie->imagePath}}" style="float:left;width: 200px;height: 200px;object-fit: cover;" alt="Player">

            <div class="caption">
                <h3>{{$goalie->playerName}}</h3>
                <p class="description">
                    Club: {{$goalie->clubName}}
                </p>
                <div class="clearfix">
                    <div class="pull-left price">Age: {{$goalie->playerAge}}</div>                   
                    <br>
                    <br>
                    <form method="post" action="/choiceUpdate">
                        <div class="icheck-primary">

                            <input type="checkbox" value="{{$goalie->id}}" name="idsGoalies[]" id="todoCheck1">

                            <span class="text"> Choisir</span>
                            
                        </div>
                    </form>


                </div>



            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach

@endsection

@section('defense-content')
<div style="text-align:center;padding-bottom:20px">
    <h3>Sélectionnez neuf (9) défenseurs: 0/9 </h3>
</div>

@foreach($defenders->chunk(4) as $defenseChunk)
<div class="row">
    @foreach($defenseChunk as $defender)
    <div class="col-lg-3">
        <div class="thumbnail">
            <img src="{{$defender->imagePath}}" style="float:left;width: 200px;height: 200px;object-fit: cover;" alt="Book">
            <div class="caption">
                <h3>{{$defender->playerName}}</h3>
                <p class="description">
                    Club: {{$defender->clubName}}
                </p>
                <div class="clearfix">
                    <div class="pull-left price">Age: {{$defender->playerAge}}</div>

                    <br>
                    <br>
                    <form method="get" action="{{route('choiceUpdate')}}">
                        <div class="icheck-primary">

                            <input type="checkbox" value="1" name="idsDefenders[]" id="todoCheck1">

                            <span class="text"> Choisir</span>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach

@endsection

@section('midfield-content')
<div style="text-align:center;padding-bottom:20px">
    <h3>Sélectionnez six (6) milieu: 0/6 </h3>
</div>

@foreach($midfielders->chunk(4) as $midfieldChunk)
<div class="row">
    @foreach($midfieldChunk as $midfielder)
    <div class="col-lg-3">
        <div class="thumbnail">
            <img src="{{$midfielder->imagePath}}" style="float:left;width: 200px;height: 200px;object-fit: cover;" alt="Player">
            <div class="caption">
                <h3>{{$midfielder->playerName}}</h3>
                <p class="description">
                    Club: {{$midfielder->clubName}}
                </p>
                <div class="clearfix">
                    <div class="pull-left price">Age: {{$midfielder->playerAge}}</div>

                    <br>
                    <br>
                    <form method="get" action="{{route('choiceUpdate')}}">
                        <div class="icheck-primary">

                            <input type="checkbox" value="1" name="idsMids[]" id="todoCheck1">

                            <span class="text"> Choisir</span>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach

@endsection

@section('attack-content')
<div style="text-align:center;padding-bottom:20px">
    <h3>Sélectionnez sept (7) attaquants: 0/7 </h3>
</div>

@foreach($attackers->chunk(4) as $attackChunk)
<div class="row">
    @foreach($attackChunk as $attacker)
    <div class="col-lg-3">
        <div class="thumbnail">
            <img src="{{$attacker->imagePath}}" style="float:left;width: 200px;height: 200px;object-fit: cover;" alt="Book">
            <div class="caption">
                <h3>{{$attacker->playerName}}</h3>
                <p class="description">
                    Club: {{$attacker->clubName}}
                </p>
                <div class="clearfix">
                    <div class="pull-left price">Age: {{$attacker->playerAge}}</div>

                    <br>
                    <br>
                    <form method="get" action="{{route('choiceUpdate')}}">
                        <div class="icheck-primary">

                            <input type="checkbox" value="1" name="idsAttackers[]" id="todoCheck1">

                            <span class="text"> Choisir</span>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach

@endsection