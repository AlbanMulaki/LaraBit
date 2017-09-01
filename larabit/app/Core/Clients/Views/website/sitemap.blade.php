@extends('clients::layouts.default')

@section('content')
<br><br>
<div class='container'>
    <ul class="">
        <li><a href="{{ route('website.home')}}">Home</a> <span class='label label-info'>Dev</span>
            <ul class="">
                <li><a href="#">Solutions</a>
                    <ul class="">
                        <li><a href="{{ route('website.solutions-website-web-apps') }}">Website & Web Apps Solutions</a> <span class='label label-warning'>Links</span></li>
                        <li><a href="{{ route('website.solutions-mobile-application') }}">Mobile Application Solutions</a> <span class='label label-warning'>Links</span></li>
                    </ul>

                </li>
            </ul>
            <ul class="">
                <li><a href="{{ route("website.products") }}">Products</a><span class='label label-success'>OK</span>
                    <ul class="">
                        <li>
                            <a href="{{ route('website.reseller-hosting') }}">Dedicated Server</a></span><span class='label label-warning'>Links</span>
                        </li>
                        <li>
                            <a href="{{ route("website.vps-server") }}">VPS Server </a>  <span class='label label-success'>OK</span>
                            <ul class="">
                                <li><a href="{{ route('website.vps-server-linux-kvm') }}">Linux VPS SSD KVM</a> <span class='label label-warning'>Links</span></li>
                                <li><a href="{{ route("website.vps-server-windows-kvm") }}">Windows VPS SSD</a> <span class='label label-warning'>Links</span></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route("website.web-hosting") }}">Web Hosting</a> <span class='label label-warning'>Links</span>
                            <ul class="">
                                <li>
                                    <a href="#">Compare Web Hosting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Reseller Hosting</a>
                            <ul class="">
                                <li>
                                    <a href="#">Compare Web Hosting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route("website.business-email") }}">Business Email</a><span class='label label-warning'>Links</span>
                        </li>
                        <li>
                            <a href="{{ route("website.domain-names-registraton") }}">Domain Name Registration</a><span class='label label-warning'>Links</span>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="">
                <li>
                    <a href="{{ route("website.about-us") }}">About Us</a><span class='label label-warning'>Links</span>
                    <ul class="">
                        <li>
                            <a href="#">Biref overview about</a>
                        </li>
                        <li>
                            <a href="#">Date Center Innovation</a>
                        </li>
                        <li>
                            <a href="#">Serverless, Just Code</a>
                        </li>
                        <li>
                            <a href="#">Future-Proof Infrastructure</a>
                        </li>
                        <li>
                            <a href="#">Security at Scale</a>
                        </li>
                        <li>
                            <a href="#">Startups</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Support</a>
                    <ul class="">
                        <li>
                            <a href="#">Submit Support Ticket</a>
                        </li>
                        <li>
                            <a href="#">Community Forum</a>
                        </li>
                        <li>
                            <a href="#">Live Chat</a>
                        </li>
                        <li>
                            <a href="#">Report Abuse</a>
                        </li>
                        <li>
                            <a href="#">Contact Us (Form)</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tools</a>
                    <ul class="">
                        <li>
                            <a href="#">WHOIS</a>
                        </li>
                        <li>
                            <a href="#">Ping</a>
                        </li>
                        <li>
                            <a href="#">Internet Speed Test</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">Legal</a>

                    <ul class="">
                        <li>
                            <a href="#">Term of service</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">VPS Term of service</a>
                        </li>
                        <li>
                            <a href="#">Acceptable Use Policy</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
    </ul>
</div>
@stop