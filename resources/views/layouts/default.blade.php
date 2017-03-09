@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">
    @include('includes.head')

    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    @include('includes.sidebar')
                </div>
                @include('includes.header')
                <div class="right_col" role="main">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
        <script src="{{ asset('/js/lib/jquery.min.js')}}"></script>
        <script src="{{ asset('/js/lib/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/js/lib/fastclick.min.js')}}"></script>
        <script src="{{ asset('/js/lib/nprogress.min.js')}}"></script>
        <script src="{{ asset('/js/lib/raphael.min.js')}}"></script>
        <script src="{{ asset('/js/lib/morris.min.js')}}"></script>
        <script src="{{ asset('/js/lib/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{ asset('/js/lib/moment.min.js')}}"></script>
        <script src="{{ asset('/js/lib/daterangepicker.min.js')}}"></script>
        <script src="{{ asset('/js/lib/echarts.min.js')}}"></script>
        <script src="{{ asset('/js/lib/chart.min.js')}}"></script>
        <script src="{{ asset('/js/lib/jquery.vmap.min.js')}}"></script>
        <script src="{{ asset('/js/lib/jquery.vmap.world.min.js')}}"></script>
        <script src="{{ asset('/js/lib/icheck.min.js')}}"></script>
        <!--<script src="{{ asset('/js/lib/gauges.min.js')}}"></script>-->
        <script src="{{ asset('/js/lib/ion.rangeSlider.min.js')}}"></script>
        <script src="{{ asset('/js/lib/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ asset('/js/lib/jquery-inputmask.min.js')}}"></script>
        <script src="{{ asset('/js/lib/jquery-knob.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/skycons/1396634940/skycons.min.js"></script>
        <script src="{{ asset('/js/lib/custom.min.js')}}"></script>
        <script src="{{ asset('/js/lib/app.min.js')}}"></script>
        
    </body>
</html>
