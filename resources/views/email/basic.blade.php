{{-- Boostrap --}}

</html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

<div class="container">
	<div class="card">
	  <div class="card-body">
	  	<h2 class="card-title text-danger">EMAIL</h2>
	    <p class="card-text"> Hello There {{ $name }} ! Your id is {{ $id }} </p>
	    <img src="{{ $message->embed($filePath) }}" style="max-width: 100%" />
	  </div>
	</div>
</div>

</html>