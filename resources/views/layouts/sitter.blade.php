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
<style media="screen">
#map {
      height: 100%;
    }
</style>

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />
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

        <div class="pull-right user-login">
          <ul class="nav navbar-nav navbar-right">

                        @if (Auth::guest())

                            <li><a class="btn btn-next btn-fill btn-danger btn-wd" style ="color:#fff;" href="{{ route('sitter.register') }}">Not A Sitter ?</a></li>

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


      </div>
    </nav>

    @yield('content')

  </body>

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

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAHShDo_C4WnrDy7Ssqr5ZRn2DDolRGg8A&libraries=places"></script>
  <script>
      /* script */
      function initialize() {
          var latlng = new google.maps.LatLng( -26.195246, 28.034088);
          var map = new google.maps.Map(document.getElementById('map'), {
              center: latlng,
              zoom: 8
          });
          var marker = new google.maps.Marker({
              map: map,
              position: latlng,
              draggable: true,
              anchorPoint: new google.maps.Point(-26.195246, 28.034088)
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
                  map.setZoom(8);
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
                     google.maps.event.trigger(map, 'resize');
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

</div>
</body>


  </html>
