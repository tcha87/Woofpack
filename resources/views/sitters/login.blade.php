@extends('layouts.sitter')

@section('content')
      <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                      {{Form::open(['route' => 'sitters.login'])}}
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


                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
          </div> <!-- row -->
      </div> <!--  big container -->
        </div>
@endsection
