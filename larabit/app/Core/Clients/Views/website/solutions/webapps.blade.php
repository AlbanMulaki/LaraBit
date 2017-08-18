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


<div class=" header-box">
    <div class="container ">
        <header>
            <h2>Website & Web Apps Solutions</h2>
            <h4>
                Deliver your web experience on MulakiHost fast, scalable Hosting
            </h4>
        </header>
    </div>
</div>
<div class="container feature-solutions">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>Fast, Cheap, and Scalable</h2>
            <p>
                Whether you need to build a multi-tiered web application from scratch or host a static website, 
                MulakiHost provides services and infrastructure that enable you to develop and deploy scalable, 
                globally-available applications and websites. 
                Focus on your application and your users and let MulakiHost take care of the infrastructure for you.
                When the time comes that your website traffic and data needs exceed your current plan – 
                we make it easy to upgrade your plan! We offer premiuM customer support that is 24/7 
                to guide you through your options, and provide recommendations on scaling up strategically 
                and for what makes the most sense for your business.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/websites-lead.png") }}" class="img-responsive"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/popular-languages.png") }}" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Popular Languages & Developer Tools</h3>
            <p>
                Write applications in the most popular and widely deployed programming languages: Python, Perl, Java, PHP. 
                Leverage existing frameworks such as Django, Flask, Spring, Laravel, Codeigniter, Lumen, webapp2 and much more. 
                Dependency management in as Composer, NodeJS.Version Control as Git.
                Pair your applications with custom architectures on Hosting Or VPS Server to integrate any tech stack you can image: Node.js, MongoDB, MySQL, Redis, Memcached, Disk Caching SSD.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Fast & Efficient Networking</h3>
            <p>
                Speed is a feature, and latency makes or breaks your web application’s user experience.
                Our CDN global solution cover almost all of the world so you will find a suitable one whenever your target audience is.
                Global content delivery network that we offer allows to deliver your content even to the geographically most distant markets.
                Our Network is Based on More Than 200 Worldwide Nodes, meaning your app data reaches users with the lowest latency possible. 
                MulakiHost global network ensures your app data traverses our private network from our 
                data centers to your users, anywhere in the world.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/map.png") }}" class="img-responsive"/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/fast-performance.svg") }}" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Reliable Servers & Pure SSD</h3>
            <p>
                Depend on Mulaki Host! Your account is backed by our 99.9% Uptime Commitment.
                Our hosting doesn’t rely on one physical server, making your website more robust and scalable.
                Hosting server are powered with the latest bleeding edge hardware
                Intel® Xeon® Processor E7 v4 Family 3.30 GHz
                Grow from prototype to production to planet-scale, without having to think about capacity, reliability or performance.
                We setup your server, keep its software up-to-date, monitor your machine 24/7 and react immediately in case of an issue.
                All our servers are using Solid-State drives (SSD) as a foundation for their performance. 
                SSD massively outperforms traditional spinning hard-disk drives and provides up to 20 times faster load time for your website.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Dedication & Support</h3>
            <p>
                All our web hosting accounts are covered under our fully managed support contract. 
                We take pride in our work and show the same dedication and care you would expect from your own employees. 
                We never sleep and are dedicated to keeping your business running with personalised support available 
                24 hours a day, 7 days a week, 365 days a year.
                Apart from advanced monitoring of your website, we are also available for expert administrative.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
            <i class="fa fa-support" style="font-size:150px; color:#3d8be0;"></i>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/reliability-security.png") }}" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Daily Data Backups & Security</h3>
            <p>
                All our web hosting account backups are processed on a daily basis. 
                We retain multiple recovery points and offer restoration from most recent to historical backups. 
                This service will allow you unlimited restores at any time during the service period (contingent on availability of the backup).
                All data are encrypted for each account using more then one encryption mechanisms.
                The same encryption and key management policies, cryptographic libraries, and root of trust used for your data in MulakiHost are used by many of Mulaki Host production services, including Web Hosting, Server, Storage, Mulaki Host own corporate data.
            </p>
        </div>
    </div>

    <div class="row">
        <br>
    </div>
</div>
<div class="feature-solutions-small">
    <div class="container" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center feature-divicer-icon">
            <i class="fa fa-cubes fa-3x"></i>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Hosting Features</h2>
            <p>
                Hosting Packages are fully-managed by our experts.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-solutions-small-single">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 ">One-Click Applications</h4>
                    <p>
                        Add super functionality to your website quickly with our one-click apps. 
                        Install blogging platforms, forums, photo galleries, wordpress, phpbb, and content management systems easily.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Free SSL</h4>
                    <p>
                        Keeping your site and visitors secure for free with Let’s Encrypt SSL Certificates.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Free SSH</h4>
                    <p>
                        No need to enable SSH access. SSH is available immediately for free.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Instant Provisioning</h4>
                    <p>
                        Get up and running in seconds. Where most of solutions take hours or days to activate,
                        we designed infrastructure and application to provision hosting services immediately.
                    </p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Application Hosting</h4>
                    <p>
                        Install any framework or application starting from famous wordpress, joomla, magento, wiki and much more.
                    </p>
                </div>
            </div>
        </div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-solutions-small-single">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 ">Security</h4>
                    <p>
                        We take security very seriously, 
                        not only are our servers pre-configured with a software based firewall but
                        we also configure a number of additional measures including intrusion detection & prevention,
                        automatic IP blocking, anti-malware and application firewall.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Consultations</h4>
                    <p>
                        Our experts are ready to advise you on any subject – from the preparation of IT-infrastructure to the architecture of your project.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Enterprise Quality</h4>
                    <p>
                        Our data centers utilize on-site security, redundant switches, routers, power systems, and many additional features.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>cPanel</h4>
                    <p>
                        In the competitive web hosting industry, cPanel & WHM offers hosting providers the tools that they need to succeed.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Fully Managed</h4>
                    <p>
                        A fully managed environment lets you focus on code while MulakiHost manages infrastructure concerns
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="col-xs-12  text-center" style="margin:20px 0;">
        <h2>Web Hosting Pricing</h2>
        <p>Web Hosting has competitive pricing.</p>
    </div>
    <div class="col-xs-12 text-center" style="margin:20px 0;">
        <a href="#price-table" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-right"></i> &nbsp;View Price Hosting </a>
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
            <i class="fa fa-shopping-basket fa-3x"></i>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h2>Linux Web Hosting Packages</h2>
            <h4>
                Choose one of our fine-tuned Linux Web Hosting solutions!
            </h4>
            <br><br>
        </div>
        <div class="col-xs-12">
            <div class='col-xs-4 '>
                <div class='price-table col-xs-12'>
                    <div class='row package-title'>
                        <h3 class='text-center text-uppercase'>Lite</h3>
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
                        <h3 class='text-center text-uppercase'>Advanced</h3>
                    </div>
                    <div class='row' class="text-center">
                        <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€5.59 </h1>
                        <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                    </div>
                    <div class='row package-features text-center'>
                        <ul>
                            <li><strong>5&nbsp;</strong>Website</li>
                            <li><b>Unlimited </b>Subdomain</li>
                            <li><strong>Unlimited&nbsp;</strong>Transfer Bandwidth</li>
                            <li><strong>Unlimited&nbsp;</strong>Databases</li>
                            <li><strong>100 GB&nbsp;</strong>Storage</li>
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
                        <h3 class='text-center text-uppercase'>Professional</h3>
                    </div>
                    <div class='row' class="text-center">
                        <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€8.99 </h1>
                        <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                    </div>
                    <div class='row package-features text-center'>
                        <ul>
                            <li><strong>Unlimited&nbsp;</strong>Website</li>
                            <li><b>Unlimited </b>Subdomain</li>
                            <li><strong>Unlimited&nbsp;</strong>Transfer Bandwidth</li>
                            <li><strong>Unlimited&nbsp;</strong>Databases</li>
                            <li><strong>200 GB&nbsp;</strong>Storage</li>
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
        </div>
        <div class="col-xs-12 text-center">
            <br><br>
            <a class="btn btn-lg btn-dark">Compare All Packages</a>
            <br><br>
            <br><br>
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
                    <a href="#">Reseller Hosting</a>
                    <br>
                    <small>
                        Run your business any way you want!
                    </small>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="#">VPS Server</a>
                    <br>
                    <small>
                        Unleashed powerful power. 
                    </small>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="#">Cloud VPS</a>
                    <br>
                    <small>
                        Machine optimized for your specific needs.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-bottom:40px;">
    </div>
</div>


@stop