@extends('adminlte::layouts.results')


@section('page-title')
<div style="text-align:center;padding-bottom:40px" class="center">

    <img src="images/wc_2022.png" alt="WC 2022">
    <br></br>
    <h1>Résultats des Votes!</h1>

</div>

@endsection

@section('voting-results')

<tbody>
    <tr>
        <td>
            #
        </td>
        <td>
            <a>
                AdminLTE v3
            </a>
            <br />
            <small>
                Created 01.01.2019
            </small>
        </td>
        <td>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <img alt="Avatar" style="width:50px;height:50px;" class="table-avatar" src="images/avatar.png">
                </li>

            </ul>
        </td>
        <td class="project_progress">
            <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                </div>
            </div>
            <small>
                57% Complete
            </small>
        </td>
        <td class="project-state">
            <span class="badge badge-success">Success</span>
        </td>

    </tr>
    <tr>
        <td>
            #
        </td>
        <td>
            <a>
                AdminLTE v3
            </a>
            <br />
            <small>
                Created 01.01.2019
            </small>
        </td>
        <td>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <img alt="Avatar" style="width:50px;height:50px;" class="table-avatar" src="images/avatar.png">
                </li>

            </ul>
        </td>
        <td class="project_progress">
            <div class="progress progress-sm">
                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                </div>
            </div>
            <small>
                47% Complete
            </small>
        </td>
        <td class="project-state">
            <span class="badge badge-success">Success</span>
        </td>

    </tr>





</tbody>

@endsection