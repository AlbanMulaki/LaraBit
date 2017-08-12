@extends('clients::layouts.default')

@section('content')

<div class="container">

    <h3>Your Packages</h3>
    <div class="table-responsive packages">
        <table class="table table-striped ">
            <tr>
                <th>Type</th>
                <th>Server / Domain</th>
                <th>OS</th>
                <th>Label</th>
                <th>IPs</th>
                <th>Price</th>
                <th>Status</th>
                <th>Controle</th>
            </tr>
            <tr>
                <td><i class="fa fa-database fa-lg"></i></td>
                <td>mulakihost.com</td>
                <td>CentOS 7</td>
                <td></td>
                <td><span class="label label-primary">212.73.150.48</span></td>
                <td>€ 4.00 / month</td>
                <td><span class="label label-success">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
            <tr>
                <td><i class="fa fa-server fa-lg"></i></td>
                <td>mulakihost.com</td>
                <td>CentOS 7</td>
                <td></td>
                <td><span class="label label-primary">212.73.150.48</span></td>
                <td>€ 4.00 / month</td>
                <td><span class="label label-success">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
            <tr>
                <td><i class="fa fa-at fa-lg"></i></td>
                <td>mulakihost.com</td>
                <td>CentOS 7</td>
                <td></td>
                <td><span class="label label-primary">212.73.150.48</span></td>
                <td>€ 4.00 / month</td>
                <td><span class="label label-success">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
            <tr>
                <td><i class="fa fa-at fa-lg"></i></td>
                <td>pragmaticlinux.org</td>
                <td></td>
                <td></td>
                <td></td>
                <td>€ 4.00 / Year</td>
                <td><span class="label label-primary">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
            <tr>
                <td><i class="fa fa-server fa-lg"></i></td>
                <td>mulakihost.com</td>
                <td>CentOS 7</td>
                <td></td>
                <td><span class="label label-primary">212.73.150.48</span></td>
                <td>€ 4.00 / month</td>
                <td><span class="label label-success">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
            <tr>
                <td><i class="fa fa-server fa-lg"></i></td>
                <td>mulakihost.com</td>
                <td>CentOS 7</td>
                <td></td>
                <td><span class="label label-primary">212.73.150.48</span></td>
                <td>€ 4.00 / month</td>
                <td><span class="label label-success">OK</span></td>
                <td><a class="btn btn-primary">View details > </a></td>
            </tr>
        </table>
    </div>

</div>

@stop