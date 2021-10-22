<html>
<head>
<title>WEBGUIDE - Library</title>
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<style>
body {border:0; margin:0; padding:0; background:#F2F5FE url("../design/bg.gif") 0 0 repeat-x; font:70%/160% "verdana",sans-serif; color:#192666; _text-align:center;}

h1, h2, h3, h4, h5 {border:0; margin:15px 0 10px 0; padding:0; font-weight:bold;}
h1 {font-size:260%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h2 {font-size:180%; line-height:100%; font-family:"georgia",serif; font-weight:normal;}
h3 {font-size:120%; line-height:100%; font-weight:bold;}
h4 {font-size:120%;}
h5 {font-size:100%;}
form {border:0; margin:0; padding:0;}
fieldset {border:1px solid #ccc; margin:15px 0; padding:10px;}
legend {margin-left:10px; font-size:100%; font-weight:bold; color:#008;}

.clear {clear:both;}
.box:after {content:"."; display:block; line-height:0px; font-size:0px; visibility:hidden; clear:both;}
.noscreen {display:none;}
#main {width:100%; margin:2px 0 auto; _text-align:left;}
/* Header */
#header {position:relative; width:100%; height:100px; margin-top:-15px; padding:0; background:#233C9B url("") 0 0 no-repeat; color:#FFF;}
/* Main menu (tabs) */
#tabs {
    background:#192666; margin:0px; padding:5px 0 0 0; _height:1px;
    }
    #tabs ul {margin:0 10px; padding:0; list-style:none;}
    #tabs ul li {margin:0 5px 0 0; padding:0; float:left;}
    #tabs ul li a {display:block; position:relative; padding:7px 15px; border:0; background:url("../design/tab_link.gif") 0 0 repeat-x; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;}
    #tabs ul li a:hover {color:black; }

    .col-sm-4{
        float:left;margin-left:2%;
    }
</style>
<body>
<!-- Main -->
<div style="" id="main" class="box">


<!-- Page (2 columns) -->

<!---Start ???????????---->
      <!-- Header -->
      <div style="border-top-left-radius:20px;border-top-right-radius:20px" id="header">
<!-- Logotyp -->
<!-- <h1 id="logo"><a href="" title=""><strong>JOB PORTAL</strong><span></span></a></h1> -->
<h1  style="padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000;text-align:center">WEB GUIDE LIBRARY</h1>
</div> <!-- /header -->
<div id="tabs" class="noprint"><!--tabs-->

<ul class="box" style="margin:0 10px; padding:0; list-style:none;">
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('/')}}"><i class="fas fa-home"></i> Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('scienceshow')}}"><i class="f"></i>Sciences<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href="{{url('historicalsShow')}}"><i class=""></i>Historicals<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class=""></i>Arts<span class="tab-l"></span><span class="tab-r"></span></a></li>
<li style="margin:0 5px 0 0; padding:0; float:left;"><a style="display:block; position:relative; padding:7px 15px; border:0; color:#B5C4E3; font-weight:bold; text-decoration:none; cursor:pointer;" href=""><i class=""></i>Novels<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
<div class="middle"><!--middle-->
<p>WebGuide Library provides links that are categorised to minimize the tasks undertaken by users to search for their requests such as searching for books.Its interface consists of links and users can freely click on these links and they are redirected to different sites where various books are listed and the user can use the search box to search for his/her target </p>
</div><!--/middle-->

    <div class="col-sm-4">
			<h3 style="color:green">title</h3>
			<img src="/imgsrc/books.png"width="200" height="200"/>
			<br/>
	</div>
    <div class="col-sm-4">
			<h3 style="color:green">title</h3>
			<img src="/imgsrc/book2.png"width="200" height="200"/>
			<br/>
	</div>
    <div class="col-sm-4">
			<h3 style="color:green">title</h3>
			<img src="/imgsrc/book3.png"width="200" height="200"/>
			<br/>
	</div>


</body>
</html>