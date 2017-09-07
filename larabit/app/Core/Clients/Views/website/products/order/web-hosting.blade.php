@extends('clients::layouts.default')

@section('content')
<style>
    .order{
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    }
    .order h4{
        color: #fff;
        font-weight: bold;
    }

    .order li {
        list-style: none;
        padding: 6px;
    }
    .order .tab-content .tab-pane .col-md-12{
        background: #fff;
    }
    .order .nav-tabs li{
        padding: 0px;
        background: #fff;
    }
    .order .nav-tabs .active,
    .order .nav-tabs .active a:link{
        border-bottom:2px solid #3d8be0;
        margin-right:0px;
    }

    .order .nav-tabs>li>a:hover{
        border-bottom:2px solid #3d8be0;
        background:#fff;

    }
    .order div h4{
        padding-left:25px;
        padding-right:25px;
        padding:20px;
        background: #3d8be0;
    }

    .domain-order{
        padding-top:20px;
        padding-bottom:30px;
    }

    .form-control{
        border-radius: 0;
        border:1px solid #3d8be0;
    }

    .billing-information {
        padding-top:30px;
        padding-bottom:40px;
        background:#fff;
    }
    .billing-information .form-control{
        border: 1px solid #d6e1e5;
    }    
    .billing-information .input-group-addon{
        background-color: #e1eef3;
        color: #93a4aa;
        border: 1px solid #d6e1e5;
    }
    .billing-information .form-control:focus{
        border:1px solid #3d8be0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
    }
    #review-order h4{
        background: none;
        color:#4A5960;
        padding:0 0 0 30px;
    }
</style>

<div class=" header-box">
    <div class="container ">
        <header>
            <h2>Web Hosting</h2>
            <h4>
                Deliver your web experience on MulakiHost fast, scalable Hosting. 
            </h4>
        </header>
    </div>
</div>

<div class="container ">
    
        {{ csrf_field() }}
        <input type="hidden" name="myowndomain" value="0"/>
        <div class='col-xs-12 order'>
            <div class='row'>
                <h4 class='text-uppercase'>1. &nbsp;<span class="fa fa-cubes fa-lg"></span>&nbsp;&nbsp;Choose a Plan</h4>
            </div> 
            <div class='row' class="text-center" id='domain-info'>
                <label class="control-label col-md-3  text-right" style="margin-top:10px;" for="hostingplan"><p>Hostng Plan</p></label>
                <div class="col-md-7">
                    <div class="form-group ">
                        <select class="form-control input-lg" id="hostingplan" name="hostingplan">
                            @foreach($products['products']['product'] as $product)
                            <option value="{{ $product['pid'] }}">{{ $product['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <label class="control-label col-md-3  text-right" style="margin-top:10px;" for="billingcycle"><p>Billing Cycle</p></label>
                <div class="col-md-7">
                    <div class="form-group ">
                        <select class="form-control input-lg" id="billingcycle" name="billingcycle">
                            <option>1 Month - €4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class='row'>
                <h4 class='text-uppercase'>2. &nbsp;<span class="fa fa-globe fa-lg"></span>&nbsp;&nbsp;Choose Domain</h4>
            </div> 
            <div class='row' class="text-center" id='domain-info'>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active col-md-offset-3 col-md-3 text-center"><a href="#register-new-domain" aria-controls="home" role="tab" data-toggle="tab">Register a domain</a></li>
                    <li role="presentation" class='col-md-3 text-center'><a href="#owned-domain" aria-controls="profile" role="tab" data-toggle="tab">Already own the domain</a></li>
                </ul>
                <div class="row ">
                    <div class="tab-content col-md-12 ">
                        <div role="tabpanel" class="tab-pane in fade active" id="register-new-domain">
                            <div class="col-md-12 text-center domain-order">
                                <label class="control-label col-md-3  text-right" style="margin-top:10px;" for="domainrt"><p>Enter your domain</p></label>
                                <div class="col-md-5 col-sm-12">
                                    <div class="form-group text-left">
                                        <input class="form-control input-lg" id="domainrt" name="domain" placeholder="yourdomain" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2   col-xs-10">
                                    <div class="form-group ">
                                        <select class="form-control input-lg" id="domaindropdown" name="tld">
                                            @foreach($tldPricing['pricing'] as $tld=>$value)
                                            <option value="{{ $tld }}" @if($loop->index == 0) selected @endif>.{{ $tld }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2  col-xs-6">
                                    <button class="btn btn-primary btn-lg" id="domain_search">Check</button>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div id="status-domain">
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="owned-domain">

                            <div class="col-md-12 text-center domain-order">
                                <label class="control-label col-md-3  text-right" style="margin-top:10px;" for="domainrt"><p>Enter your domain</p></label>
                                <div class="col-md-5 col-sm-12">
                                    <div class="form-group text-left">
                                        <input class="form-control input-lg" id="domainrt" name="domaintransfer" placeholder="yourdomain.com" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2  col-xs-6">
                                    <button class="btn btn-primary btn-lg" id="save-domain">save</button>
                                </div>
                            </div>
                            <div class="col-md-12 domain-order">
                                <label class="control-label col-md-3 text-right" style="margin-top:10px;" for="transfer-mydomain"><p>I want to transfer my domain</p></label>
                                <div class="form-group ">
                                    <div class=" col-md-3 ">
                                        <input type='checkbox'  name='transfer' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <h4 class='text-uppercase'>3. &nbsp;<span class="fa fa-vcard fa-lg"></span>&nbsp;&nbsp;Billing Information</h4>
            </div> 
            <div class='row text-center billing-information'>
                <div class='col-md-6'>
                    <div class='col-md-12'>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class='fa fa-user fa-lg'></i></div>
                                <input type="text" class="form-control input-lg" name='firstname' placeholder="Firstname">
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class='fa fa-user fa-lg'></i></div>
                                <input type="text" class="form-control input-lg" name='lastname' placeholder="Lastname">
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class='fa fa-user fa-lg'></i></div>
                                <input type="text" class="form-control input-lg" name='address1' placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class='fa fa-globe fa-lg'></i></div>
                                <select class="form-control input-lg" id="domaindropdown" name="country">
                                    @foreach($tldPricing['pricing'] as $tld=>$value)
                                    <option>Albania</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class='fa fa-envelope fa-lg'></i></div>
                            <input type="text" class="form-control input-lg" name='email' placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class='fa fa-lock fa-lg'></i></div>
                            <input type="text" class="form-control input-lg" name='password' placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class='fa fa-lock fa-lg'></i></div>
                            <input type="text" class="form-control input-lg" name='password_confirm' placeholder="Repeat Password">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <br>
                    <h3>Payment Method</h3>
                    <hr>
                    <label class="checkbox-inline">
                        <input type="radio" name="paymentMethod" value="paypal" checked> 
                        <img src='https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-150px.png'>
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" name="paymentMethod" value="banktransfer"> <i class="fa fa-bank fa-2x">  Bank Transfer</i>
                    </label>
                </div>
            </div>
            <!--        <div class='row'>
                        <h4 class='text-uppercase'>4. &nbsp;<span class="fa fa-money fa-lg"></span>&nbsp;&nbsp;Payment Method</h4>
                    </div> 
                    <div class='row' class="text-center" id='domain-info'>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active col-md-offset-3 col-md-3 text-center"><a href="#register-new-domain" aria-controls="home" role="tab" data-toggle="tab">Register a domain</a></li>
                            <li role="presentation" class='col-md-3 text-center'><a href="#owned-domain" aria-controls="profile" role="tab" data-toggle="tab">Already own the domain</a></li>
                        </ul>
                        <div class="row ">
                            <div class="tab-content col-md-12 ">
                                <div role="tabpanel" class="tab-pane in fade active" id="register-new-domain">
                                    <form class=" domain-order">
                                        <div class="row text-center">
                                            <label class="control-label col-md-3  text-right" style="margin-top:10px;" for="domainrt"><p>Enter your domain</p></label>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group text-left">
                                                    <input class="form-control input-lg" id="domainrt" name="domain" placeholder="yourdomain" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2   col-xs-10">
                                                <div class="form-group ">
                                                    {{ debug($tldPricing) }}
                                                    <select class="form-control input-lg" id="domaindropdown" name="tld">
                                                        @foreach($tldPricing['pricing'] as $tld=>$value)
                                                        <option value="{{ $tld }}" @if($loop->index == 0) selected @endif>.{{ $tld }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2  col-xs-6">
                                            </div>
                                        </div>
                                    </form>
            
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="owned-domain">asdasdasfasgasg</div>
                            </div>
                        </div>
                    </div>-->
            <div class='row'>
                <h4 class='text-uppercase'>4. &nbsp;<span class="fa fa-list-ul fa-lg"></span>&nbsp;&nbsp;Review your order details</h4>
            </div> 
            <div class='row ' id='review-order' >

                <div class='col-md-12'>
                    <table class="table table-striped" id='servicesprices'>

                        <tr>
                            <td>
                                <h4>Support 24/h<small>&nbsp;&nbsp;&nbsp;&nbsp; FREE</small></h4>
                            </td>
                            <td class='text-center'>
                                <h4>€0</h4>
                            </td>
                        </tr>
                        <tr style='background: #deeeff;'>
                            <td class='text-right'  style='border-top:none; '>
                                <h4>Amount Due</h4>
                            </td>
                            <td class='text-center' id="amountdue" style='border-top:none; '>
                                <h4>€4</h4>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='3' class='text-center'>
                                <p>
                                    <input type='checkbox' name="accepttos" style='border:none;'>
                                    &nbsp;
                                    I have read and agree to the
                                    <a href="#" target="_blank">Terms of Service</a>
                                </p>
                            </td>
                        </tr>
                    </table> 
                </div>
                <div class='col-md-12 text-center'>
                    <div class='col-md-12'>
                        <button type='submit' class='btn btn-lg btn-success'>Place my order & Pay Now</button>
                        <br><br>
                    </div>
                    <div class="alert alert-success col-md-12" role="alert" >
                        <div class='col-md-1'>
                            <span class="fa fa-lock fa-3x"></span>
                        </div>
                        <div class='col-md-11 text-left'>
                            <p>This order form is provided in a secure environment and to help protect against 
                                fraud your current IP address ({{ request()->ip() }}) is being logged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br>
@stop

@section('styles')

<link href="{{ asset('/css/lib/icheck-blue.min.css')}}" rel="stylesheet">
@stop
@section('script')

<script src="{{ asset('/js/lib/icheck.min.js')}}"></script>
<script>
$(document).ready(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
$("#domain_search").click(function () {
    $('#status-domain').append("<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i>");
    $.ajax({
        headers: {
            'X-CSRF-Token': "{{ csrf_token()}}"
        },
        url: "/check-domain",
        context: document.body,
        data: {'domain': $('input[name="domain"]').val(), 'tld': $('select[name="tld"]').val()},
        method: "POST",
        success: function (response) {
            console.log(response.message.current.details);
            if (response.message.current.status != "available") {
                $('#status-domain').empty()
                        .append("<b>" + $('input[name="domain"]').val() + "." + $('select[name="tld"]').val() + "</b> is unavailable")
                        .removeClass('alert-success').addClass('alert-danger');
                $("#status-domain").fadeIn(500);
            } else {
                $('#status-domain').empty()
                        .append("<b>" + $('input[name="domain"]').val() + "." + $('select[name="tld"]').val() + "</b> is available")
                        .removeClass('alert-danger').addClass('alert-success')
                        .append("&nbsp;&nbsp;&nbsp;<p class='btn btn-success'><i class='fa fa-eur'>" + response.message.details.register[1] + " </i>/ Year</p>")
                        .append("<input type='hidden' name='domainprice' value='" + response.message.details.register[1] + "'>");
                $("#status-domain").fadeIn(500);
                calculateDomainPrice();
            }
            $('#similar-domain').fadeOut(500).empty().append("<tr><th>Suggested Domain</th><th>Price</th><th>Status </th><th>Control </th></tr>");
            $.each(response.message.similar, function (index, value) {
                var suggestedDomain = $('input[name="domain"]').val() + "<strong>" + index + "</strong>";
                if (value.status != "available") {
                    var statusClass = "text-danger";
                    var orderLink = "";
                } else {
                    var statusClass = "text-success";
                    var orderLink = "<a href='#' class='btn btn-xs btn-success'><i class='fa fa-shopping-cart fa-lg'></i></a>";
                }
                $('#similar-domain').append("<tr><td>" + suggestedDomain + "</td><td>€" + value.price + "</td><td class='text-capitalize " + statusClass + "' >" + value.status + "</td><td>" + orderLink + "</td></tr>");
            });
            $('#similar-domain').fadeIn(1000);
        }
    });
});










$("#hostingplan").change(function () {
    getBillingCycleForPlan();
});
function getBillingCycleForPlan() {
    $.ajax({
        headers: {
            'X-CSRF-Token': "{{ csrf_token()}}"
        },
        url: "/calculate-price-cycle",
        context: document.body,
        data: {'pid': $('select[name="hostingplan"]').val()},
        method: "POST",
        success: function (response) {
            $('#billingcycle').empty();
            $.each(response.products.product[0].pricing.EUR, function (index, value) {
                if (index == "monthly") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">1 Month - €" + value + "</option>");
                } else if (index == "quarterly") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">3 Month - €" + value + "</option>");
                } else if (index == "semiannually") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">6 Month - €" + value + "</option>");
                } else if (index == "annually") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">12 Month - €" + value + "</option>");
                } else if (index == "biennially") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">24 Month - €" + value + "</option>");
                } else if (index == "triennially") {
                    $('#billingcycle').append("<option value=\"" + index + "\" data-price=\"" + value + "\">32 Month - €" + value + "</option>");
                }
            });
            calculateHostingPlanPrice();
        }
    });
}

function calculateHostingPlanPrice() {
    if ($('#hostingprice').text() == "") {
        $("#servicesprices").prepend("<tr id=\"hostingprice\" class='prices'> </tr>");
    } else {
        $("#hostingprice").html(
                "<td><h4> " + $('#hostingplan option:selected').text() + "<small> &nbsp; &nbsp; &nbsp; &nbsp; (Renews " + $('#billingcycle').val() + ") @ " + $('#billingcycle option:selected').text() + " </small></h4></td><td class='text-center' ><h4> €<price>" + $('#billingcycle option:selected').data('price') + "</price> </h4> </td> "
                );
    }
}
function calculateDomainPrice() {
    if ($('#domainprice').text() == "") {
        console.log("doesnt exist");
        $("#servicesprices").prepend("<tr id=\"domainprice\" class='prices'> </tr>");
        calculateDomainPrice();
    } else {
        console.log('exists');
        $("#domainprice").html(
                "<td><h4> " + $('input[name="domain"]').val() + "." + $('select[name="tld"]').val() + "<small> &nbsp; &nbsp; &nbsp; &nbsp; (Renews Yearly) @ €" + $('input[name="domainprice"]').val() + " </small></h4></td><td class='text-center' ><h4> €<price>" + $('input[name="domainprice"]').val() + "</price> </h4> </td> "
                );
    }
}

$("#billingcycle").change(function () {
    calculateHostingPlanPrice();
});

$(document).on('DOMNodeInserted DOMNodeRemoved DOMSubtreeModified', '.prices', function () {
    var domainPrice = $("input[name='domainprice']").val() != "" && $("input[name='domainprice']").val() != "undefined" ? $("input[name='domainprice']").val() : '0';
    var hostingPrice = ($('#hostingprice td:last-child price').text() != "" ? $('#hostingprice td:last-child price').text() : "0");
    console.log(parseFloat(domainPrice));
    console.log((domainPrice));
    console.log(parseFloat(hostingPrice));
    var totalPrice = parseFloat(domainPrice) + parseFloat(hostingPrice);
    $('#amountdue').empty().html(totalPrice);
});
$(document).ready(function () {
    getBillingCycleForPlan();
    calculateHostingPlanPrice();

});
</script>
@stop