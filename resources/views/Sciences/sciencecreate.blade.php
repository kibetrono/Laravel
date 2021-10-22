<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScienceBooks</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body style="background:#90EE90">
    <div class="container">
    
      <form style="background:#343a40;border-radius:25px;margin-top:10px" method="post" action="{{url('add')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <div class="card-title">
                        <h1 style="border-top-right-radius:20px;border-top-left-radius:20px;text-align:center;background:#FFA500">Inserting more sciences books...</h1><br/>

                        </div>                       
                    </div>


                    <div class="card-body">

                    <!-- print success message after file upload  -->
                    @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif

                            <div class="form-group row" {{ $errors->has('site_title') ? 'has-error' : '' }}>
                                            <label for="site_title" class="col-md-4 col-form-label text-md-right">SITE TITLE:</label>
                                            <div class="col-md-6">
                                                <input id="site_title" type="text" class="form-control" name="site_title" >
                                         <span class="text-danger"> {{ $errors->first('site_title') }}</span>

                                            </div>
                                        </div>

                                        <div class="form-group row" {{ $errors->has('site_link') ? 'has-error' : '' }}>
                                            <label for="site_link" class="col-md-4 col-form-label text-md-right">SITE LINK:</label>
                                            <div class="col-md-6">
                                                <input id="site_link" type="text" class="form-control" name="site_link" >
                                         <span class="text-danger"> {{ $errors->first('site_link') }}</span>

                                            </div>
                                        </div>


                                        <div class="form-group row" {{ $errors->has('site_keywords') ? 'has-error' : '' }}>
                                            <label for="site_keywords" class="col-md-4 col-form-label text-md-right">SITE KEYWORDS:</label>
                                            <div class="col-md-6">
                                                <input id="site_keywords" type="text" class="form-control" name="site_keywords" >
                                         <span class="text-danger"> {{ $errors->first('site_keywords') }}</span>

                                            </div>
                                        </div>

                                        <div class="form-group row" {{ $errors->has('site_description') ? 'has-error' : '' }}>
                                            <label for="site_description" class="col-md-4 col-form-label text-md-right">SITE DESCRIPTION:</label>
                                            <div class="col-md-6">
                                                <input id="site_description" type="text" class="form-control" name="site_description" >
                                         <span class="text-danger"> {{ $errors->first('site_description') }}</span>

                                            </div>
                                        </div>
                                        
                                      <div class="form-group row" {{$errors->has('filename') ? 'has-error' : ''}}><!--filename-->
                                    <label for="filename" class="col-md-4 col-form-label text-md-right">SITE IMAGE:</label>
                                    <div class="col-md-8">
                                    <input type="file" class="form-control" name="filename">
                                    <span class="text-danger"> {{$errors->first('filename')}} </span>
                                    </div>
                            </div><!--/filename-->
                                </div>
                             </div>
                                     
                        <div class="row">
                      <div class="col-md-4">
                      <button type="submit" class="btn btn-success"><a href="{{url('/')}}">Home</a></button>

                      </div>
                      <div class="col-md-4">
                      <button type="submit" class="btn btn-success"><a href="{{url('/home')}}">Back</a></button>

                      </div>
                          <div class="form-group col-md-4">
                       <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                           </div>
      </form>
   </div>
  </body>
</html>