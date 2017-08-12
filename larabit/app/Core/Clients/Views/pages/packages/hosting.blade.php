@extends('clients::layouts.default')

@section('content')

<div class="col-xs-12 text-right">
    <br>
    <a href="#" class="btn btn-default btn-lg "><i class="fa fa-window-restore "></i> cPanel</a>
    &nbsp;&nbsp;&nbsp;
    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-line-chart"></i> Upgrade</a>
    &nbsp;&nbsp;&nbsp;
    <br>
</div>


<div class="col-xs-12">
    <hr>
    <h3 class="text-uppercase"> Server mulakihost.com #15123</h3>

    <hr>
</div>
<style>
    .panel-heading-server{
        border-radius: 0;
        background: #3d8be0;
        color: #fff;
        font-weight: bold;
        letter-spacing: 2.6px;
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
    }
    .panel-body{
        font-size:16px;
    }
    .panel-default th{
        color:#3d8be0;
        font-weight:bold;
    }

</style>
<div class="col-xs-4">
    <div class="table-responsive packages">
        <div class="panel panel-default">
            <div class="panel-heading-server text-center text-uppercase">Info</div>
            <div class="panel-body">
                <div class="table-responsive ">
                    <table class="table ">
                        <tr>
                            <th class="text-right">Domain:</th>
                            <td>gitlab.webily.fi</td>
                        </tr>
                        <tr>
                            <th class="text-right">Nameserver 1:</th>
                            <td>ns1.mulakihost.com</td>
                        </tr>
                        <tr>
                            <th class="text-right">Nameserver 2:</th>
                            <td>ns2.mulakihost.com</td>
                        </tr>
                        <tr>
                            <th class="text-right">IP Address:</th>
                            <td>192.168.50.100</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="col-xs-4"> 
    <div class="panel panel-default">
        <div class="panel-heading-server text-center text-uppercase">System</div>
        <div class="panel-body">
            <div class="table-responsive ">
                <table class="table ">
                    <tr>
                        <th class="text-right">OS:</th>
                        <td>CentOS 7</td>
                    </tr>
                    <tr>
                        <th class="text-right">Disk:</th>
                        <td>40GB</td>
                    </tr>
                    <tr>
                        <th class="text-right">Bandwidth:</th>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th class="text-right">Websites:</th>
                        <td>5</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-4"> 
    <div class="panel panel-default">
        <div class="panel-heading-server text-center text-uppercase">Other Details</div>
        <div class="panel-body">
            <div class="table-responsive ">
                <table class="table ">
                    <tr>
                        <th class="text-right">Status:</th>
                        <td>Running</td>
                    </tr>
                    <tr>
                        <th class="text-right">Price:</th>
                        <td>8.00 EUR</td>
                    </tr>
                    <tr>
                        <th class="text-right">Billing term:</th>
                        <td>1 Yearly &nbsp;&nbsp; <a href="#" class="btn btn-sm btn-primary">Change</a></td>
                    </tr>
                    <tr>
                        <th class="text-right">Next Due on:</th>
                        <td>01-05-2017</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop