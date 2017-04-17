@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">
@include('users::includes.head')
<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <h1 id="form_title"></h1>
            <div>
              <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required="" />
              @if ($errors->has('firstname'))
                <span class="help-block">
                  <strong>{{ $errors->first('firstname') }}</strong>
                </span>
              @endif
            </div>
            <div>
              <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required="" />
              @if ($errors->has('firstname'))
                <span class="help-block">
                  <strong>{{ $errors->first('lastname') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="email" class="form-control" id="email" placeholder="" name="email" required="" />
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <input type="radio" name="gender" value="1"><span id="female"></span></input>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="2"> <span id="male"></span></input>
            @if ($errors->has('gender'))
              <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
              </span>
            @endif
            <br><br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" name="password" class="form-control" id="password" placeholder="" required="" />
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div>
              <input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="" required="" />
            </div>
            <br>
            <div>
              <button class="btn btn-default submit" id="submit" type="submit"></button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">
                <span id="already_a_member"></span>
                <a href="{{ route('login') }}" id="log_in" class="to_register"></a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1 id="company"><i class="fa fa-paw"></i></h1>
                <p>© <span id="rights_reserved"></span></p>
              </div>
            </div>
          </form>
        </section>
        @if (count($errors) > 0)
        <div class="callout callout-danger">
          @foreach ($errors->all() as $error)
          <h4>{{ $error }}</h4>
          <p>{{ $error }}</p>
          @endforeach
        </div>
        @endif
      </div>
    </div>
  </div>
  <script src="{{ asset('/js/lib/jquery.min.js')}}"></script>
  <script src="{{ asset('/js/lib/icheck.min.js')}}"></script>
  <script>
  $(document).ready(function () {
    document.title = {!! $title !!};
    $('input').iCheck({
      radioClass: 'iradio_square-green',
      increaseArea: '20%' // optional
    });
    $('#form_title').append(Lang.get('login.create_account'));
    //                document.getElementById('firstname').placeholder = Lang.get('login.first_name');
    $('#firstname').attr("placeholder", Lang.get('login.first_name'));
    $('#lastname').attr("placeholder", Lang.get('login.last_name'));
    $('#email').attr("placeholder", Lang.get('login.email'));
    $('#password').attr("placeholder", Lang.get('login.password'));
    $('#password-confirmation').attr("placeholder", Lang.get('login.confirm_password'));
    $('#female').append(" " + Lang.get('login.female'));
    $('#male').append(" " + Lang.get('login.male'));
    $('#submit').append(Lang.get('login.create_account'));
    $('#already_a_member').append(Lang.get('login.already_a_member'));
    $('#log_in').append(Lang.get('login.login'));
    $('#company').append(Lang.get('company.company_name'));
    $('#rights_reserved').append(new Date().getFullYear() + " " + Lang.get('company.all_right_reserved'));
  });
  </script>
</body>
</html>
