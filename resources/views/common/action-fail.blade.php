@if(session('login-fail'))
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mess-tag-flash">
      <div class="alert alert-danger" role="alert">
        <strong>{{session('login-fail')}}</strong>
      </div>
    </div>
  </div>
@endif 

@if(session('action-fail'))
  <div class="row">
    <div class="col-sm-12 mess-tag-flash">
      <div class="alert alert-danger" role="alert">
        <strong>{{session('action-fail')}}</strong>
      </div>
    </div>
  </div>
@endif 