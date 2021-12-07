@if(count($errors) > 0)
<div class="col-sm-6 offset-sm-3 mb-3">
    <div class="card card-err">
    <div class="card-body">
        <h4 class="card-title">エラー</h4>
        <ul class="list-ticked">
            @foreach ($errors->all() as $err)
                <li>
                    <label class="badge badge-danger">{{$err}}</label>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
@endif