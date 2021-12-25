<div class="col-md-8 offset-md-2 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">プロフィール</h4>
            <div class="row-lg-12">
                <div class="col-md-4 float-left d-flex justify-content-center">
                    <img class="rounded img-fluid" src="{{asset($logo?'asset/images/store/'.$logo:'')}}" alt="logo">
                </div>
                <div class="col-md-8 float-left">
                    @foreach($info as $key=>$value)
                        <div class="row mb-3">
                            <label class="col-sm-3 d-flex justify-content-end">
                                <span class="font-weight-bold">{{$key}}</span>
                            </label>
                            <div class="col-sm-9">{{$value}}</div>
                        </div>
                    @endforeach
                
                    <div class="row mb-3 d-flex justify-content-center">
                        <a href="{{route('store.profile.edit')}}" class="btn btn-primary">変更</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>