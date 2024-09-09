<?php
session_start();

if(!isset($_SESSION['email'])){
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <linkhref="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <?php include "partials/left_panel.php";?>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    
    <?php include "partials/head_panel.php";?>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <?php include "partials/right_panel.php";?>
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Forms</a>
          <span class="breadcrumb-item active">Form Layouts</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
        <div>
          <h4>Form Layouts</h4>
          <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Top Label Layout</h6>
          <p class="br-section-text">A form with a label on top of each form control.</p>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->

          <h6 class="br-section-label">Bordered Form Group Wrapper</h6>
          <p class="br-section-text">A bordered form group wrapper with a label on top of each form control.</p>

          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Mail address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St., San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label mg-b-0-force">Country: <span class="tx-danger">*</span></label>
                  <select id="select2-a" class="form-control" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA" selected>United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->

          <h6 class="br-section-label">Placeholder as Label</h6>
          <p class="br-section-text">A bordered form group wrapper but the label is in field of the form control.</p>

          <div class="form-layout form-layout-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-control" type="text" name="firstname" placeholder="Enter firstname (required)">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <input class="form-control" type="text" name="lastname" placeholder="Enter lastname (required)">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <input class="form-control" type="text" name="address" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <select id="select2-b" class="form-control" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->

          <div class="row mg-t-80">
            <div class="col-xl-6">
              <div class="form-layout form-layout-4">
                <h6 class="br-section-label">Left Label Alignment</h6>
                <p class="br-section-text">A basic form where labels are aligned in left.</p>
                <div class="row">
                  <label class="col-sm-4 form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter firstname">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter lastname">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter email address">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                  </div>
                </div>
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info">Submit Form</button>
                  <button class="btn btn-secondary">Cancel</button>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </div><!-- col-6 -->
            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
              <div class="form-layout form-layout-5">
                <h6 class="br-section-label">Right Label Alignment</h6>
                <p class="br-section-text">A basic form where labels are aligned in right.</p>
                <div class="row">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Firstname:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter firstname">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Lastname:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter lastname">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Email:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter email address">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Address:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                  </div>
                </div><!-- row -->
                <div class="row mg-t-30">
                  <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                      <button class="btn btn-info">Submit Form</button>
                      <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                  </div><!-- col-8 -->
                </div>
              </div><!-- form-layout -->
            </div><!-- col-6 -->
          </div><!-- row -->


          <h6 class="br-section-label">Bordered Left Label Alignment</h6>
          <p class="br-section-text">A basic form where labels are aligned in left with bordered wrapper.</p>

          <div class="form-layout form-layout-6">
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Firstname:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="fullname" placeholder="Enter your fullname">
              </div><!-- col-8 -->
            </div><!-- row -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Email Address:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="firstname" placeholder="Enter your email address">
              </div><!-- col-8 -->
            </div><!-- row -->
          </div><!-- form-layout -->


          <h6 class="br-section-label">Bordered Right Label Alignment</h6>
          <p class="br-section-text">A basic form where labels are aligned in left with bordered wrapper.</p>

          <div class="form-layout form-layout-7">
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Firstname:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="fullname" placeholder="Enter your fullname">
              </div><!-- col-8 -->
            </div><!-- row -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Email Address:
              </div><!-- col-4 -->
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="firstname" placeholder="Enter your email address">
              </div><!-- col-8 -->
            </div><!-- row -->
          </div><!-- form-layout -->

          <h6 class="br-section-label">Form Alignment</h6>
          <p class="br-section-text">An inline form that is centered align and right aligned.</p>

          <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
            <div class="d-md-flex pd-y-20 pd-md-y-0">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
              <button class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Sign In</button>
            </div>
          </div><!-- d-flex -->

          <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
            <div class="d-md-flex pd-y-20 pd-md-y-0">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
              <button class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Sign In</button>
            </div>
          </div><!-- d-flex -->

          <h6 class="br-section-label">Form In Card</h6>
          <p class="br-section-text">A form that is inside the card.</p>

          <div class="d-flex align-items-center justify-content-center bg-gray-300 ht-500 pd-x-20 pd-xs-x-0">
            <div class="card wd-350 shadow-base">
              <div class="card-body pd-x-20 pd-xs-40">
                <h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-15">Sign in to continue</h5>
                <p class="mg-b-30 tx-14">Don't have an account? <a href="">Create an account</a>, it only takes less than a minute.</p>

                <div class="form-group">
                  <input class="form-control" type="text" name="email" placeholder="Enter email address">
                </div><!-- form-group -->
                <div class="form-group">
                  <input class="form-control" type="text" name="email" placeholder="Enter password">
                </div><!-- form-group -->
                <button class="btn btn-info btn-block">Sign In</button>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- d-flex -->


          <h6 class="br-section-label">Form In Dropdown</h6>
          <p class="br-section-text">A form that is inside the dropdown menu.</p>

          <div class="dropdown show">
            <a href="#" class="tx-gray-800 d-inline-block">
              <div class="ht-45 pd-x-20 bd d-flex align-items-center justify-content-center">
                <span class="mg-r-5 tx-13 tx-medium">Sign In</span>
                <i class="fa fa-angle-down"></i>
              </div>
            </a>
            <div class="dropdown-menu bg-white pd-20 pd-xs-40 wd-xs-350 pos-static ft-none shadow-base show">
              <h6 class="tx-gray-800 tx-uppercase tx-bold">Sign In</h6>
              <p class="tx-gray-600 mg-b-30">Signin using your account credentials.</p>

              <div class="form-group">
                <input type="email" class="form-control pd-y-12" placeholder="Email">
              </div><!-- form-group -->

              <div class="form-group">
                <input type="password" class="form-control pd-y-12" placeholder="Password">
              </div><!-- form-group -->

              <div class="form-group"><a href="" class="tx-12">Forgot password?</a></div>

              <button class="btn btn-primary btn-block pd-y-10 mg-b-30">Sign In</button>

              <p class="tx-11 tx-uppercase tx-spacing-2">Or Sign In With</p>
              <a href="#" class="btn btn-primary btn-icon">
                <div><i class="fab fa-facebook"></i></div>
              </a>
              <a href="#" class="btn btn-info btn-icon mg-l-5">
                <div><i class="fab fa-twitter"></i></div>
              </a>
              <a href="#" class="btn btn-danger btn-icon mg-l-5">
                <div><i class="fa fa-google-plus"></i></div>
              </a>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->

          <h6 class="br-section-label">Form In Modal</h6>
          <p class="br-section-text">A form that is inside the modal box.</p>

          <div class="pd-y-50 bg-gray-700 mg-t-20">
            <div class="modal d-block pos-static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bd-0 rounded-0 wd-xs-350 wd-xl-auto mg-xl-x-25">
                  <div class="modal-body pd-0">
                    <div class="row flex-row-reverse no-gutters">
                      <div class="col-xl-6">
                        <div class="pd-30">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <div class="pd-xs-x-30 pd-y-10">
                            <h5 class="tx-xs-28 tx-inverse mg-b-5">Welcome back!</h5>
                            <p>Sign in to your account to continue</p>
                            <br>
                            <div class="form-group">
                              <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                            </div><!-- form-group -->
                            <div class="form-group mg-b-20">
                              <input type="email" name="password" class="form-control pd-y-12" placeholder="Enter your password">
                              <a href="" class="tx-12 d-block mg-t-10">Forgot password?</a>
                            </div><!-- form-group -->

                            <button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

                            <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="">Sign Up</a></div>
                          </div>
                        </div><!-- pd-20 -->
                      </div><!-- col-6 -->
                      <div class="col-xl-6 bg-primary">
                        <div class="pd-40">
                          <h4 class="tx-white mg-b-20"><span>[</span> bracket + <span>]</span></h4>
                          <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                          <p class="tx-white tx-13">
                            <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                            <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                          </p>
                        </div>
                      </div><!-- col-6 -->
                    </div><!-- row -->
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
          </div><!-- pd-y-50 -->
          <div class="pd-y-30 tx-center bg-dark">
            <a href="" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-2" data-toggle="modal" data-target="#modaldemo">View Live Demo</a>
          </div><!-- pd-y-30 -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
      <!-- footer -->
       <?php include "partials/footer.php";?>
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/moment/min/moment.min.js"></script>
    <script src="lib/peity/jquery.peity.min.js"></script>
    <script src="lib/rickshaw/vendor/d3.min.js"></script>
    <script src="lib/rickshaw/vendor/d3.layout.min.js"></script>
    <script src="lib/rickshaw/rickshaw.min.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="lib/echarts/echarts.min.js"></script>
    <script src="lib/select2/js/select2.full.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="lib/gmaps/gmaps.min.js"></script>

    <script src="js/bracket.js"></script>
    <script src="js/map.shiftworker.js"></script>
    <script src="js/ResizeSensor.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/dashboard.js"></script>
    
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
