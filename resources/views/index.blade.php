<!DOCTYPE html PUBLIC "">
<html>
<head>
    <title>WEBGUIDE - Homepage</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>

<!-- Main -->
<div style="" id="main" class="box">
<!-- Main_Top -->
<div id="Main_Top">
      <!-- Header -->
  <div style="border-top-left-radius: 20px;border-top-right-radius: 20px " id="header">
          <h1 id="logo"><a href="{{url('/')}}"><img style="margin:-35% 0% 0% -35%;border-radius:100px;max-width:100px;" src="/imgsrc/webguide.jpg"></a></h1> 
          <h1  style="text-align:center;padding-top:2%;color: #fff;text-shadow: 0px 0px 4px #000">WEB GUIDE SYSTEM</h1>
  </div> <!-- /header -->
<!-- Main menu (tabs) -->

<div id="tabs" class="noprint">
<ul class="box">
    <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home</a></li>
    <li><a href="{{url('main')}}"><i class="fas fa-newspaper"></i>News</a></li><!--main-->
     <li><a href="{{url('library')}}"><i class="fas fa-book-reader"></i>Library</a></li><!--library-->
      <li><a href="{{url('sports')}}"><i class="far fa-whistle"></i>Sports</a></li><!--sports-->
      <li><a href="{{url('')}}"><i class="fas fa-information"></i>About</a></li>
      <li><a href="{{url('')}}"><i class="fas fa-question-circle"></i>Help</a></li>
      <li style="color:#B5C4E3;padding:7px 15px; " class="accordion">More <i class="fa fa-caret-down"></i></li>
<h6 class="panel">
<li style="padding:5px;margin:;"><a href="{{url('')}}">Entertainment</a></li>
<li style="padding:5px;margin:;"><a href="{{url('weather')}}">Weather</a></li>
<li style="padding:5px;margin:;"><a href="{{url('')}}">Tv</a></li>
<li style="padding:5px;margin:;"><a href="{{url('')}}">Stories</a></li>
</h6>
      <li style="float:right;margin-top:-5px;">
    <form style="" action="/search" method="POST" role="search">
    {{ csrf_field() }}
        <input  style="border-radius:20px" name="q" placeholder="Search for something..."> 
            <button style="color:white" type="submit" class="btn btn-default">GO!</button>
</form>
</li>
</div> <!-- /tabs -->
</div><!-- /Main_Top -->
<div class="MainContent"><!--MainContent-->
<!-- Page (2 columns) -->
<div style="background:lightblue;width:100%" id="page" class="box">
    <div id="page-in" class="box">
        <!-- Content -->
        <div id="content"> 
         <!-- Article -->
            <div class="article">
                  <h2>WebGuide System Information</h2>
          </div> <!-- /article -->
            <div>
            <p>Web Guide system offers an effective interface to its users to effectively and quicky get their query responses in a simple, quicker and cheaper way.It provides a friendly user interface that require less typing commands by users for each of the page consists of links to various sites.</p>
            @include('slideGUI')
            </div>
        </div> <!-- /content -->
        <!-- Right column -->
<div id="col" class="noprint">
            <div id="col-in">
                <!-- Category -->
                <h3><i class="fa fa-user"></i>Admin Login</h3>
            <div class="login">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <table width="100%" border="0">
                    <tr>
                      <td><label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                      <input style="width:175px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </td></tr>
                  
                    <tr>
                      <td><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                      <input style="width:175px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror 
                  </td></tr>

                    <tr>
                    <td><input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
         <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                  </td></tr>
             
                    <tr>
                      <td><label>
                        <div>
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>   
                                <div > @if (Route::has('password.request'))
                                    <a  style="color:blue" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                                </div>
                      </label></td></tr>
                      </table>
      </form>

              </div>
              
              
          </div> <!-- /col-in -->
</div> <!-- /col -->
    </div> <!-- /page-in -->
    </div> <!-- /page -->
</div><!--/MainContent-->

</div> <!-- /main -->

 <!-- Footer -->
@include('footer')
 <!-- /footer -->
 <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    document.getElementById("Main_Top").style.padding = "0px";

  } else {
    document.getElementById("Main_Top").style.padding = "auto";
  }
}
</script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>

</body>
</html>



