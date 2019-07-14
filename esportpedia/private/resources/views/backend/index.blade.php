@extends('backend/template')

@section('head')
  <!-- DATA TABLE CSS -->
  <link href="{{ asset('private/assets/backend/css/table.css') }}" rel="stylesheet">

  <script type="text/javascript" src="{{ asset('private/assets/backend/js/jquery.js') }}"></script>    
  <script type="text/javascript" src="{{ asset('private/assets/backend/bootstrap/js/bootstrap.min.js') }}"></script>

  <script type="text/javascript" src="{{ asset('private/assets/backend/js/admin.js') }}"></script>


  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
      
    <!-- Google Fonts call. Font Used Open Sans -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- DataTables Initialization -->
  <script type="text/javascript" src="{{ asset('private/assets/backend/js/datatables/jquery.dataTables.js') }}"></script>
            <script type="text/javascript" charset="utf-8">
                $(document).ready(function () {
                    $('#dt1').dataTable();
                });

                
  </script>
<style>
h4{
    color:white;
}
</style>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

  



    
@endsection


@php
    use App\logs;
@endphp

  	<!-- NAVIGATION MENU -->

    <div  class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img style="height:30px;width:50px" src="{{ asset('private/resources/images/ac.jpg') }}" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('admin', []) }}"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="{{ url('admin/article', []) }}"><i class="icon-th icon-white"></i> Article</a></li>
              <li><a href="{{ url('admin/cat', []) }}"><i class="icon-lock icon-white"></i> Category</a></li>
              <li><a href="{{ url('logout', []) }}"><i class="icon-lock icon-white"></i> logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    @section('main')
    <div class="container">

            <!-- CONTENT -->
          <div class="row">
              <div class="col-sm-9">
              
      
              <h4 style="color:white;"><strong>Data Table Logs</strong></h4>
              <table class="display" id="dt1">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Action</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @php($data = logs::orderBy('id','desc')->get());
                @foreach ($data as $item)
                <tr class="odd gradeX">
                    <td class="center"> {{$item->id}}</td>
                  <td>{{$item->isi}}</td>
                  <td>{{$item->created_at->format('M d, Y')}}</td>
                </tr>
                @endforeach
              </tbody>
            </table><!--/END SECOND TABLE -->
          
          </div><!--/span12 -->
          @endsection
            </div><!-- /row -->
           </div> <!-- /container -->
              <br>	
      
            
                <br>
        <!-- FOOTER -->	
      
                    </div><!-- /row -->
                </div><!-- /container -->		
          </div><!-- /footerwrap -->
        
  
