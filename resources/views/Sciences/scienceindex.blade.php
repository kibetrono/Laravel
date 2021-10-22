<?php?>
<html>
<head>
<title>Sciences</title>
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('css/scienceindex.css')}}">
</head>
    <body style="background-color:lightblue">
   <!-- Main -->
<div style="" id="main" class="box">
<!-- Main menu (tabs) -->
<div id="tabs" class="noprint">
<h3 class="noscreen">Navigation</h3>
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('main')}}"><i class="fas fa-newspaper"></i>News<span class="tab-l"></span><span class="tab-r"></span></a></li>
     <li><a href="{{url('library')}}"><i class="fas fa-book-reader"></i>Library<span class="tab-l"></span><span class="tab-r"></span></a></li>
      <li><a href="{{url('')}}">Sports<span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li><a href="{{url('')}}">More <i class="fa fa-caret-down"></i><span class="tab-l"></span><span class="tab-r"></span></a></li>
    <li style="float:right;margin-top:-5px;">
<form style="background-color:black;" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input  style="border-radius:20px;"type="text" class="form-control" name="q"
            placeholder="Search for books" required> <span class="input-group-btn">
            <button style="color:white;" type="submit" class="btn btn-default">
               Search
            </button>
        </span>
    </div>
</form>
    <span class="tab-l"></span><span class="tab-r"></span></li>
</ul>
<hr class="noscreen" />
</div> <!-- /tabs -->
<!-- Page (2 columns) -->
      <!-- Header -->
      <div style=" " id="header">
<!-- Logotyp -->
<!-- <h1 id="logo"><a href="" title=""><strong>JOB PORTAL</strong><span></span></a></h1> -->
<h1  style="margin-top:5px;padding-top:2%;color:#fff;text-shadow: 0px 0px 4px #000;text-align:center">WEB GUIDE SCIENCE BOOKS</h1>
</div>
<!-- Quick links -->
<!-- Search -->
</div> <!-- /header -->
<!---End ???????????---->
@if(Session::has('success'))
                                <div class="alert alert-danger">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
	@foreach($sciences as $science)
<div class="col-md-6">
		<ul style="margin-top:30px" class="list_group">
			<a href="{{$science->site_link}}"><img style='border-radius:20px;max-width:100px' src="{{ $science->filename}}" >
{{  $science->site_title }}</a><br>
            {{ substr($science->site_description,0,200)}} ...
            <ul class="nav nav-pills">
            @if(Auth::user()->_id=="5dc4469e01a49c4c245bc932")                 
                    <li role="presentation">
                    <a style="margin:10px" href="{{url('editScience', $science->id)}}" class="btn btn-warning"><span class="fas fa-edit"> Edit</span></a>
                    </li>
                    <li role="presentation">
                    <form style="margin:10px" action="{{url('deleteScience', $science->id)}}" method="post">
                             @csrf
                                 <input name="_method" type="hidden" value="DELETE">
                             <button class="btn btn-danger" type="submit" onclick="return  confirm('Are you sure you want to delete this book?') " ><span class="fa fa-trash"> Delete</span></button>
                         </form>
                    </li>
                    </ul>
                    <br><cite style="float:left">Posted on: {{date('M j, Y', strtotime($science->updated_at))}} </cite>
                    @endif
		</ul>
        </div>    
	@endforeach
{{$sciences->links()}}
</body>
</html>
