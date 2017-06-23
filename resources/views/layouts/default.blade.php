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
        @if(session()->get('code') == 200)
        <script>
            new PNotify({
                title: successTitle,
                text: successText,
                type: 'success',
                styling: 'bootstrap3',
                icon: 'fa fa-check fa-lg',
                animate: {
                    animate: true,
                    in_class: 'bounce',
                    out_class: 'zoomOutRight'
                }
            });
        </script>
        @elseif(session()->get('code') == 500 || $errors->count())
        <script>
            new PNotify({
                title: errorTitle,
                text: errorText,
                type: 'error',
                styling: 'bootstrap3',
                icon: 'fa fa-times fa-lg',
                animate: {
                    animate: true,
                    in_class: 'bounce',
                    out_class: 'zoomOutRight'
                }
            });
        </script>
        @endif
    </body>
</html>
