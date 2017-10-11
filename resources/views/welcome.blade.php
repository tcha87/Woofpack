   @include('layouts/header')


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url({{asset('img/bg-banner1.jpg')}})">


      <div class="container">


        <div class="col-xs-12" id ="search">
          <br><br>
          <h2>Making Dog Ownership Simple</h2>
          <h5 class="font-alt">Find the most convenient & trusted dog care provider in your city.</h5>
          <br><br><br>
          <form class="header-job-search">

            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Job title, skills, or company">
            </div>
             <div class="input-location">
              <input type="text" class="form-control" placeholder="Area or Postcode in Pretoria">
            </div>
            

           

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Find Sitter</button>
              <a href="job-list-1.html">Advanced Job Search</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Services</span>
            <h2>Our Services</h2>
            <p>Find the ideal home for your dogʼs stay</p>
          </header>

          <div class="category-grid">
            <a href="job-list-1.html">
             <img src="{{asset('img/prize.png')}}" alt="">
              <h6>Connect with a Sitter</h6>
              <p>Enter your travel dates and search trusted sitters that will host your dog at their home. We recommend you message a few sitters before making a booking.</p>
            </a>

            <a href="job-list-2.html">
              <img src="{{asset('img/food.png')}}" alt="">
              <h6>Make a Booking</h6>
              <p>After you’ve contacted and found the perfect sitter, book and pay securely on the GoFetch platform.</p>
            </a>

            <a href="job-list-3.html">

            <img src="{{asset('img/kennel.png')}}" alt="">
              <h6>Enjoy Peace of Mind</h6>
              <p>You can have peace of mind when your dog stays with the sitter. Every booking and stay on GoFetch includes premium pet insurance, emergency support, and secure payment.</p>
            </a>

              
          </div>

        </div>
      </section>



 <section >
        <div class="container-fluid">

          <div class="row">
            <div class ="col-sm-8" >
           <div class="bs-example">
    <div id="myCarousel" class="carousel slide" style ="margin-left:45%;" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('img/a.jpg')}}" alt="First Slide">
            </div>
            <div class="item">
                 <img src="{{asset('img/b.jpg')}}" alt="First Slide">
            </div>
            <div class="item">
                  <img src="{{asset('img/c.jpg')}}" alt="First Slide">
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
</div>
        </div>
        <div class ="row"><div class="col-xs-12  landing-promo__cta-button text-center" style="margin-top: 50px;">
            <a href="#search" class="btn btn-lg btn-primary">Find Your Sitter</a>
        </div></div>

    </div>
      </section>
      


      

      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url({{asset('img/bg-facts.jpg')}})">
        <div class="container">
          <h2><strong>Subscribe</strong></h2>
          <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your email address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">GoFetch aims to make Dog Ownership simple. With GoFetch, dog parents can discover, book, and manage personalized care for their dogs, including Boarding, Doggy Daycare, House Sitting and Dog Walking.</p>
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
              
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
         
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
  <!--   <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script> -->

  </body>
    <!-- END Site footer -->
    </body>
</html>
