<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arts</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body style="background:#90EE90">
    <div class="container">
    <div class="card-title">
                        <h1 style="border-top-right-radius:20px;border-top-left-radius:20px;text-align:center;background:#FFA500">Edit The Book's Details</h1><br/>

                        </div>
         
      <form style="background:#343a40;border-top-left-radius:25px;border-top-right-radius:25px;margin-top:10px;color:white" method="post" action="{{url('updateArts', array($art->id))}}" enctype="multipart/form-data">
        @csrf
        @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="SiteTitle">Site Title:</label>
            <input type="text" class="form-control" name="site_title" value="{{$art->site_title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="SiteLink">Site Link:</label>
            <input type="text" class="form-control" name="site_link" value="{{$art->site_link}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="SiteKeywords">Site Keywords:</label>
            <input type="text" class="form-control" name="site_keywords" value="{{$art->site_keywords}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="SiteDescription">Site Description:</label>
            <input type="text" class="form-control" name="site_description" value="{{$art->site_description}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Filename">Filename:</label>
            <input type="file" class="form-control" name="filename" value="{{$art->filename}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
          <button style="margin-left:20%" type="submit" class="btn btn-success"><a href="{{url('/home')}}">Home</a></button>
          </div>
          <div class="form-group col-md-4">
            <button style="margin-left:20%" type="submit" class="btn btn-success">Update</button>
          </div>
          <div class="col-md-4">
          <button style="margin-left:30%" type="submit" class="btn btn-success"><a href="{{url('/Arts')}}">Back</a></button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
