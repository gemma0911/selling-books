<div class="login_form_wrapper">
    <div class="">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="login_wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <a href="#" class="btn btn-primary facebook"> <span>Login with Facebook</span>
                                <i class="fa fa-facebook"></i> </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <a href="#" class="btn btn-primary google-plus"> Login with Google <i
                                    class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                    <h2>or</h2>
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="formsix-pos">
                            <div class="form-group i-email">
                                <input type="email" name="email" class="form-control" required=""
                                    id="email2" placeholder="Email Address *">
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password">
                                <input type="password" name="password" class="form-control" required=""
                                    id="password2" placeholder="Password *">
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group i-password">
                                <input type="password" name="password1" class="form-control" required=""
                                    id="password2" placeholder="Password *">
                            </div>
                        </div>
                        <div class="login_remember_box">
                            <label class="control control--checkbox">Remember me
                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                            <a href="#" class="forget_password">
                                Forgot Password
                            </a>
                        </div>
                        <div class="login_btn_wrapper">
                            <button type="submit" class="btn btn-primary login_btn"> Login </button>
                        </div>
                        <div class="login_message">
                            <p>Don&rsquo;t have an account ? <a href="#"> Sign up </a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
