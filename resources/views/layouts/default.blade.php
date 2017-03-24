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
                <div class="right_col" role="main" id='larabit-app'>
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>
        @include('includes.script')

    </body>
</html>
