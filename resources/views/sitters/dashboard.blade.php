@include('layouts/header')


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

              <h2><img style ="margin-right:40px;" src="{{asset('img/placeholder.png')}}" alt="">Location Details</h2>
              <p>Please review your information once more and press the below button to put your job online.</p>
            </header>


              <div id="mymap"></div>
            <p class="text-center"><button class="btn btn-success btn-xl btn-round">Update your profile</button></p>

          </div>
        </section>
        <!-- END Submit -->


    </main>
    <!-- END Main container -->

    </div>
</div>

<script type="text/javascript">

function initialize() {
    var latlng = new google.maps.LatLng({{ Auth::guard('sitter')->user()->lat }}, {{ Auth::guard('sitter')->user()->lng }});
    var myOptions = {
        zoom: 8,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("#mymap"),
            myOptions);
}
google.maps.event.addDomListener(window, "load", initialize);

</script>
