
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
    margin-top: 0px ! important;
    background-color: #38b0fe ! important;
</style>

 <div class="login-page">
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
         
     
      

      <div class="login-block">
        <img src="{{asset('img/logo.png')}}" alt="">
        <h1>Register your account</h1>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input type="text" name ="name" class="form-control" value="{{ old('name') }}"  autofocus placeholder="Your name">
            </div>

            <div class ="pull-left">

                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                
            </div>
          </div>
          
          <hr class="hr-xs">

           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
           <input id="email" type="email" class="form-control"  placeholder="Your email" name="email" value="{{ old('email') }}">
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
           <input id="password" type="password" placeholder="Choose password" class="form-control" name="password" >

                                
            </div>
            <div class ="pull-left">
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation">
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">Sign up</button>

          <div class="login-footer">
            <h6>Or register with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
     

      <div class="login-links">
        <p class="text-center">Already have an account? <a class="txt-brand" href="{{url('login')}}">Login</a></p>
      </div>

    


        
        </div>
            </div>
            </div>
        </div>

















