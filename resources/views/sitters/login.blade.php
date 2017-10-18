<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <title>Woofpack | Sitter Earlybird Access</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
<!--   <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
 -->
  <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
  <div class="image-container set-full-height" style="background-image: url({{asset('img/bg-banner1s.jpg')}})">
    <nav class="navbar" style ="padding-top:30px;">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>

          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                            <li><a class="btn btn-next btn-fill btn-danger btn-wd" style ="color:#fff;" href="{{ route('sitters.login') }}">Already Registered ?</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li>

                                    <a href="{{url('/profile/1')}}">View Profile</a>
                                  </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <!-- <ul class="nav-menu">
          <li>
            <a class="active" href="{{ url('/') }}">Home</a>

          </li>
          <li>
            <a href="#">About </a>

          </li>

          <li>
            <a href="#">Contact </a>

          </li>
          <li>
            <a href="#">Help</a>

          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>

 <!--  //https://ysk-override.com/Multi-Auth-in-laravel-54-Registration-20170202/ -->

      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                      {{Form::open(['route' => 'sitter.register'])}}
                        {{ csrf_field() }}
                    <!--        You can switch " data-color="red" "  with one of the next bright colors: "blue", "azure", "red", "red"       -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">Login into your Account </h3>
                             
                          </div>
                <div class="wizard-navigation">
                  <div class="progress-with-circle">
                      <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
                  </div>
                  <ul>
                                  <li>
                      <a href="#location" data-toggle="tab">
                        <div class="icon-circle">
                          <i class="ti-lock"></i>
                        </div>
                        Account
                      </a>
                    </li>
                        
                              </ul>
                </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="location">

                                  <div class="row">
                                    
                                      
                                      <div class="col-sm-8 col-sm-offset-2">
                                          <div class="form-group">
                                              <label>Email address</label>
                                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                          </div>
                                      </div>
                                      <div class="col-sm-8 col-sm-offset-2">
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="password" name ="password" class="form-control" id="exampleInputEmail1" placeholder="Password?" required>
                                          </div>
                                      </div>
                                      	 <div class="col-sm-8 col-sm-offset-2 text-center">
                                         <button type="submit" class="btn btn-finish btn-fill btn-danger btn-wd">
                                    Login 
                                </button>
                                     </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h5 class="info-text">What type of Boarding house  do you have? </h5>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="col-sm-4 col-sm-offset-2">
                          <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="house" value="home">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-home"></i>
                              <p>Home</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="house" value="apartment">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-package"></i>
                              <p>Apartment</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Contant Number</label>
                                               <input id="name" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                                          </div>
                                      </div>

                                      <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Whatsapp Number</label>
                                               <input id="name" type="text" class="form-control" name="whatsapp_number" value="{{ old('whatsapp_number') }}" autofocus>
                                          </div>
                                      </div>

                                      <div class="col-sm-10 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Residential Address</label>

                                              <textarea class="form-control" name ="res_address" placeholder="" value="{{ old('res_address') }}" required rows="4"></textarea>
                                          </div>
                                      </div>


                                      <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group">
                                                <label>Your City/Town</label>
                                                <select class="form-control" name ="city">

                                                    <option selected="">JHB</option>
                                                    <option>Pretoria </option>
                                                    <option>Ruimsig</option>
                                                </select>
                                            </div>

                                      </div>

                                      <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Post Code</label>
                                               <input id="name" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}" autofocus>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h5 class="info-text">Tell us more about your Dog caring skills. </h5>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Do you have dogs</label>
                                              <select class="form-control" name ="dogs">

                                                  <option selected>Yes</option>
                                                  <option>No </option>

                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Do you offer outdoor access ?</label>
                                              <select class="form-control" name="outdoor">
                                                  <option disabled="" selected="">- response -</option>
                                                  <option>Yes</option>
                                                  <option>No </option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group" >
                                              <label>Do you offer walks with the dogs</label>
                                              <select class="form-control" name ="dogwalks">
                                                  <option disabled="" selected="">- response -</option>
                                                  <option>Yes</option>
                                                  <option>No </option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Do you offer food?</label>
                                              <select class="form-control" name ="food">
                                                  <option disabled="" selected="">- response -</option>
                                                  <option>Yes</option>
                                                  <option>No </option>
                                              </select>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h5 class="info-text"> Drop us a small description. </h5>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Short Bio</label>

                                                <textarea class="form-control" name ="bio" placeholder="" value="{{ old('email') }}" required rows="9"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                      
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
          </div> <!-- row -->
      </div> <!--  big container -->



</body>

  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="{{asset('js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--   <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>