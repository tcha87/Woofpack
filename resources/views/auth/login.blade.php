@include('layouts/header')
<style>
    .login-page {
    background-color: #e5e7ed;
}

.login-block {

    margin-top:150px;
}

.nav-on-header .navbar {
    position: absolute;
    margin-top: 0px;
    background-color: #DA4C33 ;
</style>
 <div class="login-page">


    <div class ="container">
         <div class="row">
        <div class="col-md-6 col-md-offset-3">
      <div class="login-block">
        <img src="{{asset('img/logo.png')}}" alt="">
        <h1>Log into your account</h1>

       <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="email" class="form-control" name="email"  placeholder="Email">
            </div>
                    <div class ="pull-left">
                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                    </div>

                               
          </div>
          
          <hr class="hr-xs">

           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

              <div class ="pull-left">
                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
                    </div>

          </div>

          <div class="form-group pull-left">
                          
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                       

          <button class="btn btn-primary btn-block" type="submit">Login</button>

          <div class="login-footer">
            <h6>Or login with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="{{ route('password.request') }}">Forget Password?</a>
        <a class="pull-right" href="user-register.html">Register an account</a>
      </div>
        </div>  </div>
    </div>


   
    
  

