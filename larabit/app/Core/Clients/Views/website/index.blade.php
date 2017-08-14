@extends('clients::layouts.default')

@section('price-table')
<br><br>
<div class='col-xs-4 '>
    <div class='price-table col-xs-12'>
        <div class='row package-title'>
            <h3 class='text-center text-uppercase'>VPS - LITE</h3>
        </div>
        <div class='row' class="text-center">
            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€3.99 </h1>
            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
        </div>
        <div class='row package-features text-center'>
            <ul>
                <li><strong>1&nbsp;</strong>Website</li>
                <li><b>Unlimited </b>Subdomain</li>
                <li><strong>100 GB&nbsp;</strong>Transfer Bandwidth</li>
                <li><strong>5&nbsp;</strong>Databases</li>
                <li><strong>20 GB&nbsp;</strong>Storage</li>
                <li><strong>Yes&nbsp;</strong>Backup Daily</li>
                <li><b>SSL</b></li>
            </ul>
        </div>
        <div class='row'>
            <br>
            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
        </div>
    </div>
</div>
<div class='col-xs-4 '>
    <div class='price-table col-xs-12'>
        <div class='row package-title'>
            <h3 class='text-center text-uppercase'>VPS - LITE</h3>
        </div>
        <div class='row' class="text-center">
            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€3.99 </h1>
            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
        </div>
        <div class='row package-features text-center'>
            <ul>
                <li><strong>1&nbsp;</strong>Website</li>
                <li><b>Unlimited </b>Subdomain</li>
                <li><strong>100 GB&nbsp;</strong>Transfer Bandwidth</li>
                <li><strong>5&nbsp;</strong>Databases</li>
                <li><strong>20 GB&nbsp;</strong>Storage</li>
                <li><strong>Yes&nbsp;</strong>Backup Daily</li>
                <li><b>SSL</b></li>
            </ul>
        </div>
        <div class='row'>
            <br>
            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
        </div>
    </div>
</div>
<div class='col-xs-4 '>
    <div class='price-table col-xs-12'>
        <div class='row package-title'>
            <h3 class='text-center text-uppercase'>VPS - LITE</h3>
        </div>
        <div class='row' class="text-center">
            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€3.99 </h1>
            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
        </div>
        <div class='row package-features text-center'>
            <ul>
                <li><strong>1&nbsp;</strong>Website</li>
                <li><b>Unlimited </b>Subdomain</li>
                <li><strong>100 GB&nbsp;</strong>Transfer Bandwidth</li>
                <li><strong>5&nbsp;</strong>Databases</li>
                <li><strong>20 GB&nbsp;</strong>Storage</li>
                <li><strong>Yes&nbsp;</strong>Backup Daily</li>
                <li><b>SSL</b></li>
            </ul>
        </div>
        <div class='row'>
            <br>
            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
        </div>
    </div>
</div>
@stop

@section('content')
<style>

    /**
    * header description
    */
    
    .article-products{
        box-shadow: 0 5px 20px 0 #c5c5c5;
    }
    .article{
        background:#fff;
        padding:15px;
        /*box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);*/
        margin-bottom:15px;
    }
    .article:hover{
        transition: all .25s linear;
        box-shadow: 0 5px 20px 0 #3d8be0;
        margin-top: -4px;
    }
    .article img{
        padding:15px;
        height: 92px;
        width: 92px; 
    }

    .article i{
        padding:17px;
        color:#3d8be0;
    }

    .article div{
        border-top: 1px solid #e4e4e4;
        padding-top: 13px;
        padding-left: 28px;
    }
    .article div a:hover{
        text-decoration: none;
    }


    .article-feature{
        padding:15px;
        margin-bottom:15px;
    }
    .article-feature a:hover{
        transition: all .25s linear;
        margin-top: -4px;
        cursor: pointer;
        color:#3d8be0;
        text-decoration: none;
    }
    .article-feature a{
        color:#4A5960;
        font-weight:bold;
        font-size:20px;
    }
    .article-feature img{
        padding:15px;
        height: 150px;
        width: 150px; 
    }

    .article-feature i{
        padding:17px;
        color:#3d8be0;
    }
    .article-feature p{
        padding:16px;
        font-size:16px;
        font-weight:400;
    }

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
                    <a href="#">Learn More</a>
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
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-3 col-lg-3">

            <div class="col-xs-12 article">
                <img src="{{ asset('img/chip.svg')}}" alt="VPS Server" />
                <h3>VPS Server</h3>
                <br>
                <p>
                    Each virtual server is hosted on a full SSD platform, thus ensuring the fastest I/O available on the market today.<br>
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
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
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
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
            <div class="col-xs-12 article article-products">
                <i class="fa fa-envelope fa-lg fa-5x"></i>
                <h3>Business Email</h3>
                <br>
                <p>
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <br>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
            <div class="col-xs-12 article article-products">
                <i class="fa fa-at fa-lg fa-5x"></i>
                <h3>Domain Name</h3>
                <br>
                <p>
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
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
                    Cloud Compute Engine provides highly customizable virtual machines with best-of-breed features.
                </p>
                <div class="row text-left text-uppercase" style="border-top: 1px solid #e4e4e4;">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4 ">
            <div class="col-xs-12 article article-products">
                <i class="fa fa-cloud fa-lg fa-5x"></i>
                <h3>Cloud VPS</h3>
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

<div class='container'>
    @yield('price-table')
</div>
@stop