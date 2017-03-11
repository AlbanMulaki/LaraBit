@include('js-localization::head')
<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <h1>

                                <script type="text/javascript">
                                    document.write(Lang.get('login.login_form'));
                                </script>
                            </h1>
                            <div>
                                <input type="text" class="form-control" id="username" placeholder="" required="" />
                                <script type="text/javascript">
                                    document.getElementById("username").placeholder = Lang.get('login.username');
                                </script>
                            </div>
                            <div>
                                <input type="password" class="form-control" id="password" placeholder="@lang('login.password')" required="" />
                                <script type="text/javascript">
                                    document.getElementById("password").placeholder = Lang.get('login.password');
                                </script>
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">
                                    <script type="text/javascript">
                                        document.write(Lang.get('login.login'));
                                    </script>
                                </a>
                                <a class="reset_pass" href="#">
                                    <script type="text/javascript">
                                        document.write(Lang.get('login.lost_your_password'));
                                    </script>
                                </a>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="separator">
                                <p class="change_link">
                                    <script type="text/javascript">
                                        document.write(Lang.get('login.new_to_site'));
                                    </script>
                                    <a href="#signup" class="to_register"> 
                                        <script type="text/javascript">
                                            document.write(Lang.get('login.create_account'));
                                        </script>
                                    </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw"></i> 
                                        <script type="text/javascript">
                                            document.write(Lang.get('company.company_name'));
                                        </script>
                                    </h1>
                                    <p>©
                                        <script type="text/javascript">
                                            var date = new Date();
                                            document.write(date.getFullYear() + ' ' + Lang.get('company.all_right_reserved'));
                                        </script> 
                                    </p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

            </div>
            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input class="form-control" placeholder="Username" required="" type="text">
                        </div>
                        <div>
                            <input class="form-control" placeholder="Email" required="" type="email">
                        </div>
                        <div>
                            <input class="form-control" placeholder="Password" required="" type="password">
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br>

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
</html>