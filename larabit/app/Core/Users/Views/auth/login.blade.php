@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">
@include('users::includes.head')
<body class="login">
  <div>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h1 id="title"></h1>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="text" id="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder=""
              required="" autofocus="" />
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" id="password" class="form-control" name="password" id="password" placeholder="" required="" />
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div>
              <button type="submit" id="login" class="btn btn-default submit"></button>
              <a class="reset_pass" id="lost_your_password" href="{{ route('password.request') }}"></a>
            </div>
            <div class="clearfix">
            </div>
            <div class="separator" >
              <p class="change_link" >
                <span id="new_to_site"></span>
                <a href="{{ route('register') }}" id="create_account" class="to_register"></a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1 id="company_name"><i class="fa fa-paw"></i></h1>
                <p id="all_right_reserved">©</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>

  <script src="{{ asset('/js/lib/jquery.min.js')}}"></script>
  <script>
  $(document).ready(function () {
    document.title = "{!! $title !!}";
    document.getElementById("email").placeholder = Lang.get('login.email');
    document.getElementById("password").placeholder = Lang.get('login.password');
    $('#title').append(Lang.get('login.login_form'));
    $('#login').append(Lang.get('login.login'));
    $('#lost_your_password').append(Lang.get('login.lost_your_password'));
    $('#new_to_site').append(Lang.get('login.new_to_site'));
    $('#create_account').append(Lang.get('login.create_account'));
    $('#company_name').append(Lang.get('company.company_name'));
    $('#all_right_reserved').append(new Date().getFullYear() + " " + Lang.get('company.all_right_reserved'));
  });
  </script>
</body>
</html>
