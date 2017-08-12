<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" lang="en-US" prefix="og: http://ogp.me/ns#">
    <head itemscope="" itemtype="http://schema.org/WebSite">
        @include('clients::includes.head')
        <style>
            html body{
                font-family: "Roboto",Arial,Helvetica,sans-serif;
                font-size:400 16px/24px Roboto,sans-serif;
            }

            .subheader{
                background:#3d8be0;
            }

            #mainmenu li a:link{
                font-weight: 500;
                background:none;
                padding: 0px;
                letter-spacing: 0;
            }
            #mainmenu li{
                font-size: 14px;
                padding: 14px;
            }
            #mainmenu .active{
                font-weight: bold;
                border-bottom: 2px solid #3d8be0;
            }
            .header-title{
                background: #3d8be0;
                color:#fff;
                padding:20px;
            }
            .header-title h1{
                font-size: 28px;
                font-weight: bold;
            }
            .navbar-default{
                border-radius:0;
                background:#fff;
                box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
            }
            .navbar{
                margin-bottom: 0;
            }

            /* -------------------------------------------------- */
            /* footer */
            /* -------------------------------------------------- */
            footer{
                background: #222;
                color: #ccc;
                padding: 40px 0 40px 0;
            }
            footer h3 {
                font-size: 20px;
                color: #fff;
                margin-bottom: 30px;
                font-family: inherit;
            }
            footer a {
                color: #ccc;
            }
            footer a:visited {
                color: #ccc;
            }
            footer a:hover {
                color: #fff;
            }
            .footer-widget  li{
                list-style: none;
            }
            .footer-widget ul {
                padding: 0;
            }
            /* -------------------------------------------------- */
            /* subfooter */
            /* -------------------------------------------------- */
            .subfooter {
                border-top: solid 1px #333;
                margin: 40px 0 -40px 0;
                background: #222;
                padding: 20px 0 20px 0;
                font-size: 12px;
            }
            .subfooter ul {
                float: right;
                margin: 0;
                padding: 0;
            }
            .subfooter li {
                display: inline;
                padding: 0 15px 0 15px;
                border-left: solid 1px #404040;
            }

            .sign-in{
                list-style: none;
                padding: 8px;
                font-weight: bold;
                text-transform: uppercase;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" style='float:left; margin-left:0;' data-toggle="collapse" data-target="#mainmenu" aria-expanded="true">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>  
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{ route("website.home") }}" style='display:flex;'>
                            <img src="{{ route('images.image-get',[$settings['logo'],'small']) }}" alt="" height='46'>
                        </a>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <ul class="sign-in">
                            <li class="text-right menu-item menu-item-type-post_type menu-item-object-page"><a title="Sign In" href="{{ route("login") }}">Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid menu-header">
                <div class="container">
                    <div class='col-xs-12 '>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mainmenu">
                            <ul class="nav navbar-nav ">
                                <li class="active"><a href="#">Email Business</a></li>
                                <li><a href="#">Web Hosting</a></li>
                                <li><a href="#">Reseller Hosting</a></li>
                                <li><a href="#">Cloud VPS </a></li>
                                <li><a href="{{ route('clients.clientarea') }}">My Services</a></li>
                                <li><a href="{{ route('clients.clientarea-invoices')}}">My Invoices</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
        </nav>

        <header class="header-title">
            <div class="container">

                <h1>Your Services</h1>

            </div>
        </header>

        <div class="container">
            @yield('content')
        </div>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <p>
                                <img src="https://mulakihost.com/wp-content/uploads/2017/05/MulakiHost-logo-white-500-117.png?8057bc" alt=""><br>
                                MulakiHost is specialized in providing dedicated server hosting, server renta, web designing, business email, startup solutions, enterprise solutions, cloud solutions.</p>
                            <p>
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/rsz_paypalsvg.png?8057bc" alt="" style="height:70px; margin-top:10px;">
                            </p>
                            <div style=" border-top: solid 1px #333;">
                                <p>
                                    &nbsp;
                                </p>
                            </div>
                            <p>
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/rsz_visa.png?8057bc" alt="" style="height: 30px; padding-right: 10px;">
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/MasterCard_Logosvg.png?8057bc" alt="" style="height: 30px; padding-right: 10px;">
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/Maestro_logo.png?8057bc" alt="" style="height: 30px; padding-right: 10px;">
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/American-Express-icon.png?8057bc" alt="" style="height: 30px; padding-right: 10px;">
                                <img src="https://mulakihost.com/wp-content/uploads/2017/06/rsz_discover.png?8057bc" alt="" style="height: 30px; padding-right: 10px;">
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>Products</h3>
                            <ul>
                                <li>
                                    <a href="https://mulakihost.com/web-hosting/"> Web Hosting </a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/reseller-hosting/"> Reseller Hosting </a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/vps-compute/"> VPS Compute</a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/email-hosting/"> Email Business</a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/promotional-server-vps//"> Promotional Servers VPS</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>Solutions</h3>
                            <ul>
                                <li>
                                    <a href="https://mulakihost.com/web-hosting/"> Web Hosting </a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/reseller-hosting/"> Reseller Hosting </a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/vps-compute/"> VPS Compute</a>
                                </li>
                                <li>
                                    <a href="https://mulakihost.com/web-hosting/"> Web Hosting </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>About MulakiHost</h3>
                            <ul>
                                <li>
                                    <a href="https://mulakihost.com/why-mulakihost/"> Why MulakiHost </a>
                                </li>
                                <li>
                                    <a href="http://www.webhosting-top.com/" target="_blank">Top Webhosting</a>
                                </li>
                            </ul>
                            <p><strong>Email:</strong><br>
                                <a href="mailto:support@mulakihost.com"><i class="fa fa-envelope"></i> support@mulakihost.com</a><br>
                                <a href="mailto:sales@mulakihost.com"><i class="fa fa-envelope"></i> sales@mulakihost.com</a><br>
                                Business No. 810027252</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="col-sm-6">
                    Copyright © 2017 MulakiHost.com LLC. All Rights Reserved.
                </div>   
                <div class="col-sm-6">
                    <ul>
                        <li><a href="/privacy-policy/">PRIVACY POLICY</a></li>
                    </ul>
                </div> 
            </div>
        </div>

    </footer>
</div>

<script type='text/javascript' src="https://mulakihost.com/wp-includes/js/jquery/jquery.js?8057bc"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
