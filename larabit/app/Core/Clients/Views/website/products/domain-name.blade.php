@extends('clients::layouts.default')

@section('content')


<div class=" header-box">
    <div class="container ">
        <header>
            <h2>Domain Names</h2>
            <h4>
                Deliver your website domain @yourcompany.com
            </h4>
        </header>
    </div>
</div>
<div class="container feature-solutions">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>Domain Name Freedom</h2>
            <p>
                You are free to host your website wherever you like and 
                to transfer your internet domains without restrictions whenever you 
                like!(in accordance with Registry rules).
                <br><br>
                Domain Name features: DNS Management, Unlimited Subdomains, Private WHOIS, Total Control of your domain names.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/websites-lead.png") }}" class="img-responsive"/>
        </div>
    </div>

    <div class="row">
        <br>
    </div>
</div>


<div class="container ">
    <div class="row">
        <br>
        <br>
        <br>
    </div>
</div>
<div class="feature-solutions-small" id="price-table">
    <div class="container" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center feature-divicer-icon">
            <i class="fa fa-at fa-3x"></i>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h2>Domain Name Registration</h2>
            <h4>
                Cheap Domain registration prices. Multiple domains
            </h4>
            <br><br>
        </div>
        <div class='col-md-6 col-md-offset-3 col-xs-12'>
            <div class="input-group">
                <input type="text" name="domain" class="form-control">
                <span class="input-group-addon">
                    <select name="tld">
                        @foreach($domainsList as $tld => $data)
                        <option value="{{ $tld }}" @if($loop->index == 0) selected @endif>.{{ $tld }}</option>
                        @endforeach
                    </select>
                </span>
            </div>
            <br>

            <div class="col-xs-12 text-center">
                <a class="btn btn-lg btn-success" id='check-domain'>Check!</a>
                <br><br>
            </div>
            <br>
        </div>
        <div class='col-xs-12 text-center'>
            <div class="alert alert-info h2" role="alert" id='status-domain'>

            </div>
            <br>
        </div>
        <div class='col-xs-12 col-md-8 col-md-offset-2 '>
            <table class=' table table-hover table-condensed   ' id='similar-domain'>
            </table>
            <hr>
        </div>
        <div class="col-xs-12">
            @foreach($tldPricing as $domains)
            <div class='col-xs-{{(count($tldPricing)==3? 4: 3)}} '>
                <div class='price-table col-xs-12'>
                    <div class='row package-features'>
                        <ul>
                            @foreach($domains as $domain => $tld)
                            <li class='col-xs-12'>
                                <div class="col-lg-35 col-md-3 col-sm-3  col-xs-12">
                                    .{{ $domain }}
                                </div>
                                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-12 text-right ' style='color:#3d8be0; font-weight: bold;'>
                                    <span class='label label-warning text-uppercase ' >{{ $tld['group'] }}</span>
                                    €{{ current($tld['register'])}}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-xs-12">
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">

    <div class="col-xs-10 col-xs-offset-2 additional-resources" style="margin:20px 0;">
        <div class="container ">
            <div class="col-xs-12">
                <h2 class="text-uppercase">Additional Resources</h2>
                <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="{{ route("website.business-email") }}">Business Email</a>
                    <br>
                    <small>
                        Give your business a professional look.
                    </small>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="{{ route("website.vps-server")}}">VPS Server</a>
                    <br>
                    <small>
                        Unleashed powerful power. 
                    </small>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="{{ route("website.web-hosting") }}">Web Hosting</a>
                    <br>
                    <small>
                        Fast Web Hosting.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-bottom:40px;">
    </div>
</div>


@stop

@section('script')
<script>
    $("#check-domain").click(function () {
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
                if (response.message.current.status != "available") {
                    $('#status-domain').empty()
                            .append("<b>" + $('input[name="domain"]').val() + "." + $('select[name="tld"]').val() + "</b> is unavailable")
                            .removeClass('alert-success').addClass('alert-danger');
                    $("#status-domain").fadeIn(500);
                } else {
                    $('#status-domain').empty()
                            .append("<b>" + $('input[name="domain"]').val() + "." + $('select[name="tld"]').val() + "</b> is available")
                            .removeClass('alert-danger').addClass('alert-success')
                            .append("&nbsp;&nbsp;&nbsp;<a href='#' class='btn btn-success'><i class='fa fa-shopping-cart fa-lg'></i></a>");
                    $("#status-domain").fadeIn(500);
                }
                $('#similar-domain').fadeOut(500).empty().append("<tr><th>Suggested Domain</th><th>Price</th><th>Status </th><th>Control </th></tr>");
                $.each(response.message.similar, function (index, value) {
                    var suggestedDomain = $('input[name="domain"]').val() + "<strong>"+index+"</strong>";
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
</script>

@stop