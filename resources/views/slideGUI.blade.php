<!Doctype html>
<html>
  <head>
    <title></title>
    <style>
     /* .content {
      max-width:800px;
      background: red;
      text-align:middle; 
      margin:auto; 
      }*/
      .middle {
      width:100%;
      height:200px;
      background-color: #eeeeee;
      margin:auto;
      background-image:url("/imgsrc/webguide.jpg");
      animation-name: slide;
      animation-duration:20s;
      animation-direction: normal;
      animation-timing-function: ease;
      animation-iteration-count: infinite;
      border-top-right-radius:20px;
      border-top-left-radius:20px;
      }
      @keyframes slide {
      0% {background-position:0 0;}
      16.66% {background-position:0 0;}
      33.32% {background-position:-800px 0;}
      49.98% {background-position:-800px 0;}
      66.64% {background-position:-1600px 0;}
      83.30% {background-position:-1600px 0;}
      100% {background-position:0 0;}
 
      }
      
    </style>
  </head>
  <body>
    <div class="middle"></div>
    <div class="content">
<p></p>
    </div>
  </body>
</html>