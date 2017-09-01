@extends('clients::layouts.default')

@section('content')


<style>
    .main-feature img{
        height:110px;
        width: inherit;
    }
    .main-feature{
        min-height:440px;
    }
    .main-feature div:last-child{
        bottom: 10px;
        width:100%;
        position: absolute;
    }
</style>
<div class="container ">
    <div class="col-xs-12">
        <br>
        <h1 class="text-center">MulakiHost Platforms Benefits</h1>
        <br>
        <p>
            MulakiHost is a web hosting provider that specializes in dedicated server hosting, cloud server and its related products and services.

            The Company is specialized in providing dedicated server hosting, server renta, web designing, business email, startup solutions, enterprise solutions, cloud solutions.
            <br><br>
            MulakiHost has one of the largest and most advanced software-defined computer networks.MulakiHost’s backbone network has thousands of miles of fiber optic cable, uses advanced software-defined networking and has edge caching services to deliver fast, consistent and scalable performance.
            Virtual machines never go down for scheduled maintenance with new, built-in live-migration technology. Get the peace of mind of knowing hosts are patched and data centers are maintained without the headaches of downtime.
        </p>
    </div>
    <div class="col-xs-12">
        <br>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
            <div class="col-xs-12 main-feature article article-products">
                <div class="text-center" style="border-top: none; padding:0;">
                    <img src="{{ asset('img/innovation.svg')}}" alt="Data Center Innovation" title="Data Center Innovation"/>
                </div>
                <h3 class="text-center">Data Center Innovation</h3>
                <br>
                <p style="font-size:13px;">
                    MulakiHost has one of the largest and most advanced software-defined computer networks.
                    MulakiHost’s backbone network has thousands of miles of fiber optic cable, uses advanced 
                    software-defined networking and has edge caching services to deliver fast, consistent and 
                    scalable performance. 
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
            <div class="col-xs-12 main-feature article article-products">
                <div class="text-center" style="border-top: none; padding:0;">
                    <img src="{{ asset('img/futureproof.svg')}}" alt="Future-Proof Infrastructure" title="Future-Proof Infrastructure" />
                </div>
                <h3 class="text-center">Future-Proof Infrastructure</h3>
                <br>
                <p style="font-size:13px;">
                    Secure, high-performance, global, cost-effective and constantly improving.
                    We’ve built our cloud for the long haul.Our built-in load balancer is part of a worldwide distributed system
                    for delivering customers to infrastructure
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 " style="    margin-bottom: 10px;">
            <div class="col-xs-12 main-feature article article-products">
                <div class="text-center" style="border-top: none; padding:0;">
                    <img src="{{ asset('img/security.svg')}}" alt="Security at Scale" title="Security at Scale" />
                </div>
                <h3 class="text-center">Security at Scale</h3>
                <br>
                <p style="font-size:13px;">
                    MulakiHost data centers feature a layered security model, including safeguards like custom-designed electronic
                    access cards, alarms, vehicle access barriers, perimeter fencing, metal detectors, and biometrics. 
                    The data center floor features laser beam intrusion detection. 
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 " style="    margin-bottom: 10px;">
            <div class="col-xs-12 main-feature article article-products">
                <div class="text-center" style="border-top: none; padding:0;">
                    <img src="{{ asset('img/just-code.png')}}" alt="Serverless, Just Code" title="Serverless, Just Code" />
                </div>
                <h3 class="text-center">Serverless, Just Code</h3>
                <br>
                <p style="font-size:13px;">
                    Grow from prototype to production to planet-scale, without having to think about capacity, reliability or performance.
                    No upfront provisioning - Just provide your code and data, and MulakiHost dynamically provisions resources as needed.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 " style="    margin-bottom: 10px;">
            <div class="col-xs-12 main-feature article article-products">
                <div class="text-center" style="border-top: none; padding:0;">
                    <img src="{{ asset('img/startups.png')}}" alt="Startups" title="Startups" />
                </div>
                <h3 class="text-center">Startups</h3>
                <br>
                <p style="font-size:13px;">
                    During the launch of a new project, you always have to solve a great number of diverse tasks. Concentrate on your project, change the world for the better, and we will provide you with the necessary IT-infrastructure.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background:#fff;">
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
                    <a href="#">Learn More</a>
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
                    <a href="#">Learn More</a>
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
                    <a href="#">Learn More</a>
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
                    <a href="#">Learn More</a>
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
    <div class='container text-center'>
        <br>
        <a href="#" class="btn btn-primary btn-lg">More Products <i class="fa fa-arrow-circle-right fa-lg"></i></a>
        <br>
        <br>
    </div>
</div>

@stop