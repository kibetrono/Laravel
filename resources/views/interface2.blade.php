<!DOCTYPE html PUBLIC "">
<html>
<head>
    <title>WEBGUIDE - Homepage</title>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/interface2.css')}}">
</head>
<body>
<!-- Header -->
<div id="header">
          <h2 id="logo"><a href="{{url('/')}}" title="Web Guide"><img src="/imgsrc/webguide.jpg"></a></h2> 
          <h1>WEB GUIDE SYSTEM</h1>
  </div> 
  <!-- /header -->
<div id="main" class="box"><!-- Main -->
<div id="Main_Top"><!-- Main_Top -->
<div id="tabs" class="noprint"><!--tabs-->
<ul class="box">
    <li><a href="{{url('/')}}" title="Homepage"><i class="fas fa-home"></i>Home</a></li>
    <li><a href="{{url('main')}}" title="WebGuide News"><i class="fas fa-newspaper"></i>News</a></li><!--main-->
     <li><a href="{{url('library')}}" title="Library tutorials"><i class="fas fa-book-reader"></i>Library</a></li><!--library-->
      <li><a href="{{url('sports')}}" title="Sports"><i class="far fa-whistle"></i>Sports</a></li><!--sports-->
      <li><a href="{{url('')}}" title="AboutUs"><i class="fas fa-information"></i>About</a></li>
      <li><a href="{{url('')}}" title="Get Help!!"><i class="fas fa-question-circle"></i>Help</a></li>
      <li style="color:#B5C4E3;padding:7px 15px;" class="accordion">More <i class="fa fa-caret-down"></i></li>
<h6 class="panel">
<li><a href="{{url('#')}}" title="Entertainment">Entertainment</a></li>
<li><a href="{{url('weather')}}" title="weather">Weather</a></li>
<li><a href="{{url('#')}}" title="Tv">Tv</a></li>
<li><a href="{{url('#')}}" title="Stories">Stories</a></li>
</h6>
      <li style="float:right;margin-top:-5px;">
    <form style="" action="/search" method="POST" role="search">
    {{ csrf_field() }}
        <input style="border-radius:20px" name="q" placeholder="Search for something..."> 
            <button style="color:white" type="submit" class="btn btn-default">GO!</button>
</form>
</li> 
</div> <!-- /tabs -->
</div><!-- /Main_Top -->
<div class="MainContent"><!--MainContent-->
<!-- Page (2 columns) -->
<div id="page" class="box">
    <div id="page-in" class="box">
        <div id="content"><!-- Content -->
    <div class="article"><!-- Article -->
        <h2>WebGuide System Information</h2>
    </div> <!-- /article -->
            <div>
            <p>Web Guide system offers an effective interface to its users to effectively and easily get their query responses in a simple, quicker and cheaper way.It provides a friendly user interface that require less typing commands by users for each of the page consists of links to various sites.</p>
            @include('slideGUI')
            </div>
        </div> <!-- /content -->
        <!-- Right column -->
<div id="col" class="noprint">
            <div id="col-in">
                <!-- Category -->
                <h3><i class="fa fa-user"></i> Admin Login</h3>
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

 <!-- Footer -->@include('footer') <!-- /footer -->

 <script src="{{asset('js/interface2.js')}}" type="text/javascript"></script>

</body>
</html>



