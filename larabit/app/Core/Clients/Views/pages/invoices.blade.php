@extends('clients::layouts.default')

@section('content')

<div class="container">
    <div class="col-xs-12" style="padding-bottom:15px;padding-top:15px;"> 
        <div class=" col-xs-12 col-lg-6"> 
            <h3>Your Invoices</h3>
        </div>
        <div class="text-right col-xs-12 col-lg-6"> 
            <span class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Account balance: <i class="fa fa-eur"></i> 150.50
            </span>
            <a href="#" class="btn btn-success">
                Add funds
            </a>

        </div>
    </div>
    <div class="col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unpaid" aria-controls="unpaid" role="tab" data-toggle="tab">Unpaid</a></li>
            <li role="presentation"><a href="#paid" aria-controls="paid" role="tab" data-toggle="tab">Paid</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade in " id="unpaid">
                <div class="table-responsive ">
                    <table class="table table-striped ">
                        <tr>
                            <th>Invoice Date</th>
                            <th>Information</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Due</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / VPS / IPAddress</td>
                            <td>€ 4.00 EUR</td>
                            <td><span class="label label-warning">Unpaid</span></td>
                            <td><span class="label label-info">09-08-2017</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-shopping-cart "> </i> Pay Now</a></td>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / Web Hosting / pragmaticlinux.org(192.168.50.100)</td>
                            <td>€ 50.00 EUR</td>
                            <td><span class="label label-warning">Unpaid</span></td>
                            <td><span class="label label-info">09-08-2017</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-shopping-cart "> </i> Pay Now</a></td>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / Web Hosting / VPS(192.168.50.100)</td>
                            <td>€ 50.00 EUR</td>
                            <td><span class="label label-warning">Unpaid</span></td>
                            <td><span class="label label-info">09-08-2017</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-shopping-cart "> </i> Pay Now</a></td>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / Web Hosting / pragmaticlinux.org(192.168.50.100)</td>
                            <td>€ 50.00 EUR</td>
                            <td><span class="label label-danger">Overdue</span></td>
                            <td><span class="label label-info">09-08-2017</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-shopping-cart "> </i> Pay Now</a></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade in " id="paid">

                <div class="table-responsive ">
                    <table class="table table-striped ">
                        <tr>
                            <th>Date</th>
                            <th>Information</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / VPS / IPAddress</td>
                            <td>€ 4.00 EUR</td>
                            <td><span class="label label-success">Paid</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-file-text-o"> </i> Download Invoice</a></td>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / VPS / IPAddress</td>
                            <td>€ 4.00 EUR</td>
                            <td><span class="label label-success">Paid</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-file-text-o"> </i> Download Invoice</a></td>
                        </tr>
                        <tr>
                            <td><span class="label label-primary">09-08-2017</span></td>
                            <td>Order #175631 / VPS / IPAddress</td>
                            <td>€ 4.00 EUR</td>
                            <td><span class="label label-success">Paid</span></td>
                            <td><a class="btn btn-success btn-xs"><i class="fa fa-file-text-o"> </i> Download Invoice</a></td>
                        </tr>
                    </table>
                </div>


            </div>
        </div>



    </div>
</div>
@stop