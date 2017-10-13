@include('layouts/header')
<style>
    .login-page {
    background-color: #e5e7ed;
}

.login-block{

  padding: 60px 0px;
}

.login-block h1 {
    font-size: 30px;
    margin-bottom: 20px;
    margin-top: 20px;
}

.nav-on-header .navbar {
    position: absolute;
    margin-top: 0px ! important;
    background-color: #DA4C33  ! important;
    margin-bottom: 50px;
}


  	
    	#mymap {
       
      		border:1px solid #cdcdcd;
      		width: 800px;
      		height:80vh;
    	}

      .item-block {
        margin-top: 0px;
    display: block;
    }

    .item-block header img {
    width: 124px;
    margin-right: 30px;
    float: left;
}
  	</style>


 <div class="login-page">
  <div class="login-block">
<div class="container-fluid">
  <div class ="row">
    <div class ="col-sm-12">
        <h1 style ="">Search Results</h1>

      
    </div>
    
  </div>
    <div class="row">
       
      <div class ="col-sm-6">
      
  <div id="mymap"></div>
      </div>

      <div class ="col-sm-6">
      @foreach($locations as $location)
        <div class ="row">
          
           <div class="col-xs-12">
              <a class="item-block" href="{{url('/profile/1')}}">
                <header>
                  <div style="background-image: url({{asset('img/profile.png')}})">
                    &nbsp;
                  </div>
                  <img src="{{asset('img/profile.png')}}" alt="">
                  <div class="hgroup">
                    <h4>{{$location->city}}</h4>
                    <h5>Google <span class="label label-success">Full-time</span></h5>
                  </div>
                  <time datetime="2016-03-10 20:00">34 min ago</time>
                </header>

               <!--  <div class="item-body">
                  <p>Summary Bio</p>
                </div> -->

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Can pick up / drop off </span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>R200 / night</span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span>3 walks a day</span>
                    </li>
                  </ul>
                </footer>
                @endforeach
                

                
              </a>
            </div>
        </div>


        
      </div>
  

  <script type="text/javascript">

    var locations = <?php print_r(json_encode($locations)) ?>;

    var mymap = new GMaps({
      el: '#mymap',
      lat: -26.270759,
      lng: 28.112268,
      zoom:10
    });

    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.city,
	      click: function(e) {
	        alert('This is '+value.city+', gujarat from India.');
	      }
	    });
   });

  </script>

</div>
</div>
</div>
</div>