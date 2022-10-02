@extends('adminlte::layouts.results')


@section('page-title')
    <div style="text-align:center;padding-bottom:40px" class="center">

        <img src="images/wc_2022.png" alt="WC 2022">
        <br><br>
        <h1>Le Vote des Internautes!</h1>
        <br><br>
    </div>
@endsection

@section('voting-results')
    <div style="text-align:center;padding-bottom:20px">

        <h2>Gardiens</h2>

    </div>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 10%">

                </th>
                <th style="width: 20%">
                    Joeur
                </th>
                <th style="width: 25%">
                    Avatar
                </th>
                <th style="width: 40%">
                    Pourcentage de Votes
                </th>

            </tr>
        </thead>
        @foreach ($goalies as $goalie)
            <tbody>
                <tr>
                    <td>

                    </td>
                    <td>
                        <h3>{{ $goalie->playerName }}</h3>
                        <br />
                        <h4>
                            {{ $goalie->clubName }}
                        </h4>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" style="width:75px;height:75px;" class="table-avatar"
                                    src="{{ $goalie->imagePath }}">
                            </li>

                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $goalie->votePercent }}"
                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $goalie->votePercent }}%">
                            </div>
                        </div>
                        <h4>
                            {{ $goalie->votePercent }}%
                        </h4>
                    </td>

                </tr>

            </tbody>
        @endforeach
    </table>

    <br>

    <div style="text-align:center;padding-bottom:20px">

        <h2>Défenseurs</h2>

    </div>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 10%">

                </th>
                <th style="width: 20%">
                    Joeur
                </th>
                <th style="width: 25%">
                    Avatar
                </th>
                <th style="width: 40%">
                    Pourcentage de Votes
                </th>

            </tr>
        </thead>
        @foreach ($defenders as $defender)
            <tbody>
                <tr>
                    <td>

                    </td>
                    <td>
                        <h3>{{ $defender->playerName }}</h3>
                        <br />
                        <h4>
                            {{ $defender->clubName }}
                        </h4>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" style="width:75px;height:75px;" class="table-avatar"
                                    src="{{ $defender->imagePath }}">
                            </li>

                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar"
                                aria-valuenow="{{ $defender->votePercent }}" aria-valuemin="0" aria-valuemax="100"
                                style="width: {{ $defender->votePercent }}%">
                            </div>
                        </div>
                        <h4>
                            {{ $defender->votePercent }}%
                        </h4>
                    </td>

                </tr>

            </tbody>
        @endforeach

    </table>

    <br>
    <div style="text-align:center;padding-bottom:20px">

        <h2>Milieux</h2>

    </div>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 10%">

                </th>
                <th style="width: 20%">
                    Joeur
                </th>
                <th style="width: 25%">
                    Avatar
                </th>
                <th style="width: 40%">
                    Pourcentage de Votes
                </th>

            </tr>
        </thead>
        @foreach ($midfielders as $mid)
            <tbody>
                <tr>
                    <td>

                    </td>
                    <td>
                        <h3>{{ $mid->playerName }}</h3>
                        <br />
                        <h4>
                            {{ $mid->clubName }}
                        </h4>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" style="width:75px;height:75px;" class="table-avatar"
                                    src="{{ $mid->imagePath }}">
                            </li>

                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $mid->votePercent }}"
                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $mid->votePercent }}%">
                            </div>
                        </div>
                        <h4>
                            {{ $mid->votePercent }}%
                        </h4>
                    </td>

                </tr>

            </tbody>
        @endforeach
    </table>



    <br>
    <div style="text-align:center;padding-bottom:20px">

        <h2>Attaquants</h2>

    </div>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 10%">

                </th>
                <th style="width: 20%">
                    Joeur
                </th>
                <th style="width: 25%">
                    Avatar
                </th>
                <th style="width: 40%">
                    Pourcentage de Votes
                </th>

            </tr>
        </thead>
        @foreach ($attackers as $attacker)
            <tbody>
                <tr>
                    <td>

                    </td>
                    <td>
                        <h3>{{ $attacker->playerName }}</h3>
                        <br />
                        <h4>
                            {{ $attacker->clubName }}
                        </h4>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" style="width:75px;height:75px;" class="table-avatar"
                                    src="{{ $attacker->imagePath }}">
                            </li>

                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar"
                                aria-valuenow="{{ $attacker->votePercent }}" aria-valuemin="0" aria-valuemax="100"
                                style="width: {{ $attacker->votePercent }}%">
                            </div>
                        </div>
                        <h4>
                            {{ $attacker->votePercent }}%
                        </h4>
                    </td>

                </tr>

            </tbody>
        @endforeach
    </table>

    <br><br>
    <div style="text-align:center;" class="center">
        <span>{{ $totalVotes }} votes.</span>
    </div>
@endsection
