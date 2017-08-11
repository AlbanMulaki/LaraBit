@extends('clients::layouts.default')

@section('content')

<div class="col-xs-12">
    <br>
    <a href="#" class="btn btn-default btn-lg "><i class="fa fa-terminal "></i> SSH</a>
    &nbsp;&nbsp;&nbsp;
    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-terminal"></i> Console</a>
    &nbsp;&nbsp;&nbsp;
    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-line-chart"></i> Reboot</a>
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
            <div class="panel-heading-server text-center text-uppercase">Server Info</div>
            <div class="panel-body">
                <div class="table-responsive ">
                    <table class="table ">
                        <tr>
                            <th class="text-right">Hostname:</th>
                            <td>gitlab.webily.fi</td>
                        </tr>
                        <tr>
                            <th class="text-right">Nameserver 1:</th>
                            <td>ns1.gitlab.webily.fi</td>
                        </tr>
                        <tr>
                            <th class="text-right">Nameserver 2:</th>
                            <td>ns2.gitlab.webily.fi</td>
                        </tr>
                        <tr>
                            <th class="text-right">Custom Label:</th>
                            <td>GitLab Server Webily</td>
                        </tr>
                        <tr>
                            <th class="text-right">Uptime:</th>
                            <td>33 Days</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="col-xs-4"> 
    <div class="panel panel-default">
        <div class="panel-heading-server text-center text-uppercase">Server System</div>
        <div class="panel-body">
            <div class="table-responsive ">
                <table class="table ">
                    <tr>
                        <th class="text-right">OS:</th>
                        <td>CentOS 7</td>
                    </tr>
                    <tr>
                        <th class="text-right">CPU:</th>
                        <td>1 Core/CPU</td>
                    </tr>
                    <tr>
                        <th class="text-right">Memory:</th>
                        <td>2GB</td>
                    </tr>
                    <tr>
                        <th class="text-right">Disk:</th>
                        <td>15GB</td>
                    </tr>
                    <tr>
                        <th class="text-right">Bandwidth:</th>
                        <td>1000GB</td>
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
                        <th class="text-right">Password:</th>
                        <td>aJzxcLDsdfEW21254QEts</td>
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
<div class="col-xs-12"> 
    <div class="panel panel-default">
        <div class="panel-heading-server text-center text-uppercase">Network Info</div>
        <div class="panel-body">
            <div class="table-responsive ">
                <table class="table">
                    <tr>
                        <th class="text-center">IP Address:</th>
                        <th class="text-center">Subnet Mask:</th>
                        <th class="text-center">Gateway:</th>
                    </tr>
                    <tr>
                        <td class="text-center">212.73.150.48</td>
                        <td class="text-center">255.255.255.0</td>
                        <td class="text-center">212.73.150.1</td>
                    </tr>
                    <tr>
                        <td class="text-center">2a07:5741:0:4e1::1 (first IP)</td>
                        <td class="text-center">/64</td>
                        <td class="text-center">2a07:5741:0:4e1::</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="3">
                            <small>*For IPv6 addresses, the whole /64 range is assigned to you. The first IP, :1, is automatically added to the OS.
                            </small>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12"> 
    <div class="panel panel-default">
        <div class="panel-heading-server text-center text-uppercase">Cancel VPS</div>
        <div class="panel-body">
            <div class="table-responsive ">
                <table class="table">
                    <tr>
                        <td class="text-center">By canceling your VPS, you are losing all your data. Be careful using this action !</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger"><i class="fa fa-times fa-lg"></i> Cancel this VPS</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop