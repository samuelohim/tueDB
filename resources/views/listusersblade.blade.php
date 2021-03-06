@extends ('layouts.main')

@section ('content')

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th><span class="glyphicon glyphicon-envelope"></span></th>
      <th>Created on</th>
      <th><span class="glyphicon glyphicon-cog"></span></th>
    </tr>
  </thead>

	@foreach ($users as $user)
	    <tr class="active">
	      <td>{{$user->id}}</td>
	      <td>
				<ul class="list-inline list-unstyled">
					<li> {{$user->name}} </li>
					<li>
						<form action="/syz/{{$user->id}}" method = 'GET'>
		     	  			{!! csrf_field() !!} 
			      			<button type = 'submit' class="btn btn-info">
			      				<span class="glyphicon glyphicon-zoom-in"></span>
			      				
			      			</button>
			      		</form>
	      			</li>
				</ul>
	      		
	      </td>
	      <td>{{$user->email}}</td>
	      <td>{{$user->created_at}}</td>
     	  <td>
			<ul class="list-inline list-unstyled">
				<li>
		     	  	<form action = '/syz/{{$user->id}}/edit' method = 'GET'>
		     	  		{!! csrf_field() !!}
		     	  		<button type = 'submit' class="btn btn-success">
		     	  			<span class="glyphicon glyphicon-wrench"></span>
		     	  		</button>
		     	  	</form>
				</li>
				<li>
		     	  	<form action = '/syz/{{$user->id}}' method = 'POST'>
		     	  		{!! csrf_field() !!}
		     	  		<input type = 'hidden' name = '_method' value = 'DELETE'>
		     	  		<button type = 'submit' class="btn btn-danger">
		     	  			<span class="glyphicon glyphicon-trash"></span>
		     	  		</button>
		     	  	</form>
     	  		</li>

			</ul>
     	  </td>
	    </tr>
	@endforeach

  <tbody> 
</table>

@endsection