<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show



<head>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        #wc_img img {
            width: 400;
        }

        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(2);
            /* IE */
            -moz-transform: scale(2);
            /* FF */
            -webkit-transform: scale(2);
            /* Safari and Chrome */
            -o-transform: scale(2);
            /* Opera */
            transform: scale(2);

            margin-left: 50px;
            margin-right: 5px;
            padding: 10px;
        }

        /* Might want to wrap a span around your checkbox text */
        .checkboxtext {
            /* Checkbox text */
            font-size: 110%;
            display: inline;
        }

        /* Div percentages for player rows */
        #player_container {}

        .row {
            display: flex;
            /* equal height of the children */
        }

        .col {
            flex: 1;
            /* additionally, equal width */

            padding: 1em;
            border: solid;
        }
    </style>

    <!-- Script to call Player controller when checkboxes are clicked -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


<body class="skin-blue sidebar-collapse ">


    <div id="app" v-cloak>
        <div class="wrapper">

            @include('adminlte::layouts.partials.mainheader')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">


                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->

                    <div style="text-align:center;padding-bottom:40px" class="center">
                        
                        <img id="wc_imgxx" src="images/wc_2022.png" alt="WC 2022">
                        <br><br>
                        <!--<h1>Faites votre liste des Lions Indomptables pour la Coupe du monde 2022!</h1>-->
                        <h1>Choisissez vos Lions!</h1>
                        <br><br>


                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->


            <form action="validate-vote" method="POST" id="validate-vote-form">
                @csrf

                <div id="">
                    <!-- Content Wrapper: goalkeepers -->
                    <div class="content-wrapper" >

                        @include('adminlte::layouts.partials.contentheader')

                        <!-- Main content -->
                        <section class="content">
                            <!-- Your Page Content Here -->

                            <div style="text-align:center;padding-bottom:20px">

                                <h3>Sélectionnez quatre (4) gardiens: <span id="numSelectedGoalies">0</span>/4 </h3>

                            </div>


                            @foreach ($goalies->chunk(4) as $goalieChunk)
                                <div class="row">
                                    @foreach ($goalieChunk as $goalie)
                                        <div class="col-lg-3">
                                            <div class="thumbnail">
                                                <!--<img src="{{ $goalie->imagePath }}" style="float:left;width: 200px;height: 200px;object-fit: cover;" alt="Player">-->
                                                <img src="{{ $goalie->imagePath }}"
                                                    style="float:left;width: 200px;height: 200px;object-fit: cover;"
                                                    alt="Player">

                                                <div class="caption">
                                                    <h3>{{ $goalie->playerName }}</h3>
                                                    <p class="description">
                                                        &nbsp Club: {{ $goalie->clubName }}
                                                    </p>
                                                    <div class="clearfix">
                                                        <div class="pull-left price">&nbsp Age: {{ $goalie->playerAge }}
                                                        </div>
                                                        <br>
                                                        <br>


                                                        <div class="icheck-primary">

                                                            <input type="checkbox" value="{{ $goalie->id }}"
                                                                name="idsGoalies[]" id="checkbox-goalie">

                                                            <span class="text"> Choisir</span>

                                                        </div>


                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->

                    <!-- Content Wrapper: defender players -->
                    <div class="content-wrapper">

                        @include('adminlte::layouts.partials.contentheader')

                        <!-- Main content -->
                        <section class="content">
                            <!-- Your Page Content Here -->

                            <div style="text-align:center;padding-bottom:20px">
                                <h3>Sélectionnez neuf (9) défenseurs: <span id="numSelectedDefenders">0</span>/9 </h3>
                            </div>

                            @foreach ($defenders->chunk(4) as $defenseChunk)
                                <div class="row">
                                    @foreach ($defenseChunk as $defender)
                                        <div class="col-lg-3">
                                            <div class="thumbnail">
                                                <img src="{{ $defender->imagePath }}"
                                                    style="float:left;width: 200px;height: 200px;object-fit: cover;"
                                                    alt="Book">
                                                <div class="caption">
                                                    <h3>{{ $defender->playerName }}</h3>
                                                    <p class="description">
                                                        &nbsp Club: {{ $defender->clubName }}
                                                    </p>
                                                    <div class="clearfix">
                                                        <div class="pull-left price">&nbsp Age:
                                                            {{ $defender->playerAge }}
                                                        </div>

                                                        <br>
                                                        <br>

                                                        <div class="icheck-primary">

                                                            <input type="checkbox" value="{{ $defender->id }}"
                                                                name="idsDefenders[]" id="">

                                                            <span class="text"> Choisir</span>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->

                    <!-- Content Wrapper: midfielder players-->
                    <div class="content-wrapper">

                        @include('adminlte::layouts.partials.contentheader')

                        <!-- Main content -->
                        <section class="content">
                            <!-- Your Page Content Here -->

                            <div style="text-align:center;padding-bottom:20px">
                                <h3>Sélectionnez six (6) milieux: <span id="numSelectedMids">0</span>/6 </h3>
                            </div>

                            @foreach ($midfielders->chunk(4) as $midfieldChunk)
                                <div class="row">
                                    @foreach ($midfieldChunk as $midfielder)
                                        <div class="col-lg-3">
                                            <div class="thumbnail">
                                                <img src="{{ $midfielder->imagePath }}"
                                                    style="float:left;width: 200px;height: 200px;object-fit: cover;"
                                                    alt="Player">
                                                <div class="caption">
                                                    <h3>{{ $midfielder->playerName }}</h3>
                                                    <p class="description">
                                                        &nbsp Club: {{ $midfielder->clubName }}
                                                    </p>
                                                    <div class="clearfix">
                                                        <div class="pull-left price">&nbsp Age:
                                                            {{ $midfielder->playerAge }}
                                                        </div>

                                                        <br>
                                                        <br>

                                                        <div class="icheck-primary">

                                                            <input type="checkbox" value="{{ $midfielder->id }}"
                                                                name="idsMids[]" id="">

                                                            <span class="text"> Choisir</span>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->

                    <!-- Content Wrapper: attacker players  -->
                    <div class="content-wrapper">

                        @include('adminlte::layouts.partials.contentheader')

                        <!-- Main content -->
                        <section class="content">
                            <!-- Your Page Content Here -->

                            <div style="text-align:center;padding-bottom:20px">
                                <h3>Sélectionnez sept (7) attaquants: <span id="numSelectedAttackers">0</span>/7 </h3>
                            </div>

                            @foreach ($attackers->chunk(4) as $attackChunk)
                                <div class="row">
                                    @foreach ($attackChunk as $attacker)
                                        <div class="col-lg-3">
                                            <div class="thumbnail">
                                                <img src="{{ $attacker->imagePath }}"
                                                    style="float:left;width: 200px;height: 200px;object-fit: cover;"
                                                    alt="Book">
                                                <div class="caption">
                                                    <h3>{{ $attacker->playerName }}</h3>
                                                    <p class="description">
                                                        &nbsp Club: {{ $attacker->clubName }}
                                                    </p>
                                                    <div class="clearfix">
                                                        <div class="pull-left price">&nbsp Age:
                                                            {{ $attacker->playerAge }}
                                                        </div>

                                                        <br>
                                                        <br>

                                                        <div class="icheck-primary">

                                                            <input type="checkbox" value="{{ $attacker->id }}"
                                                                name="idsAttackers[]" id="todoCheck1">

                                                            <span class="text"> Choisir</span>
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->



                    <!-- Content Wrapper: vote validate button -->
                    <div class="content-wrapper">

                        @include('adminlte::layouts.partials.contentheader')

                        <!-- Main content -->
                        <section class="content">
                            <!-- Your Page Content Here -->

                            <div class="center">
                                <button type="submit" class="btn btn-primary btn-block btn-lg" id="validateButton"
                                    disabled="disabled">
                                    Valider ma Sélection
                                </button>

                            </div><!-- /.col -->
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->

                </div>
            </form>


            <div class="content-wrapper">


                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    <div style="text-align:center;margin-top:-200px;" class="center">
                        <h3 style="font-family">SHESA Golden Jubilee!!!</h3>
                        <img src="images/shesa_jubilee.jpg" class="center" alt="shesa jubilee">

                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->


            @include('adminlte::layouts.partials.footer')


        </div><!-- ./wrapper -->

    </div>


    @section('scripts')
        @include('adminlte::layouts.partials.scripts')
    @show

    <script src="js/checkbox-handler.js"></script>
</body>

</html>
