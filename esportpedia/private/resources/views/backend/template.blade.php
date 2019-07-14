<!doctype html>
<html><head>
    <title>Esportpedia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="{{ asset('private/assets/backend/bootstrap/css/bootstrap.min.css') }}" />

    <link href="{{ asset('private/assets/backend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('private/assets/backend/css/font-style.css') }}" rel="stylesheet">
    <link href="{{ asset('private/assets/backend/css/flexslider.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('private/assets/backend/js/jquery.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('private/assets/backend/bootstrap/js/bootstrap.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('private/assets/backend/js/lineandbars.js') }}"></script>
    
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/dash-charts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/gauge.js') }}"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/jquery.noty.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topLeft.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topRight.js') }}"></script>
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/layouts/topCenter.js') }}"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="{{ asset('private/assets/backend/js/noty/themes/default.js') }}"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="{{ asset('private/assets/backend/s/jquery.flexslider.js') }}j" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('private/assets/backend/js/admin.js') }}"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @yield('head')
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ asset('private/assets/backend/js/datatables/jquery.dataTables.js') }}"></script>
 
   </head>  
    <body>
    
          
            @yield('main')
        
     
    
            @yield('sidebar')
            <div class="col-lg-3">

              <!-- USER PROFILE BLOCK -->
              
              <div style="margin-top:30%;" class="dash-unit">
                  <dtitle>User Profile</dtitle>
                  <hr>
                  <div class="thumbnail">
                      <img style="width:80px;height:80px;" src="{{ asset('private/resources/images/me.jpg') }}" alt="" class="img-circle">
                  </div><!-- /thumbnail -->
                  <h1>Pungky Apry W</h1>
                  <h3>Pemalang, Indonesia</h3>
                  <br>
                      <div class="info-user">
                          <span aria-hidden="true" class="li_user fs1"></span>
                          <span aria-hidden="true" class="li_settings fs1"></span>
                          <span aria-hidden="true" class="li_key fs1"></span>
                      </div>
                  </div>
                  <!--END USER PROFILE BLOCK -->
                  <!-- LOCAL TIME BLOCK -->
                  <div class="half-unit">
                      <dtitle>Current Date</dtitle>
                      
                      <hr>
                                
                        <div  style="top:20%;left:20%;position:relative;">  

                            <h2 style="font-family:monospace;"> {{ strtoupper(date('M d, Y'))}} </h2>
                            
                        </div>
                         
                  </div>      
                  <!-- END LOCAL TIME BLOCK -->      
    
                
                      </div> 
                  
                      <div id="footerwrap">
                        <footer class="clearfix"></footer>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-12 col-lg-12">
                            <p><img style="height:50px;width:150px" src="{{ asset('private/resources/images/ac.jpg') }}" alt=""></p>
                            <p>Framework Programming</p>
                            </div>
                
                          </div><!-- /row -->
                        </div><!-- /container -->		
                    </div><!-- /footerwrap -->
          
    
    
    </body>
    </html>