@extends('backend/template')

@section('head')
<style>
h4{
    color:white;
}
</style>
<script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

  
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



  	<!-- NAVIGATION MENU -->

    <div  class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/', []) }}"><img style="height:30px;width:50px" src="{{ asset('private/resources/images/ac.jpg') }}" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                    <li><a href="{{ url('admin', []) }}"><i class="icon-home icon-white"></i> Home</a></li>                            
                    <li><a href="{{ url('admin/cat', []) }}"><i class="icon-th icon-white"></i> Category</a></li>
                    <li><a href="{{ url('admin/article', []) }}"><i class="icon-lock icon-white"></i> Article</a></li>
              <li class="active"><a href="#"><i class="icon-user icon-white"></i> Update Article</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    @section('main')
    <div class="container">
            <div class="row">
      <!-- FIRST ROW OF BLOCKS -->     
                @php
                    use App\cat;
                @endphp
     
<div class="col-lg-9">


<!--main content start-->
<section id="main-content">
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
    <section class="wrapper site-min-height">
    <div>
        <h4><i class="fa fa-angle-right"></i> Judul Article</h4>
        <div class="row mt">
            <div class="col-sm-12">
                  <form action="{{ url('admin/article', [$items->id]) }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <input type="text" value="{{$items->judul}}" name="judul" class="form-control" placeholder="judul">
                    {{-- {{Form::text("judul",
                                old("judul") ? old("judul") : (!empty($user) ? $user->judul : null),
                                [
                                    "class" => "form-control",
                                    "placeholder" => "judul",
                                ])
                            }} --}}
                     @if ($errors->has('judul'))
                     <p class="text-danger">{{ $errors->first('judul') }}</p>
                 @endif
            </div>
        </div>      
    </div>
    <br>
    <div>
        <h4><i class="fa fa-angle-right"></i> Gambar Preview</h4>
        <div class="row mt">
            <div class="col-sm-4">
                <img style="width:200px; height:200px" src="{{ asset('private/resources/images'.'/'.$items->foto) }}" alt="">
                <input type="file" class="bnt btn-success" name="foto">
                    {{-- {{Form::file("foto",
                                [
                                    "class" => "btn btn-success"
                                ])
                            }} --}}
                    @if ($errors->has('foto'))
                    <p class="text-danger">{{ $errors->first('foto') }}</p>
                @endif
            </div>
        </div>      
    </div>
    <br>
    <div>
        <h4><i class="fa fa-angle-right"></i> Kategori</h4>
        <div class="row mt">
            <div class="col-lg-5">
                    <input list="category" value="{{$items->kategori}}" class="form-control" placeholder="double klik to show list" name="category">
                    <datalist id="category">
                            @php($data = cat::all())
                            @foreach ($data as $item)

                         <option value="{{$item->sub_kategori}}">
                                
                             @endforeach
                    </datalist>

{{--            
                    {{Form::select("category",[$data=>$data], null,
             [
                "class" => "form-control",
                "placeholder" => "Select Category."
             ])
}} --}}
@if ($errors->has('category'))
<p class="text-danger">{{ $errors->first('category') }}</p>
@endif
            </div>
        </div>      
    </div>
    <br>
    <div>
        <h4><i class="fa fa-angle-right"></i> Isi Article</h4>
        <div class="row mt">
            <div class="col-lg-12">
                    
                    {{-- {{Form::textarea("isiberita", old("isiberita") ? old("isiberita") : (!empty($user) ? $user->isiberita : null),
                    [

                    ])
                }} --}}
                <textarea name="isiberita">{!! $items->isi !!}</textarea>
                    <script>
                            CKEDITOR.replace( 'isiberita' );
                    </script>
                    @if ($errors->has('isiberita'))
                    <p class="text-danger">{{ $errors->first('isiberita') }}</p>
                @endif
            </div>
        </div>  
    </div>       
    <br>
    <div>
        <h4><i class="fa fa-angle-right"></i> preview</h4>
        <div class="row mt">
            <div class="col-lg-6">
{{--                     
                    {{Form::textarea("preview", old("preview") ? old("preview") : (!empty($user) ? $user->preview : null),
                    [
                        "class" => "form-control",
                        "placeholder" => "input manimal 151 character"
                    ])
                }} --}}
                <div class="form-group">
                <textarea  class="form-control" rows="5" name="preview" placeholder="input minimal 151 character">{{$items->preview}}</textarea>
                    
                    @if($errors->has('preview'))
                    <p class="text-danger">{{ $errors->first('preview') }}</p>
                </div>
                @endif
            </div>
        </div>  
    </div>       
    <br>
    <div>
        <div class="row mt">
            <div style="margin-left:10px;">
                   
                <input type="submit" class="btn btn-success">
                    {{-- {{Form::submit('Submit Form',
                    [
                        "class" => "btn btn-success"
                    ])
                }} --}}
            </div>
        </div>  
    </div>    
 
</form>
    {{-- {!! Form::close() !!}    --}}
    </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->  

</div>
<br>
@endsection
</div> <!-- /container -->
