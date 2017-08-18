@extends('clients::layouts.default')

@section('price-table')
<br><br>
<div class='col-xs-4 '>
    <div class='price-table col-xs-12'>
        <div class='row package-title'>
            <h3 class='text-center text-uppercase'>Cloud VMs - TOP</h3>
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
            <h2>{{ $title }}</h2>
            <h4>
                @lang('clients::website.create_mobile_apps')
            </h4>
        </header>
    </div>
</div>
<div class="container feature-solutions">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>Mobile Backend</h2>
            <p>
                Today’s best apps blend client and cloud into a single platform, 
                creating highly responsive experiences for users backed by powerful computing resources remotely. 
                Cloud helps you strike this balance easily for your mobile backend, 
                where non-interactive tasks get offloaded to Cloud, 
                resulting in improved battery life on mobile, 
                lower bandwidth usage, and a snappy client experience on mobile.
                <br><br>
                With Cloud VMs Server , 
                focus only on differentiating, 
                high-level business logic using your favorite language.
                For developers with existing or legacy projects who want the full control of bare VMs,                
                Cloud VMs Server offers high performance VMs with industry-leading pricing and customizability.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/mobile-era.png") }}" class="img-responsive"/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/map.png") }}" class="img-responsive"/>
        </div>
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
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Industry Leading Price and Performance</h3>
            <p>
                With no minimum fees and a pay-per-use model, 
                MulakiHost's Storage leads the industry in cost-effective cloud storage pricing. 
                Store your data on MulakiHost's infrastructure with price and availability characteristics
                tailored to all the different scenarios encountered by developers and enterprises.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/low-cost.svg") }}" class="img-responsive"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/fast-performance.svg") }}" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>High Performance & Pure SSD</h3>
            <p>
                Cloud VMs Servers boot quickly and are consistently high performance. 
                Cloud VMs Server also offers industry-leading local SSD performance. 
                Compare throughput on equivalent IaaS offerings and see the difference 
                our virtual servers can make for your workloads. 
                We have powerful CPU Platform our data centers are powered by intel cpu's.
            <ul class='small'>
                <div class='col-md-6'>
                    <li>2.6 GHz Intel® Xeon® E5 (Sandy Bridge)</li>
                    <li>2.5 GHz Intel® Xeon® E5 v2 (Ivy Bridge)</li>
                    <li>3.3 GHz Intel® Xeon® E7 v4 (Broadwell)</li>
                </div>
                <div class='col-md-6'>
                    <li>2.3 GHz Intel® Xeon®  E5 v3 (Haswell)</li>
                    <li>2.2 GHz Intel® Xeon®  E5 v4 (Broadwell)</li>
                    <li>2.0 GHz Intel® Xeon® (Skylake)</li>
                </div>
            </ul>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Security for Business-Critical Assets</h3>
            <p>
                From the smallest workgroup to the largest enterprise, 
                your business can rely on MulakiHost security to protect
                your most critical documents, media, and unique assets. 
                Your data travels through our private network,
                delivering unmatched business continuity for your enterprise.
                All data are encrypted for each account using more then one encryption mechanisms.
                The same encryption and key management policies, cryptographic libraries, and root of trust used for your data in MulakiHost are used by many of Mulaki Host production services, including Web Hosting, Server, Storage, Mulaki Host own corporate data.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
            <img src='{{ asset("img/google-grade-security.png") }}' class='img-responsive' />
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/environmentally-friendly.svg") }}" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Environmentally Friendly Global Network</h3>
            <p>
                Our global network of data centers consume 50% less energy than the typical datacenter, 
                100% renewable energy to match consumption for our global operations. 
                We are growing our global datacenter footprint so your applications can run 
                closer to your customers and distribute geographically for resiliency.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Free Migration Service</h3>
            <p>
                Our support often see us as their in-house IT team, or an extension of it. 
                Our mentality is to ensure long-term customer satisfaction, and we therefore want your server 
                to run as quickly and reliably as possible. Where we really add value over our competitors are
                the extras we include free.. These include 24/7 monitoring, management and full offsite backups,
                the migration to us from another provider, and the optimisation of your environment once it is on our platform.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/data-transfer-lead.svg") }}" class="img-responsive"/>
        </div>
    </div>

    <div class="row">
        <br>
    </div>
</div>
<div class="feature-solutions-small">
    <div class="container" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center feature-divicer-icon">
            <i class="fa fa-microchip fa-3x"></i>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Cloud VMs Server Features</h2>
            <p>
                Cloud VMs Server Scalable, High-Performance.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-solutions-small-single">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Enterprise class SSD</h4>
                    <p>
                        We are using SSD (Solid State Drives) as a performance foundation in our infrastructure. 
                        SSD massively outperforms traditional spinning hard drives and are up to 680,000 IOPS. 
                        Converting it to MB/s - Read Speed <strong>2.6 GB/s</strong> Write Speed  <strong>1.4 GB/s</strong>
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Persistent Disks</h4>
                    <p>
                        Network storage, up to 64 TB in size, can be attached to VMs as persistent disks. 
                        You can create persistent disks in HDD or SSD formats. 
                        You can also take snapshots of your persistent disk and create new persistent disks from that snapshot.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Custom Machine Type</h4>
                    <p>
                        Create virtual machines with the shape (i.e. vCPU and memory) that is right for your workloads.
                        By tailoring a Custom Machine Type to your specific needs you can realize significant savings.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Predefined machine type high resources</h4>
                    <p>
                        Compute Engine offers predefined virtual machine configurations 
                        for every need from micro to instances with 64 vCPUs or 416GB of memory,
                        in standard, high memory, and high CPU configurations.
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
                    <h4>Linux & Windows Support</h4>
                    <p>
                        Run your choice of OS, including Debian, CentOS, CoreOS, SUSE, Ubuntu, Red Hat, FreeBSD,
                        or Windows Server 2008 R2, 2012 R2, and 2016. 
                        You can also bring your own os or images.
                    </p>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Disk Encryption</h4>
                    <p>
                        All data written to persistent disk in Cloud VMs Server is encrypted on the fly and then transmitted and stored in encrypted form. 
                        MulakiHost Cloud VMs Server has completed ISO 27001, SSAE-16, SOC 1, SOC 2, and SOC 3 certifications, 

                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Docker Image Support</h4>
                    <p>
                        Cloud Vms Server supports the common Docker container format.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Full Root</h4>
                    <p>
                        Full root access gives you more control over your environment, 
                        allowing for custom script or application installs.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>cPanel</h4>
                    <p>
                        In the competitive web hosting industry, cPanel & WHM offers hosting providers the tools that they need to succeed.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Favorable Condition Startup</h4>
                    <p>
                        You have an ambitious project but the funding, as always, is not enough? 
                        We are ready to offer super-favorable cooperation conditions: 
                        special discounts, deferred payment or even free services.
                        We help inovative project.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="col-xs-12  text-center" style="margin:20px 0;">
        <h2>Cloud VMs Server Pricing</h2>
        <p>Cloud VMs Server has competitive pricing.</p>
    </div>
    <div class="col-xs-12 text-center" style="margin:20px 0;">
        <a href="#price-table" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-right"></i> &nbsp;View Price  </a>
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
            <h2>Cloud VMs Server Packages</h2>
            <h4>
                Choose one of our fine-tuned Cloud VMs Server solutions!
            </h4>
            <br><br>
        </div>
        <div class="col-xs-12">
            <div class='row'>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Entry</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€7.59 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>1&nbsp;</strong>Core</li>
                                <li><strong>20 GB&nbsp;</strong>Storage</li>
                                <li><strong>0.6 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Entry+</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€19.90 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>1&nbsp;</strong>Core</li>
                                <li><strong>20 GB&nbsp;</strong>Storage</li>
                                <li><strong>1.7 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Entry Gold</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€19.90 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>1&nbsp;</strong>CPU</li>
                                <li><strong>20 GB&nbsp;</strong>Storage</li>
                                <li><strong>3.75 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Top</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€64.71 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>2&nbsp;</strong>CPU</li>
                                <li><strong>60 GB&nbsp;</strong>Storage</li>
                                <li><strong>7.5 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <br><br>
            </div>
            <div class="row">
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Top+</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€96.24 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>2&nbsp;</strong>CPU</li>
                                <li><strong>80 GB SSD&nbsp;</strong>Storage</li>
                                <li><strong>13 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Medium</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€128.46 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>4&nbsp;</strong>CPU</li>
                                <li><strong>100 GB&nbsp;</strong>Storage</li>
                                <li><strong>15 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Medium+</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€178.32 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>4&nbsp;</strong>CPU</li>
                                <li><strong>100 GB SSD&nbsp;</strong>Storage</li>
                                <li><strong>26 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
                    <div class='price-table col-xs-12'>
                        <div class='row package-title'>
                            <h3 class='text-center text-uppercase'>Compute</h3>
                        </div>
                        <div class='row' class="text-center">
                            <h1 class='text-center text-uppercase' style='color:#3d8be0; font-weight:bold;'>€261.72 </h1>
                            <div class="text-center "><p style='font-weight:bold;'>/month</p></div>
                        </div>
                        <div class='row package-features text-center'>
                            <ul>
                                <li><strong>8&nbsp;</strong>CPU</li>
                                <li><strong>300 GB SSD&nbsp;</strong>Storage</li>
                                <li><strong>30 GB&nbsp;</strong>RAM</li>
                                <li><strong>Unlimited&nbsp;</strong>Bandwidth</li>
                            </ul>
                        </div>
                        <div class='row'>
                            <br>
                            <a href='#' class="btn btn-primary btn-lg order-button btn-block">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 text-center">
            <br><br>
            <h2>Customize it and fit your needs.</h2>
            <a class="btn btn-lg btn-warning">Customize Cloud VM<small>s</small> &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
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
                    <a href="#">Cloud VMs</a>
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
        </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-bottom:40px;">
    </div>
</div>


@stop