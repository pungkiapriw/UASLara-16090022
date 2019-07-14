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
    <script>
        var d,h,m,s,animate;
        
        function init(){
            d=new Date();
            h=d.getHours();
            m=d.getMinutes();
            s=d.getSeconds();
            clock();
        };
        
        function clock(){
            s++;
            if(s==60){
                s=0;
                m++;
                if(m==60){
                    m=0;
                    h++;
                    if(h==24){
                        h=0;
                    }
                }
            }
            $('sec',s);
            $('min',m);
            $('hr',h);
            animate=setTimeout(clock,1000);
        };
        
        function $(id,val){
            if(val<10){
                val='0'+val;
            }
            document.getElementById(id).innerHTML=val;
        };
        
        window.onload=init;
        </script>  
            
    @endsection
  @php
      use App\article;
  @endphp
@section('main')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif

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
                <li class="active"><a href="{{ url('admin/article', []) }}"><i class="icon-th icon-white"></i> Article</a></li>
                <li><a href="{{ url('admin/cat', []) }}"><i class="icon-lock icon-white"></i> Category</a></li>
              
  
              </ul>
            </div><!--/.nav-collapse -->
          </div>
      </div>

    <div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-9">
		

		<h4 style="color:white;"><strong>Data Table Article</strong><a style="position:relative;left:70%;" href="{{ url('admin/article/create', []) }}">New Article <i class="fa fa-plus"></i></a></h4>

		<table class="display" id="dt1">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Foto</th>
            <th>View</th>
            <th>Button</th>
          </tr>
        </thead>
        <tbody>
          @php($data = article::all()->where('deleted','=',0))
          @foreach ($data as $item)
          <tr class="odd gradeX">
            <td>{{$item->judul}}</td>
            <td>{{$item->kategori}}</td>
            <td>{{$item->foto}}</td>
            <td class="center"> {{$item->view}}</td>
            <td class="center"><a onclick="return confirm('Are you sure?')" style="width:80%;" href="{{ url('admin/article', [$item->id]) }}" class="btn btn-danger">Delete <i class="fa fa-trash"></i></a>
              <a style="width:80%;" class="btn btn-info" href="{{ url('admin/article'.'/'.$item->id.'/edit', []) }}">Edit <i class="fa fa-edit"></i></a></td>
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
  