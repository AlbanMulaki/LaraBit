@extends('clients::layouts.default')

@section('content')


<div class=" header-box">
    <div class="container ">
        <header>
            <h2>Cloud VMs</h2>
            <h4>
                Scalable, High Performance Cloud Virtual Machine. 
            </h4>
        </header>
    </div>
</div>
<div class="container feature-solutions">

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>High Performance</h2>
            <p>
                MulakiHost delivers virtual machines running in innovative data centers and worldwide fiber network. 

                Cloud VMs boot quickly, deliver consistent performance. 
                We provide a scalable range of computing options you can tailor to match your needs. 
                Cloud VMs provides highly customizable virtual machines with best-of-breed features.
                Cloud VMs is a flexible platform-as-a-service that lets you focus on
                your code, freeing you from the operational details of deployment and infrastructure management.<br><br>
                Cloud VMs tooling and workflow support enable scaling from single instances to global, load-balanced cloud computing. 
                Our Cloud VMs are available in many configurations, including predefined sizes, and options to create 
                Custom Machine Types optimized for your specific needs.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/lead.png") }}" class="img-responsive" alt="High Performance Workload" title="High Performance Workload"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/low-cost.svg") }}" class="img-responsive" alt="Industry Leading Price and Performance" title="Industry Leading Price and Performance"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Industry Leading Price and Performance</h3>
            <p>
                With no minimum fees and a pay-per-use model, 
                MulakiHost's Storage leads the industry in cost-effective cloud storage pricing. 
                Store your data on MulakiHost's infrastructure with price and availability characteristics tailored 
                to all the different scenarios encountered by developers and enterprises.

            </p>
        </div>
    </div>
    <div class="row">
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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/fast-performance.svg") }}" class="img-responsive" alt="Industry Leading Price,  High Performance & Pure SSD" title="Industry Leading Price,  High Performance & Pure SSD"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/environmentally-friendly.svg") }}" class="img-responsive" alt="Environmentally Friendly Global Network" title="Environmentally Friendly Global Network"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Environmentally Friendly Global Network</h3>
            <p>
                Our infrastructure is entirely carbon-neutral. 
                Our global network of data centers consume 50% less energy than the typical datacenter and in 2017, 
                we will purchase 100% renewable energy to match consumption for our global operations. 
                We are growing our global datacenter footprint so your applications can run closer to your 
                customers and distribute geographically for resiliency.

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
            <p>Cloud VMs Server High Performance has competitive pricing.</p>
            <h3> Starting from €13.95</h3>
        </div>
        <div class="col-xs-12 text-center">


            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#standard-vm" aria-controls="standard-vm" role="tab" data-toggle="tab">Standard</a></li>
                <li role="presentation"><a href="#high-cpu" aria-controls="home" role="tab" data-toggle="tab">High CPU</a></li>
                <li role="presentation"><a href="#high-memory" aria-controls="high-memory" role="tab" data-toggle="tab">High Memory</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="standard-vm">


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
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="high-cpu">...</div>
                <div role="tabpanel" class="tab-pane" id="high-memory">...</div>
            </div>


            <form action=""  class="form-horizontal">
                <div class="form-group">
                    <h2 for="exampleInputEmail1">CPU</h2>
                    <hr>
                    <input class="form-control" style="width: 80%;" type="text" id='cpu-core' data-price="0"/>
                </div>
                <div class="form-group">
                    <h2 for="exampleInputEmail1">Memory</h2>
                    <hr>
                    <input class="form-control" style="width: 80%;" type="text" id='memory-ram' data-price="0"/>
                </div>
                <div class="form-group">
                    <h2 for="exampleInputEmail1">Disk Space</h2>
                    <hr>
                    <input class="form-control" style="width: 80%;" type="text" id='disk-space' data-price="0"/>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <h3>Operating System</h3>
                        <select name="operating-system" class="form-control input-lg">
                            <optgroup label="CentOS">
                                <option value="centos7" selected="">CentOS 7</option>
                                <option value="centos6">CentOS 6</option>
                            </optgroup>
                            <optgroup label="Ubuntu">
                                <option value="ubuntu16rdp">Ubuntu 16 RDP</option>
                                <option value="ubuntu16">Ubuntu 16</option>F
                                <option value="ubuntu14">Ubuntu 14</option>
                            </optgroup>
                            <optgroup label="Others">
                                <option value="fedora25">Fedora 25</option>
                                <option value="debian8">Debian 8</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-3  col-md-offset-1">
                    <div class="form-group">
                        <h3>Control Panel</h3>
                        <select name="control-panel" class="form-control input-lg">
                            <option value="ssh" selected="">SSH / ROOT</option>
                            <option value="cwb">CWB [CentOS Only] [+5 EURO]</option>
                            <option value="cpanel">cPanel & WHM [+22 EURO]</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3  col-md-offset-1">
                    <div class="form-group">
                        <h3>Bandwidth</h3>
                        <select name="bandwidth" class="form-control input-lg" >
                            <option value="3000" selected="">3 TB FREE</option>
                            <option value="9000" >9 TB €10</option>
                            <option value="15000" >15 TB €20</option>
                            <option value="30000" >30 TB €37</option>
                            <option value="60000" >60 TB €60</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="col-md-9  col-md-offset-1">
            <div class="form-group"><br>
                <label>Billing Cycle</label>
                <select name="billing-cycle" class="form-control input-lg">
                    <option value="monthly" selected="">Monthly</option>
                    <option value="semi-annually">Semi-Annually</option>
                    <option value="annually">Annually</option>
                </select>
            </div>
        </div>
        <input type='hidden' value='1' name='memory-ram' />
        <input type='hidden' value='1' name='cpu-core' />
        <input type='hidden' value='3000' name='bandwidth-price' />
        <input type='hidden' value='1' name='disk-space' />
        <div class="col-md-12 text-center">
            <div class="form-group">
                <h2>Total Price: <span class="label label-primary">€<span id="price-total">13.95</span></span></h2>
            </div>
            <div class="form-group">
                <br><br>
                <button type="submit" class="btn btn-lg btn-warning">Checkout Pay Now <i class='fa fa-arrow-circle-right'></i></button>
            </div>
        </div>
        </form>
        <br><br>
        <br><br>
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
                    <a href="#">Cloud VMs Server</a>
                    <br>
                    <small>
                        Cloud VMs Server Scalable, High-Performance.
                    </small>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="{{ route('website.vps-server-windows-kvm')}}">Windows VPS SSD Server</a>
                    <br>
                    <small>
                        Provide VPS Windows. 
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-bottom:40px;">
        <br><br>

    </div>
</div>

@stop

@section('script')
<style>
    .btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default{
        background:#3d8be0;
        color:#fff;
    }
    .btn-default.active,.btn-default:focus, .btn-default:active, .open>.dropdown-toggle.btn-default,.btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default{
        background:#3d8be0;
        color:#fff;

    }
    .radiobox{
        margin-right:14px;
        margin-top:14px;
    }
    .bandwidth{
        padding: 20px;
        font-size: 20px;
    }
</style>
<style>
    .slider-track-high{
        background:#b7c5cc;
    }
    .slider-selection.tick-slider-selection{
        background:#3d8be0;

    }
    .slider-tick.in-selection{
        background:#85b7ef;

    }

    .slider-tick{
        background:#fff;
    }
    .slider .tooltip.top{

        transition: all 0.5s ease-in;
    }
    .tooltip-inner{
        background: #3d8be0;
    }
    .tooltip.top .tooltip-arrow{
        border-top-color:#3d8be0
    }
    .slider.slider-horizontal .slider-selection, .slider.slider-horizontal .slider-track-low, .slider.slider-horizontal .slider-track-high{
        transition: all 0.5s ease-in;
    }
</style>
<script>
    var billingCycleMonth = {
        "monthly": 1,
        "semi-annually": 6,
        "annually": 12
    };
    var bandWidthPrices = {
        3000: "Default",
        9000: 10,
        15000: 20,
        30000: 37,
        60000: 60,
    };
    var controlPanelPrices = {
        ssh: 0,
        cwb: 5,
        cpanel: 22
    };
    var corePrices = {
        1: "Default",
        2: 6,
        3: 12,
        4: 18,
        5: 25
    };
    var ramPrices = {
        1: "Default",
        2: 3.5,
        3: 7,
        4: 14,
        5: 28.00
    };
    var diskSpacePrices = {
        1: "Default",
        2: 6,
        3: 12,
        4: 18,
        5: 25
    };
    $('#cpu-core').slider({
        formatter: function (value) {
            $('#cpu-core').data('price', corePrices[value]);
            calculatePrice();
            if (value == 1) {
                return "Default";
            }
            return "+ €" + corePrices[value];
        },
        ticks: [1, 2, 3, 4, 5],
        ticks_labels: ['2 Core', '3 Core', '4 Core', '5 Core', '6 Core'],
        tooltip: 'always',
        value: 1,
    });
    $('#cpu-core').on("slide", function (sliderValue) {
        $('input[name="cpu-core"]').val(sliderValue.value);
    });



    $('#disk-space').slider({
        formatter: function (value) {
            $('#disk-space').data('price', diskSpacePrices[value]);
            calculatePrice();
            if (value == 1) {
                return "Default";
            }
            return "+ €" + diskSpacePrices[value];
        },
        ticks: [1, 2, 3, 4, 5],
        ticks_labels: ['30 GB', '50 GB', '70 GB', '110 GB', '190 GB'],
        tooltip: 'always',
        value: 1,
    });
    $('#disk-space').on("slide", function (sliderValue) {
        $('input[name="disk-space"]').val(sliderValue.value);
    });



    $('#memory-ram').slider({
        formatter: function (value) {
            $('#memory-ram').data('price', ramPrices[value]);
            calculatePrice();
            if (value == 1) {
                return "Default";
            }
            return "+ €" + ramPrices[value];
        },
        ticks: [1, 2, 3, 4, 5],
        ticks_labels: ['2 GB', '3 GB', '4 GB', '6 GB', '10 GB'],
        tooltip: 'always',
        value: 1,
    });
    $('#memory-ram').on("slide", function (sliderValue) {
        $('input[name="memory-ram"]').val(sliderValue.value);
    });

    $('select[name="bandwidth"]').on("change", function () {
        $('input[name="bandwidth-price"]').val($(this).val());
        calculatePrice();
    });
    $('select[name="billing-cycle"]').on("change", function () {
        calculatePrice();
    });
    $('select[name="control-panel"]').on("change", function () {
        calculatePrice();
    });
    function calculatePrice() {
        var total = 13.95;
        if ($('#cpu-core').data('price') != "Default") {
            total += $('#cpu-core').data('price');
        }
        if ($('#memory-ram').data('price') != "Default") {
            total += $('#memory-ram').data('price');
        }
        if ($('#disk-space').data('price') != "Default") {
            total += $('#disk-space').data('price');
        }
        if ($('input[name="bandwidth-price"]').val() != "3000") {
            total += bandWidthPrices[$('input[name="bandwidth-price"]').val()];
        }
        if ($('select[name="control-panel"]').val()) {
            total += controlPanelPrices[$('select[name="control-panel"]').val()];
        }
        if ($('select[name="billing-cycle"]').val()) {
            total *= billingCycleMonth[$('select[name="billing-cycle"]').val()];
        }


        $('#price-total').empty().append(total.toFixed(2));
    }

</script>
@stop