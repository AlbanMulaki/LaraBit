@extends('clients::layouts.default')

@section('content')


<div class=" header-box">
    <div class="container ">
        <header>
            <h2>Products & Services</h2>
            <h4>
                Run your application on MulakiHost.
            </h4>
        </header>
    </div>
</div>
<div class="container">
    <br>
    <h1 class="text-center">Everything You Need To Build And Scale</h1>
    <br>
</div>

<div class="container">

    <div class="col-xs-12">
        <br>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-database fa-lg fa-5x"></i>
            <h3>Web Hosting</h3>
            <br>
            <p>
                Mulaki Host gives you a vast array of tools to take your idea or business online today! From site building tools and templates, to our one-click application installer, everything you need to launch a website is literally at your fingertips.
            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="{{ route('website.web-hosting') }}">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-sitemap fa-lg fa-5x"></i>
            <h3>Reseller Hosting</h3>
            <br>
            <p>
                A Mulaki Host Reseller hosting plan gives you complete control over every aspect of your hosting business, from resource allocation to payment methods and what (if any) additional services you choose to provide your clients (domains, SSL certificates, etc.).
            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 " style="    margin-bottom: 10px;">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-envelope fa-lg fa-5x"></i>
            <h3>Business Email</h3>
            <br>
            <p>
                Communication has always been a key in building a successful business.
                Our premium mail hosting services protect your critical business communications and provide you with the peace of mind that your email will always be available for receiving and sending email. 
            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="{{ route('website.business-email') }}">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-at fa-lg fa-5x"></i>
            <h3>Domain Name</h3>
            <br>
            <p>
                If you already have a business or brand, your domain should match your name. If the .com domain is taken, you can try an alternate TLD, but be sure not to put yourself in another company’s shadow or infringe on their trademark.
            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="{{ route('website.domain-names-registraton') }}">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-server fa-lg fa-5x"></i>
            <h3>VPS Server</h3>
            <br>
            <p>
                Unleashed powerful power. Deliver real-time processing for your business. Get great data center efficiency and proven reliability to handle—and scale for—any workload. Keep your data center working without interruption.
            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="{{ route('website.vps-server') }}">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
        <div class="col-xs-12 article article-products">
            <i class="fa fa-cubes fa-lg fa-5x"></i>
            <h3>Dedicated Server</h3>
            <br>
            <p>
                We are continuously improving our infrastructure so you can have the absolute best dedicated server hosting for your ventures.
                European Tier 3+ Data Center
                We make sure your servers are always online by offering FREE DDoS protection.

            </p>
            <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <br>
    <br>
    <br>
</div>
@stop
