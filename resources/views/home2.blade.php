@extends('layouts.app')
@section('content')
 <head>
<link rel="stylesheet" href="{{asset('css/home2.css')}}" type="text/css">
<link href="{{asset('css/appBlade.css')}}" rel="stylesheet" type="text/css">
</head>

<!--header-->
<div id="header">
<h1 id="logo"><img class="image" src="/imgsrc/webguide.jpg"></h1>
<h1 class="H1Title">WEB GUIDE SYSTEM</h1>
</div>
<!--/header-->

<!--tabs-->
<div class="tabs">
<ul class="box">
@if(Auth::user()->_id=="5dc4469e01a49c4c245bc932")
<li><a href="{{url('/')}}"><i class="fas fa-home">Home</i></a></li>
<li><a href="#"><i class="fas fa-newspaper">News</i></a>
<ul>
<li><a href="#">Local</a></li>
<li><a href="#">International</a></li>
<li><a href="">Politics</a></li>
<li><a href="">Bussiness</a></li>

</ul>
</li>

<li><a href="#"><i class="fas fa-book-reader">Library</i></a>
<ul>
<li><a href="#">Sciences</a>
<ul>
<li><a href="{{url('scienceadd')}}">Add</a></li>
<li><a href="{{url('science')}}">Update</a></li>
</ul>
</li>
<li><a href="#">Historical</a>
<ul>
<li><a href="{{url('addHistoricals')}}">Add</a></li>
<li><a href="{{url('historicals')}}">Update</a></li>
</ul>
</li>
<li><a href="#">Arts</a>
<ul>
<li><a href="{{url('addArts')}}">Add</a></li>
<li><a href="{{url('Arts')}}">Update</a></li>
</ul>
</li>
<li><a href="#">Novels</a>
<ul>
<li><a href="{{url('addNovel')}}">Add</a></li>
<li><a href="{{url('Novel')}}">Update</a></li>
</ul>
</li>

</ul>
</li>

<li><a href="#">Sports</a>
<ul>
<li><a href="#">Football</a></li>
<li><a href="#">Athletics</a></li>
<li><a href="#">Rugby</a></li>
<li><a href="#">Cricket</a></li>
<li><a href="#">Others</a>

<ul>
<li><a href="#">Netball</a></li>
<li><a href="#">Hockey</a></li>
<li><a href="#">Basketball</a></li>
<li><a href="#">Hockey</a></li>
<li><a href="#">Golf</a></li>
<li><a href="#">Cycling</a></li>

</ul>
</li>
</ul>
</li>
<li><a href="#"><i class="fas fa-phone">Contact</i></a></li>

</ul>
</div>
<!--/tabs-->
@else
@endif
<hr>
<div class="simple-ss"></div>
    <div class="content">

    </div>
  
@endsection