<html>
<body style="background:lightblue">
<div class="container">
    @if(isset($details))
    <p> The Search results for your query <b> {{ $query }} </b> are :</p>

            @foreach($details as $mysearch)

            <div class="row">
        <div class="col-md-6">
		<ul style="margin-top:30px" class="list_group">
        <a  href="{{  $mysearch->site_link }}"><img style='border-radius:20px;max-width:100px' src="{{ $mysearch->filename}}" >
			{{  $mysearch->site_title }}</a><br>
            {{ substr($mysearch->site_description,0,200)}} ...
          <br><cite style="float:left">{{date('M j, Y H:i', strtotime($mysearch->updated_at))}} </cite><br>
<hr>
		</ul>

        </div>

        </div>
            <!--<tr>
                <td><a href="{{$mysearch->site_link}}"> {{$mysearch->site_title}}</a></td>
               
            </tr>-->
            @endforeach
            @elseif(isset($message))
			<p>{{ $message }}</p>
                              
    @endif

</div>

</body>
</html>