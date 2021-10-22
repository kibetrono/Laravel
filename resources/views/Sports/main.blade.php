<html>
<head>
<title>WEBGUIDE - Sports</title>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<link type="text/css" rel="stylesheet" href="{{asset('css/Sports/main.css')}}">

</head>

<body>
<!-- Main -->
<div style="" id="main" class="box">


<!-- Page (2 columns) -->

<!---Start ???????????---->
      <!-- Header -->
      <div style="border-top-right-radius:20px;border-top-left-radius:20px;" id="header">
<!-- Logotyp -->
<h2 id="logo"><a href="{{url('/sports')}}" title="Web Guide"><img src="/imgsrc/webguide.jpg"></a></h2> 
<h1  style="padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000;text-align:center">WEB GUIDE SPORTS</h1>
</div><!--header-->
<div id="tabs" class="noprint"><!--tabs-->
<ul style="">
<li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Football</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Rugby</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Athletics</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Basketball</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Netball</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Volleyball</a></li>
<li><a href="{{url('#')}}"><i class=""></i>Tennis</a></li>
<li style="color:#B5C4E3;padding:7px 15px; " class="accordion">More Sports<i class="fa fa-caret-down"></i></li>
<div class="panel">
<li style="margin:20px"><a href="{{url('#')}}">Formula 1</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Boxing</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Cricket</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Cycling</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Swimming</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Darts</a></li>
<li style="margin:20px"><a href="{{url('#')}}">Wrestling</a></li>

</div>

<li style="float:right;margin-top:-35px;">
    <form style="" action="/search" method="POST" role="search">
    {{ csrf_field() }}
        <input  style="border-radius:20px" name="q" placeholder="Search for something..." required> 
            <button style="color:white" type="submit" class="btn btn-default">GO!</button>
</form>
</li>

</ul>
</div>
<hr/>    
<!-- Quick links -->
<!-- Search -->
</div> <!-- /tabs -->
<!---End ???????????---->
<div class="row">
<div class="col-md-4">
<p>In the current technology and world, the internet is flooded with millions of data and information hence  improved techniques and systems has to be build in order to retrieve the correct information using minimum resources. Data and information retrieval in the current systems is time consuming and also involves a lot in term of resources required hence becomes expensive to many of the clients. Clients may fail  to meet the goals by using these systems since they are provided with numerous options to choose from hence can be a tiresome procedure to them.
The retrieval process becomes also a challenge to the illiterate individuals since in order to choose the correct and required option, one has to be at least knowledgeable enough to select from the provided options.</p></div>
<div class="col-md-8">
<p>In the current technology and world, the internet is flooded with millions of data and information hence  improved techniques and systems has to be build in order to retrieve the correct information using minimum resources. Data and information retrieval in the current systems is time consuming and also involves a lot in term of resources required hence becomes expensive to many of the clients. Clients may fail  to meet the goals by using these systems since they are provided with numerous options to choose from hence can be a tiresome procedure to them.
The retrieval process becomes also a challenge to the illiterate individuals since in order to choose the correct and required option, one has to be at least knowledgeable enough to select from the provided options. The web guide system is  very convenient in improving the existing system which have got more challenges in their tasks of handing back their responses to the clients.
The task of ensuring that users get satisfied with all their request using minimal and short procedure is a major goal and objective of these systems and it should always be rendered to the clients by designing them a quick and a user friendly systems.
The conventional approach of retrieving data and information using existing systems is at some point a tiresome process hence there is a call for convenient systems that isn’t time consuming and also be efficient to ensure clients spend a little to receive whatever they request.
Current systems have become unreliable for they do not render what the users expect as well as minimizing the scope of its users since it becomes a challenge for most individuals who failed or were unlucky to receive knowledge from schools. Systems have to be developed which solves or otherwise minimize these challenges and problems.</p>
</div>
<div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>