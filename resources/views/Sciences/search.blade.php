<html>
<body style="background:lightblue">
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    
            @foreach($details as $user)
            <div class="row">
        <div class="col-md-6">
		<ul style="margin-top:30px" class="list_group">
        <a  href="{{  $user->site_link }}"><img style='border-radius:20px;max-width:100px' src="{{ $user->filename}}" >
			{{  $user->site_title }}</a><br>
            
            {{ substr($user->site_description,0,200)}} ...
          <br><cite style="float:left">{{date('M j, Y H:i', strtotime($user->updated_at))}} </cite>

		</ul>

        </div>

        </div>
          
            @endforeach
            @elseif(isset($message))
			<p>{{ $message }}</p>
    @endif


</div>

</body>
</html>