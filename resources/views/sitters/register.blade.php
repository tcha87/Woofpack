<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <title>Paper Bootstrap Wizard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('css/demo.css')}}" rel="stylesheet" />

  <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
  <div class="image-container set-full-height" style="background-image: url({{asset('img/bg-facts.jpg')}})"> 
  
    
      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                    <form action="" method="">
                    <!--        You can switch " data-color="red" "  with one of the next bright colors: "blue", "azure", "red", "red"       -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">Account details</h3>
                              <p class="category">These are your account details , for logging into the system</p>
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
                                  <li>
                      <a href="#type" data-toggle="tab">
                        <div class="icon-circle">
                          <i class="ti-direction-alt"></i>
                        </div>
                        Type
                      </a>
                    </li>
                                  <li>
                      <a href="#facilities" data-toggle="tab">
                        <div class="icon-circle">
                          <i class="ti-panel"></i>
                        </div>
                        Facilities
                      </a>
                    </li>
                                  <li>
                      <a href="#description" data-toggle="tab">
                        <div class="icon-circle">
                          <i class="ti-comments"></i>
                        </div>
                        You short bio
                      </a>
                    </li>
                              </ul>
                </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <h5 class="info-text"> Let's start with the basic details</h5>
                                    </div>
                                      <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Your Name</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Email address</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                          </div>
                                      </div>
                                      <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Password</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                          </div>
                                      </div>
                                      <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Confirm Password</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h5 class="info-text">What type of location do you have? </h5>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="col-sm-4 col-sm-offset-2">
                          <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="jobb" value="Design">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-home"></i>
                              <p>Home</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="jobb" value="Design">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-package"></i>
                              <p>Apartment</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h5 class="info-text">Tell us more about facilities. </h5>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Your place is good for</label>
                                              <select class="form-control">
                                                  <option disabled="" selected="">- type -</option>
                                                  <option>Business</option>
                                                  <option>Vacation </option>
                                                  <option>Work</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Is air conditioning included ?</label>
                                              <select class="form-control">
                                                  <option disabled="" selected="">- response -</option>
                                                  <option>Yes</option>
                                                  <option>No </option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                          <div class="form-group">
                                              <label>Does your place have wi-fi?</label>
                                              <select class="form-control">
                                                  <option disabled="" selected="">- response -</option>
                                                  <option>Yes</option>
                                                  <option>No </option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="form-group">
                                              <label>Is breakfast included?</label>
                                              <select class="form-control">
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
                                        <div class="col-sm-8 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Short Bio</label>
                                                <textarea class="form-control" placeholder="" rows="9"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                      <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                      <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                  </div>

                                  <div class="pull-left">
                                      <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                  </div>
                                  <div class="clearfix"></div>
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

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
