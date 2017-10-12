 @include('layouts/header')

 <style>
 
.login-block {

    margin-top:150px;
}

.nav-on-header .navbar {
    position: absolute;
    margin-top: 0px ! important;
    background-color: #38b0fe ! important;}

    @media (min-width: 1199px){

    	.service-card {
    padding: 2em;
    }

}

.service-card {
    border-top: 1px solid #d5d5d5;
    border-left: 1px solid #d5d5d5;
    box-shadow: 1px 2px 4px 0 rgba(0,0,0,.24);
    display: block;
    padding-top: 1em;
    padding-bottom: 1em;
}

#sp-profile .side-panel-wrapper .side-profile-picture {
    width: 100%;
    background-position: 50%;
    height: 260px;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #f1cfa4;
}

.icon-wrapper {
    width: 32px;
    margin-right: 8px;
    text-align: center;
}

.service-label {
    line-height: 36px;
    font-size: 1.4em;
}
</style>

 <div class="login-page" style ="background-color: #fff;">
      <div class="container">
       <div	class ="row" style ="padding:80px 0px 40px 0px;">
       		<div class ="col-sm-8" >

       			 <div class="bs-example">
    <div id="myCarousel" class="carousel slide" style ="" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('img/a.jpg')}}" style ="height:500px;width:750px;" alt="First Slide">
            </div>
            <div class="item">
                 <img src="{{asset('img/b.jpg')}}" style ="height:500px;;width:750px;"alt="First Slide">
            </div>
            <div class="item">
                  <img src="{{asset('img/c.jpg')}}" style ="height:500px;;width:750px;"alt="First Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->
    </div>
</div>
       			 <div class="header-detail">
          
         
          <hr>
          <h4   style="color:#000; font-weight: :600;">{{$user->name}}'s Services</h4> 
          <div	class ="service-card">
          	 <p class="lead">You will help Google build next-generation web applications like Gmail, Google Docs, Google Analytics, and the Google eBookstore and eBook readers. As a Front End Engineer at Google, you will specialize in building responsive and elegant web UIs with AJAX and similar technologies. You may design or work on frameworks for building scalable frontend applications. We are looking for engineers who are passionate about and have experience building leading-edge user experience, including dynamic consumer experiences.</p>
          </div>
         

          
        </div>


        <div class="col-xs-12 service-card">
    <div class="row">
        <div class="col-xs-2 service-icon"><img src="{{asset('img/d1.png')}}">
            <div class="ib-badge"><span class="icon-wrapper"></span></div>
        </div><span class="col-xs-9 col-lg-4 service-label slab pull-left">Doggy Daycare</span>
        <div class="col-xs-12 col-lg-6 m-b service-price">
            <div>
                <!-- react-text: 304 -->from
                <!-- /react-text -->
                <!-- react-text: 305 -->
                <!-- /react-text --><span class="price-amount"><!-- react-text: 307 -->$<!-- /react-text --><!-- react-text: 308 -->10<!-- /react-text --></span>
                <!-- react-text: 309 -->
                <!-- /react-text -->
                <!-- react-text: 310 -->/ half day
                <!-- /react-text -->
                <!-- react-text: 311 -->&nbsp;-&nbsp;
                <!-- /react-text --><span class="price-amount"><!-- react-text: 313 -->$<!-- /react-text --><!-- react-text: 314 -->15<!-- /react-text --></span>
                <!-- react-text: 315 -->
                <!-- /react-text -->
                <!-- react-text: 316 -->/ full day
                <!-- /react-text -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="services-element-wrapper">
            <h5 class="f-w-600 m-b col-xs-12"><!-- react-text: 320 -->Your dog goes to <!-- /react-text --><!-- react-text: 321 --> <!-- /react-text --><!-- react-text: 322 -->Liz<!-- /react-text --><!-- react-text: 323 -->ʼs in the daytime and returns home at night<!-- /react-text --></h5>
            <div class="col-md-4 services-element">
                <div class="icon-wrapper"><i<img src="{{asset('img/d2.png')}}"></div>
               
            </div>
            <div class="col-md-4 services-element">
                <div class="icon-wrapper"><img src="{{asset('img/d3.png')}}"></div>
                <!-- react-text: 333 -->Unlimited outdoor access
                <!-- /react-text -->
            </div>
            <div class="col-md-4 services-element">
                <div class="icon-wrapper"><img src="{{asset('img/d4.png')}}"></div>
               
            </div>
            <div class="col-xs-12 services-element check-in"><i><!-- react-text: 343 -->Open<!-- /react-text --><!-- react-text: 344 -->: <!-- /react-text --><!-- react-text: 345 -->06:00 AM<!-- /react-text --><!-- react-text: 346 --> <!-- /react-text --><!-- react-text: 347 -->to<!-- /react-text --><!-- react-text: 348 --> <!-- /react-text --><!-- react-text: 349 -->08:00 PM<!-- /react-text --><!-- react-text: 350 --> <!-- /react-text --></i></div>
            <div class="text-muted col-xs-12 services-element">
                
            </div>
        </div>
    </div>
</div>
       		</div>

       		<div class ="col-sm-4">
       			<div style ="border: 1px solid #d5d5d5;
    padding-bottom: 1em;">
       				
       			

    <div class="side-profile-picture"  style="background-image: url({{asset('img/gogo.jpg')}}); min-height:300px;padding:0px ! important;"> </div>
   <div style ="padding:15px;">
   	
   
    <h4  style="color:#000; font-weight: :600;">{{$user->name}}</h4>
       			<ul class="details cols-1">
            <li>
              <i class="fa fa-map-marker"></i>
              <span>Menlo Park, CA</span>
            </li>

            <li>
              <i class="fa fa-briefcase"></i>
              <span>Full time</span>
            </li>

            <li>
              <i class="fa fa-money"></i>
              <span>$90,000 - $110,000 / year</span>
            </li>

            
          </ul>

          <div class="button-group">
            <ul class="social-icons">
              <li class="title">Share on</li>
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
<br>	
            <div class="action-buttons text-center">
            
              <a class="btn btn-success" href="job-apply.html">Book As Sitter</a>
            </div>
          </div>

      </div>

      </div>

       		</div>
       </div>	
      </div>
    </div>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

      <!-- Job detail -->
      

    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>