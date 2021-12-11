@if(session('login-success'))
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mess-tag-flash">
      <div class="alert alert-success" role="alert">
        <strong>{{session('login-success')}}</strong>
      </div>
    </div>
  </div>
@endif 

@if(session('action-success'))
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mess-tag-flash">
      <div class="alert alert-success" role="alert">
        <strong>{{session('action-success')}}</strong>
      </div>
    </div>
  </div>
@endif 

@if(session('no-data'))
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mess-tag-flash">
      <div class="alert alert-info" role="alert">
        <strong>{{session('no-data')}}</strong>
      </div>
    </div>
  </div>
@endif 