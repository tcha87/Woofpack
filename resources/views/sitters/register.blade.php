@extends('layouts.sitter')

@section('content')
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


                                            <input id="searchInput" class="form-control" style="width:100%;" type="text" placeholder="Enter a location">
                                            <div class="map" id="map" style="width: 100%; height: 300px;"></div>
                                            <div class="form_area">
                                                <input type="text" hidden name="location" id="location">
                                                <input type="text" hidden name="lat" id="lat">
                                                <input type="text" hidden name="lng" id="lng">
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

        @endsection
