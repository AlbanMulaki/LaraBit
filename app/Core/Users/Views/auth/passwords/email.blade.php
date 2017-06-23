@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">
    @include('users::includes.head')
    <body class="login">
        <div class="container" style='padding-top: 100px;'>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="reset_password"></div>
                        <div class="panel-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label" id="email_address"></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button id="send_password_reset_link" type="submit" class="btn btn-primary">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('/js/lib/jquery.min.js')}}"></script>
        <script>
            $(document).ready(function () {
                document.title = "{{ $title }}";
            });
            $('#reset_password').append(Lang.get('login.reset_password'));
            $('#email_address').append(Lang.get('login.email_address'));
            $('#send_password_reset_link').append(Lang.get('login.send_password_reset_link'));
            
        </script>
    </body>
</html>
