<?php?>
<html>
<head>
<title>Sciences</title>
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/sciencedisplay.css')}}">
</head>

    <body>

<!---Start ???????????---->
      <!-- Header -->

      <div style="height:80px;border-top-right-radius:20px;border-top-left-radius:20px;" id="header">
<!-- Logotyp -->
<h2 id="logo"><a href="{{url('/library')}}" title="Web Guide"><img src="/imgsrc/webguide.jpg"></a></h2> 
<h1  style="margin-top:5px;padding-top:2%;color:#fff;text-shadow: 0px 0px 4px #000;text-align:center;">WEB GUIDE SCIENCE BOOKS</h1>
<div id="tabs" class="noprint">

<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home</a></li>
    <li><a href="{{url('library')}}">Back</a></li>
    <li style="float:right;margin-top:-5px;">
    <form style="" action="/searchSciences" method="POST" role="search">
    {{ csrf_field() }}
        <input  style="border-radius:20px" name="q" placeholder="Search for something..." required> 
            <button style="color:white" type="submit" class="btn btn-default">GO!</button>
</form>
</li>

</ul>
<hr class="noscreen" />
</div> <!-- /tabs -->

<hr class="noscreen" />          

<!-- Quick links -->

<!-- Search -->
</div> <!-- /header -->
<!---End ???????????---->


<div class="content">

	@foreach($sciences as $science)

<div class="col-md-12">
		<ul style="margin-top:30px" class="list_group">
        <a  href="{{  $science->site_link }}"><img style='border-radius:20px;max-width:100px' src="{{ $science->filename}}" >
			{{  $science->site_title }}</a><br>
            
            {{ substr($science->site_description,0,200)}} ...
          <br><cite style="float:left">{{date('M j, Y', strtotime($science->updated_at))}} </cite>

		</ul>
      
        </div>

	@endforeach
{{$sciences->links()}}
</div>
</body>
</html>
