<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Woofpack </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
/* script */
function initialize() {
   var latlng = new google.maps.LatLng(-28.5355161,77.39102649999995);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
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
    
        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);
       
    });
    // this function will work on marker move event into map 
    google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {        
              bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
          }
        }
        });
    });
}
function bindDataToForm(address,lat,lng){
   document.getElementById('location').value = address;
   document.getElementById('lat').value = lat;
   document.getElementById('lng').value = lng;
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
       <style >
         
         .navbar-nav>li>a:hover {
   background-color:transparent;

}

         .navbar-nav>li>a:active {
   background-color:transparent;

}
 
body::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: transparent;
}

  .item-block header img {
    width: 124px;
    margin-right: 30px;
    float: left;
}
    </style>
       
    </head>
   
        <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
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
                        @if (Auth::guard('sitter')->guest())

                        

                          
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('sitter')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/seller_logout') }}"
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
        <ul class="nav-menu">
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
    <!-- END Navigation bar -->



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
    background-color: #DA4C33  ! important;
</style>

<div class="container-fluid">
    <div class="row">
       
    <!-- Page header -->
    <header class="page-header" style="background-image: url({{asset('img/bg-factsd.jpg')}})">
      <div class="container page-name">
        <h1 class="text-center">Welcome  {{ Auth::guard('sitter')->user()->name }}</h1>
        <p class="lead text-center">This is a preview of you Woofpack Profile displayed on the site , you can edit profile</p>
      </div>

      <div class="container">

        <div class="row">
             <div class ="col-sm-12">
                <header class="section-header">
            
              <h2><img style ="margin-right:20px;" src="{{asset('img/check-form.png')}}" alt="">Personal Information</h2>
              
            </header>
             </div>
          <div class="form-group col-xs-12 col-sm-6">


             <label>Display name</label>
            <input type="text" class="form-control input-lg" value ="{{ Auth::guard('sitter')->user()->name }} ">
          </div>

          <div class="form-group col-xs-12">
            <textarea class="form-control" rows="3" placeholder="{{ Auth::guard('web_seller')->user()->bio }}"></textarea>
          </div>

          <div class="form-group col-xs-12">
             <label>Bio</label>
            <textarea class="form-control" rows="3" placeholder="{{ Auth::guard('sitter')->user()->bio }}"></textarea>
          </div>

         

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
             <label>Phone number</label>
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
               
              <input type="text" class="form-control" value ="{{ Auth::guard('sitter')->user()->phone_number }} ">
            </div>
          </div>

           <div class="form-group col-xs-12 col-sm-6 col-md-4">
             <label>Whatsapp number</label>
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
               
              <input type="text" class="form-control" value ="{{ Auth::guard('sitter')->user()->whatsapp_number }} ">
            </div>
          </div>

           <div class="form-group col-xs-12 col-sm-6 col-md-4">
             <label>City</label>
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
               
              <input type="text" class="form-control" value ="{{ Auth::guard('sitter')->user()->city }} ">
            </div>
          </div>

          
          

        </div>

        <div class="button-group">
          <div class="action-buttons">
            <div class="upload-button">
              <button class="btn btn-block btn-primary">Choose a cover image</button>
              <input id="cover_img_file" type="file">
            </div>
          </div>
        </div>

      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


        <!-- Job detail -->
        <section>
          <div class="container">

            <header class="section-header">
            
              <h2><img style ="margin-right:20px;" src="{{asset('img/dog-training.png')}}" alt="">Dog Caring Skills</h2>
              <p>Write about your company, job description, skills required, benefits, etc.</p>
            </header>
            
           

          </div>
        </section>
        <!-- END Job detail -->


        <!-- Submit -->
        <section class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit Job</h2>
              <p>Please review your information once more and press the below button to put your job online.</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round">Submit your job</button></p>

          </div>
        </section>
        <!-- END Submit -->


    </main>
    <!-- END Main container -->

    </div>
</div>