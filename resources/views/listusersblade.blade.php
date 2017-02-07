@extends ('layouts.main')

@section ('content')

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th><span class="glyphicon glyphicon-envelope"></span></th>
      <th>Created on</th>
      <th><span class="glyphicon glyphicon-wrench"></span></th>
    </tr>
  </thead>

	@foreach ($users as $user)
	    <tr class="active">
	      <td>{{$user->id}}</td>
	      <td>{{$user->name}}
	      		<form action="/syz/{{$user->id}}" method = 'POST'>
     	  		{!! csrf_field() !!}
	      			<input type = 'hidden' name = '_method' value = 'HEAD'>
	      			<button type = 'submit' class="btn btn-info">
	      				<span class="glyphicon glyphicon-zoom-in"></span>
	      				
	      			</button>
	      		</form>
	      </td>
	      <td>{{$user->email}}</td>
	      <td>{{$user->created_at}}</td>
     	  <td>

     	  	<form action = '/syz/{{$user->id}}' method = 'POST'>
     	  		{!! csrf_field() !!}
     	  		<input type = 'hidden' name = '_method' value = 'DELETE'>
     	  		<button type = 'submit' class="btn btn-danger">
     	  			<span class="glyphicon glyphicon-trash"></span>
     	  		</button>
     	  	</form>
     	  </td>
	    </tr>
	@endforeach

  <tbody> 
</table>

@endsection