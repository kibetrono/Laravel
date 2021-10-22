<?php
?>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<style>

</style>
<body>

  <div style="padding-left:20px" class="column">
  <h4>About us</h4>
  <ul id="visit">
  <li><i class="fas fa-address-card"></i>Address:</li>
  <h6>+xx (0) xx-xxxx-xx</h6>
  <li>Have any question(s)?</li>
  <h6>kibetdavidro@gmail.com</h6>
  <h6><i class="fas fa-phone"></i>+254 728234794</h6> 
</ul>
  <!-- icons-->
  <p>&copy; 2020 Kibet:All Rights Reserved.</p>
</div>
  <div class="column">
  <h4>QUICK LINKS</h4>
  <ul>
  <li ><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('contactUs')}}">Contact Us</a></li>
  <li ><a href="{{url('#')}}">Resources</a></li>
    <li><a href="{{url('#')}}">Latest updates</a></li>
  <li><a href="{{url('#')}}">Location</a></li>
  <li><a href="{{url('#')}}">Terms and conditions</a></li>
  </ul>
  <p>&copy; WebGuide.com | Designed by Kibet David.</p>
</div>
  <div class="column">
  <h4>Contact Us</h4>
  <form  method="POST" action="{{url('sendemail/send')}}">
    @csrf
<input type="text" name="emailaddress" placeholder="Your email address" required>
<textarea style="resize:none;width:270px;height:60px;border-radius:10px;" name="textAreaMessage" placeholder="Message---" required></textarea>
<button style="margin:0% 0% 0% 52%;">Send</button>
</form>
<ul id="visit2">
  <li><a href="" title="Facebook"><i class="fab fa-facebook"></i></a></li>
  <li><a href="" title="Google"><i class="fab fa-google-plus-square"></i></a></li>
  <li><a href="" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
  <li><a href="" title="YouTube"><i class="fab fa-youtube"></i></a></li>
  <li><a href="" title="Instagram"><i class="fab fa-instagram"></i></a></li>
</ul>
  </div>
 

</body>
</html>