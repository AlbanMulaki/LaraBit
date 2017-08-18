@extends('clients::layouts.default')

@section('content')
<style>



</style>
<div style="background:#fff;">
    <div class="container" >
        <div class="col-md-6 col-lg-6  col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Easy to set up</h1> 
                    <h1 style="color: #3d8be0;margin-top:-10px;">Security built in. Faster</h1>
                    <br>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> Access to the very latest cutting and bleeding edge hardware</h4>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> GPU Processing NVIDIA® Tesla® K80</h4>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> CPU up to 64 Core</h4>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> Memory up to 416 GB</h4>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> You can customize your needs</h4>
                    <h4><i class="fa fa-check" style="color:#3d8be0;"></i> Most Powerful Serverh4h</h4>
                    <br>
                </div>
                <div class="col-xs-5 col-xs-offset-4">
                    <a href="mailto:{{$settings['sales_email']}}" class="btn  btn-default btn-lg " style="padding-right:40px;padding-left:40px; font-size:14px;">Contact Sales</a>
                    <br> <br>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12 hidden-xs  hidden-sm">
            <img style="margin-top:40px;" class="img-responsive" src="https://mulakihost.com/wp-content/uploads/2017/07/ad_logo.png?8057bc">
        </div>
    </div>
</div>
<div class=''>
    <div class='container '>
        <div class="col-xs-12">
            <br>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="col-xs-12 article">
                <img src="{{ asset('img/web.svg')}}" alt="Website & Web Apps" />
                <h3>Website & Web Apps</h3>
                <br>
                <p>
                    Our IasS & PaaS products can deliver your web experience on fast scalable VMs and our global fiber network.
                </p>
                <div class="row text-left text-uppercase" style="    border-top: 1px solid #e4e4e4;">
                    <a href="{{ route('website.solutions-website-web-apps') }}">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-3 col-lg-3">
            <div class="col-xs-12 article">
                <img src="{{ asset('img/mobile.svg')}}" alt="Mobile Application" />
                <h3>Mobile Application</h3>
                <br>
                <p>
                    Build your app for Android, iOS, and the mobile web on services that will reliably scale as your app grows.<br><br>
                </p>
                <div class="row text-left text-uppercase" style="    border-top: 1px solid #e4e4e4;">
                    <a href="{{ route('website.solutions-mobile-application') }}">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-3 col-lg-3">

            <div class="col-xs-12 article">
                <img src="{{ asset('img/chip.svg')}}" alt="VPS Server" />
                <h3>VPS Server</h3>
                <br>
                <p>
                    Each virtual server is hosted on a full SSD platform, thus ensuring the fastest I/O available on the market today.<br><br>
                </p>
                <div class="row text-left text-uppercase" style="    border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-3 col-lg-3">
            <div class="col-xs-12 article">
                <i class="fa fa-cloud fa-lg fa-5x"></i>
                <h3>Cloud VMs Server</h3>
                <br>
                <p>
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='container text-center'>
    <a href="#" class="btn btn-default">More Solutions <i class="fa fa-arrow-circle-right fa-lg"></i></a>
    <br>
    <br>
</div>
<div style="background:#fff;">
    <div class=' container-fluid'>
        <h1 class="col-xs-12 text-center">Why MulakiHost?</h1>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4">
            <div class="col-xs-12 article-feature  text-center">
                <img src="{{ asset('img/code-lines.svg')}}" alt="Serverless, Just Code" />
                <br>
                <a href="#">Serverless, Just Code</a>
                <br>
                <p>
                    Grow from prototype to production to planet-scale, without having to think about capacity, reliability or performance.Serverless means your most precious cycles are devoted to code, with minimal time spent configuring infrastructure.
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4">
            <div class="col-xs-12 article-feature  text-center">
                <img src="{{ asset('img/datacenter.svg')}}" alt="Data Center Innovation" />
                <br>
                <a href="#">Data Center Innovation</a>
                <br>
                <p>
                    MulakiHost’s backbone network has thousands of miles of fiber optic cable. Multiple points of presence across the globe provides strong redundancy.
                    Your data is securely mirrored across storage devices in multiple locations.
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4">
            <div class="col-xs-12 article-feature  text-center">
                <img src="{{ asset('img/high-performance-websites.svg')}}" alt="High Performance" />
                <br>
                <a href="#">High Performance</a>
                <br>
                <p>
                    Using a dedicated hosting service offers the benefits of high performance, security, email stability, and control. Due to the relatively high price of dedicated hosting, it is mostly used by websites that receive a large volume of traffic.
                </p>
            </div>
        </div>
    </div>
    <hr>

    <div class='container '>

        <h1 class="col-xs-12 text-center">Everything you need to build an app</h1>

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
                <i class="fa fa-cloud fa-lg fa-5x"></i>
                <h3>Cloud VMs</h3>
                <br>
                <p>
                    Our virtual servers are available in many configurations, including predefined sizes, and options to create Custom Machine Types optimized for your specific needs.
                    <br> <br>
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class="prefooter">
    <div class='container '>
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <h4 style="color: #ffffff;font-weight:bold; margin-bottom: 15px;">Follow MulakiHost</h4>
            <p><span style="color: #ffffff; font-size: 16px;">Stay updated on MulakiHost by following us on your favorite social networks.</span></p>
            <div class="col-xs-4">
                <a href="#" ><i class="fa fa-google-plus-official"></i></a>
            </div>
            <div class="col-xs-4">
                <a href="#" ><i class="fa fa-twitter"></i></a>
            </div> 
            <div class="col-xs-4">
                <a href="#" ><i class="fa fa-facebook-official"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4  col-xs-12 ">
            <h4 style="color: #ffffff;font-weight:bold; margin-bottom: 15px;">MulakiHost Blog</h4>
            <p><span style="color: #ffffff; font-size: 16px;">Product updates, customer stories, and tips and tricks on MulakiHost.</span></p>

        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <h4 style="color: #ffffff;font-weight:bold; margin-bottom: 15px;">Sign up for the newsletter</h4>
            <p><span style="color: #ffffff; font-size: 16px;">Get the latest MulakiHost news, product updates, promotions, event information and special offers, delivered straight to your inbox.</span></p>

        </div>
    </div>
</div>
@stop