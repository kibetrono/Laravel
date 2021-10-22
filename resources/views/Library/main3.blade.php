<html>
<head>
<title>WEBGUIDE - Library</title>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<link type="text/css" rel="stylesheet" href="{{asset('css/LibraryMain.css')}}">
</head>
<style>

</style>
<body>
<!-- Main -->
<div style="" id="main" class="box">


<!-- Page (2 columns) -->

<!---Start ???????????---->
      <!-- Header -->
      <div style="border-top-left-radius:20px;border-top-right-radius:20px" id="header">
<!-- Logotype -->
<h2 id="logo"><a href="{{url('/library')}}" title="Web Guide"><img src="/imgsrc/webguide.jpg"></a></h2> 
<h1  style="padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000;text-align:center">WEB GUIDE LIBRARY</h1>
</div> <!-- /header -->
<div id="tabs" class="noprint"><!--tabs-->

<ul class="box" style="margin:0 10px; padding:0; list-style:none;">
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('/')}}" title="Homepage"><i class="fas fa-home"></i> Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('scienceshow')}}" title="Science Books"><i class="f"></i>Sciences<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('historicalsShow')}}" title="History Books"><i class=""></i>Historicals<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('showArts')}}" title="Arts"><i class=""></i>Arts<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('ShowNovel')}}" title="Novels"><i class=""></i>Novels<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="#" title="Poetry"><i class=""></i>Poetry<span class="tab-l"></span><span class="tab-r"></span></a></li>

<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class=""></i>Others<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="float:right;border-top-left-radius:20px">
<li style="float:right;margin-top:-5px;">
    <form style="" action="/search" method="POST" role="search">
    {{ csrf_field() }}
        <input  style="border-radius:20px" name="q" placeholder="Search for something..." required> 
            <button style="color:white" type="submit" class="btn btn-default">GO!</button>
</form>
</li>

</ul>
</div>
<hr class="noscreen" />          

<!-- Quick links -->
<!-- Search -->
</div><!--/tabs-->
<!---End ???????????---->
<div class="col-md-12"><!--middle-->
<p>WebGuide Library provides links that are categorised to minimize the tasks undertaken by users to search for their requests such as searching for books.Its interface consists of links and users can freely click on these links and they are redirected to different sites where various books are listed and the user can use the search box to search for his/her target. </p>
</div><!--/middle-->
<div>
@include('slideShow')
</div>

</body>
</html>