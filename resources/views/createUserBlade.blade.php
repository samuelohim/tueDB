@extends ('layouts.main')

@section('content')

<form class="form-horizontal" action = '/syz' method = 'POST'>
  <fieldset>
    <legend>Create User</legend>
		{!!csrf_field()!!}
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="Name" class="form-control" name = 'name' id="inputName" placeholder="Name" '>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name = 'email' id="inputEmail" placeholder="Email" '>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name = 'password' id="inputPassword" placeholder="Password">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-warning">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

@endsection