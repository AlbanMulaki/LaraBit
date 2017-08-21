@extends('clients::layouts.default')

@section('content')
<div class=" header-box">
    <div class="container ">
        <header>
            <h2>VPS Server</h2>
            <h4>
                High Performance SSD Hosting. 
            </h4>
        </header>
    </div>
</div>
<div class="container feature-solutions">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>High Performance</h2>
            <p>
                Each virtual server is hosted on a full SSD platform, thus ensuring the fastest I/O available on the market today.
                offers great versatility allowing you to install a wide variety of Linux operating systems
                <strong>CentOS 6, CentOS 7, Ubuntu 14, Ubuntu 16, Ubuntu 16 with RDP, Fedora 25, Debian 8</strong> and <strong>Windows Server 2012</strong> or <strong>Windows 8.1</strong>.

                We offer professional customer service that provides solutions to customers when needed to ensure your VPS is always online.

            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/serverless.svg") }}" class="img-responsive" title="High Performance Server" alt="High Performance Server"/>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/optimal-availability.png") }}" class="img-responsive" title="Fast Network & Data Center Europe" alt="Fast Network & Data Center Europe" />
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Fast Network & Data Center Europe</h3>
            <p>
                Our cloud hosting platform makes it easy for you to build 
                applications and websites on a fast and reliable service designed to support heavy enterprise workloads.
                IPV6 Read! We offer native IPv6 on our entire network infrastructure and each of our VPSs has IPv6 enabled. On top of that, we offer a free /64 IPv6 subnet for every VPS.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h2>Virtaulization & Container</h2>
            <p>
                KVM is a full virtualization solution for the Linux Kernel that turns it 
                into a hypervisor, which can only be run on hardware containing processor 
                based virtualization extensions. The kernel module loads the core virtualization 
                infrastructure and a processor specific module designed for Intel processors,
                giving you a dedicated server environment at a very low price.

                You can have a dedicated server environment that is fully autonomous without 
                any virtualization restriction while also benefiting from cloud
                technologies such as resource allocation and redundancy that allows you to replicate your VPS in an instant on another node.
                It's based on Kubernetes, the leading open-source container orchestration system giving you
                the flexibility to take advantage of on-premises, hybrid, or public cloud infrastructure.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img src="{{ asset("img/self-healing.svg") }}" class="img-responsive"  title="Virtaulization & Container" alt="Virtaulization & Container"/>
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
            <h2>VPS Server</h2>
            <p>
                VPS Servers Packages are fully-managed by our experts.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-solutions-small-single">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Instant Setup</h4>
                    <p>
                        Our virtual servers are provisioned and delivered within maximum 20 minutes after the order has been completed.    
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Fast OS reload</h4>
                    <p>
                        You can reinstall the operating system on your virtual server with just a few clicks giving you a new VPS within minutes.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>24/7 Customer Care Center</h4>
                    <p>
                        Because problems can arrise at any hour our technical experts are online all the time to assist our customers.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Multiple OS templates</h4>
                    <p>
                        Each virtual server offers great versatility allowing you to install a wide variety of Linux or windows operating systems.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Cloud-based Infrastructure</h4>
                    <p>
                        Our cloud hosting platform makes it easy for you to build applications and websites on a fast and reliable service designed to support heavy enterprise workloads
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 feature-solutions-small-single">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Custom built Control Panel</h4>
                    <p>
                        We have built the VPS control panel in-house making sure we provide a secure and reliable hosting experience.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Consultations</h4>
                    <p>
                        Our experts are ready to advise you on any subject – from the preparation of IT-infrastructure to the architecture of your project.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Competitive prices</h4>
                    <p>
                        Our main goal is to provide a fast VPS service at affordable rates without any loss in quality for our customers.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>cPanel</h4>
                    <p>
                        In the competitive web hosting industry, cPanel & WHM offers hosting providers the tools that they need to succeed.
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>IPv6 Ready!</h4>
                    <p>
                        We offer native IPv6 on our entire network infrastructure and each of our VPSs has IPv6 enabled. On top of that, we offer a free /64 IPv6 subnet for every VPS.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background:#fff;">
    <div class="container ">
        <div class="col-xs-12  text-center" style="margin:20px 0;">
            <h2>VPS Server Pricing</h2>
            <p>VPS Server High Performance SSD Hosting has competitive pricing.</p>
        </div>
    </div>
</div>


<div class="container ">
    <div class="row">
        <br>
        <br>
    </div>
</div>
<style>
    .article img{
        height:180px;
        width:180px;
        padding-top:0;
        margin-left:auto;
        margin-right:auto;
        padding-bottom:0;
    }
    .article-link,
    .article-link:hover{
        color:inherit;
    }
    .price-article{
        color:#3d8be0;
        font-weight: 500;
    }
</style>
<div style="background:#f7f7f7;">
    <div class='container'>
        <br>
        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
            <a href="{{ route('website.vps-server-windows-kvm') }}" class="article-link">
                <div class="col-xs-12 article">
                    <img src="{{ asset('img/windows-logo.png')}}" class="img-responsive" alt="Windows VPS SSD Server High Peformance" title="Windows VPS SSD Server" />
                    <h3>Windows VPS SSD Server </h3>
                    <br>
                    <p>
                        Available with Windows Server 2012 R2 or Windows 8, stored on SSD drives.
                        <br>
                    <h3 class="price-article"><small>Starting price </small> €14.95</h3>
                    </p>
                    <div class="row text-left text-uppercase" style=" color:#3d8be0;   border-top: 1px solid #e4e4e4;">
                        Learn More
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
            <a href="{{ route('website.vps-server-linux-kvm') }}"  class="article-link">
                <div class="col-xs-12 article">
                    <img src="{{ asset('img/linux-logo.png')}}" class="img-responsive" alt="Linux VPS SSD Server High Performance" title="Linux VPS SSD Server" />
                    <h3>Linux VPS SSD Server </h3>
                    <br>
                    <p>
                        CentOS 6, CentOS 7, Ubuntu 14,
                        Ubuntu 16, Ubuntu 16 with RDP, Fedora 25, Debian 8 on SSD drives.
                    <h3 class="price-article"><small>Starting price </small> €13.95</h3>
                    </p>
                    <div class="row text-left text-uppercase" style=" color:#3d8be0;     border-top: 1px solid #e4e4e4;">
                        Learn More
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br><br>
    <br><br>
</div>


<div class="feature-solutions-small">
    <div class="container" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center feature-divicer-icon">
            <i class="fa fa-object-group fa-3x"></i>
        </div>
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  text-center">
                <img src="{{ asset('img/centos-logo.png')}}" class="img-responsive" alt="Linux VPS CentOS" title="Linux VPS CentOS" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/ubuntu-logo.png')}}" class="img-responsive" alt="Linux VPS Ubuntu 16,Ubuntu 14 " title="Linux VPS Ubuntu 14 Ubuntu 16" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/opensuse-logo.png')}}" class="img-responsive" alt="Linux VPS OpenSuse" title="Linux VPS OpenSuse" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/redhat-logo.png')}}" class="img-responsive" alt="Linux VPS RedHat" title="Linux VPS RedHat" />
                <br><br>
            </div>
        </div>
        <div class=" col-lg-12 col-md-12 col-sm-12  col-xs-12">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/core-os.png')}}" class="img-responsive" alt="Linux VPS CentOS" title="Linux VPS CoreOs" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/pragmaticlinux-logo.png')}}" class="img-responsive" alt="Linux VPS PragmaticLinux" title="Linux VPS PragmaticLinux" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('img/windows-8-logo.png')}}" class="img-responsive" alt="Windows VPS Server" title="Windows VPS Server" />
                <br><br>
                <br><br>
            </div>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class=" article article-products">
                    <a href="{{ route('website.vps-server-linux-kvm')}}">Linux VPS SSD Server</a>
                    <br>
                    <small>
                        Provide VPS Linux. 
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-bottom:40px;">
    </div>
</div>


@stop