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
    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <style type="text/css" media="screen">
      
    </style>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAHShDo_C4WnrDy7Ssqr5ZRn2DDolRGg8A&sensor=false&amp;libraries=places"></script>
</head>
<div class="js"
<body>
   <div id="preloader"></div>
    <div class="image-container set-full-height" style="background-image: url({{asset('img/bg-banner1s.jpg')}})">
        <nav class="navbar" style="padding-top:30px;">
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

                        <li><a class="btn btn-next btn-fill btn-danger btn-wd" style="color:#fff;" href="{{ route('sitters.login') }}"> Already Registered ?</a></li>

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
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
         
            </div>
        </nav>

     

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
                            {{Form::open(['route' => 'sitter.register'])}} {{ csrf_field() }}
                            <!--        You can switch " data-color="red" "  with one of the next bright colors: "blue", "azure", "red", "red"       -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">Build your Sitter profile</h3>
                                <p class="category">Tell us more about yourself to start building your Woofpack sitter listing.</p>

                                <p class="category">Put yourselves in an dog owner's shoes. You'd want someone who's trustworthy and reliable!</p>
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
                                            Location
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
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 ">
                        <div class="picture-container">
                          <div class="picture">
                            <img src="{{asset('img/default-avatar.jpg')}}" class="picture-src" id="wizardPicturePreview" title="" />
                            <input type="file" id="wizard-picture">
                          </div>
                          <h6>Choose Picture</h6>
                        </div>
                      </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 ">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password?" required>
                                            </div>
                                        </div>
                                       
                                        

                                       
                                    </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h5 class="info-text">Map Location </h5>
                                    <div class="row">
                                         <div class="col-sm-10 col-sm-offset-1" style ="padding-bottom:20px;">

                                            <input id="searchInput" class="form-control" style="width:80%;" type="text" placeholder="Enter a location">
                                            <div class="map" id="map" style="width: 100%; height: 300px;"></div>
                                            <div class="form_area">
                                                <input type="text" hidden name="location" id="location">
                                                <input type="text" hidden name="lat" id="lat">
                                                <input type="text" hidden name="lng" id="lng">
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

                                                <textarea class="form-control" name="res_address" placeholder="" value="{{ old('res_address') }}" required rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group">
                                                <label>Your City/Town</label>
                                                <select class="form-control" name="city">

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
                                                <select class="form-control" name="dogs">

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
                                            <div class="form-group">
                                                <label>Do you offer walks with the dogs</label>
                                                <select class="form-control" name="dogwalks">
                                                    <option disabled="" selected="">- response -</option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Do you offer food?</label>
                                                <select class="form-control" name="food">
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

                                                <textarea class="form-control" name="bio" placeholder="" value="{{ old('email') }}" required rows="9"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                                    <button type="submit" class="btn btn-finish btn-fill btn-danger btn-wd">
                                        Finish Profile
                                    </button>
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!--  big container -->

</body>
</div>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--   <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script>jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
  $('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});</script>
<script>
    /* script */
    function initialize() {
        var latlng = new google.maps.LatLng(-28.5355161, 77.39102649999995);
        var map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 8
        });
        var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });
        var input = document.getElementById('searchInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var geocoder = new google.maps.Geocoder();
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            bindDataToForm(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng());
            infowindow.setContent(place.formatted_address);
            infowindow.open(map, marker);

        });
        // this function will work on marker move event into map 
        google.maps.event.addListener(marker, 'dragend', function() {
            geocoder.geocode({
                'latLng': marker.getPosition()
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        bindDataToForm(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });
    }

    function bindDataToForm(address, lat, lng) {
        document.getElementById('location').value = address;
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

</html>

