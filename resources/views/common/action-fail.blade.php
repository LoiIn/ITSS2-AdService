@if(session('login-fail'))
  <div class="row">
    <div class="col-sm-4 offset-sm-4">
      <div class="alert alert-danger" role="alert">
        <strong>{{session('login-fail')}}</strong>
      </div>
    </div>
  </div>
@endif 

@if(session('create-fail'))
  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-danger" role="alert">
        <strong>{{session('create-fail')}}</strong>
      </div>
    </div>
  </div>
@endif 