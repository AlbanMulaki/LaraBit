@extends('clients::layouts.default')

@section('content')
<br><br>
<div class='container'>
    <ul class="">
        <li><a href="{{ route('website.home')}}">Home</a>
            <ul class="">
                <li><a href="#">Solutions</a>
                    <ul class="">
                        <li><a href="{{ route('website.solutions-website-web-apps') }}">Website & Web Apps Solutions</a></li>
                        <li><a href="{{ route('website.solutions-mobile-application') }}">Mobile Application Solutions</a></li>
                    </ul>

                </li>
            </ul>

        </li>
    </ul>
</div>
@stop