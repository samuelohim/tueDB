@extends ('layouts.main')

@section ('content')

	<div class="container container-fluid">

			
	
		<h2>{{$user->name}}</h2>
		<h3>{{$user->email}}</h3>

	</div>	

@endsection