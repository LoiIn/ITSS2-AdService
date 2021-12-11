<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form class="forms-sample" method="GET" action="{{ route('store.search') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-9">
                    <input type="text" name="query" class="form-control" placeholder="企業名入力...." >
                </div>
                <div class="col-sm-3 mt-1">
                  <button type="submit" class="btn btn-primary">
                    <i class="mdi mdi-flask-outline"></i>
                    検索
                  </button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">企業一覧</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>名前</th>
                        <th>ロゴ</th>
                        <th>メール</th>
                        <th>アドレス</th>
                        <th>電話番号</th>
                        <th class="text-center" width="200px">アクション</th>
                        </tr>
                    </thead>
                <tbody>
                @foreach($data as $key=>$item)
                <tr>
                <td>
                    <div>{{$key+1}}</div>
                </td>
                <td>
                    <div>{{$item->name}}</div>
                </td>
                <td>
                    <div>
                        <img src="{{asset('asset/images/store/' . $item->logo)}}" alt="">
                    </div>
                </td>
                <td>
                    <div>{{$item->email}}</div>
                </td>
                <td>
                    <div>{{$item->address}}</div>
                </td>
                <td>
                    <div>{{$item->phone}}</div>
                </td>

                <td class="text-center">
                    <div class="d-flex align-items-center">
                    @if ($item->is_accepted === 1)
                        <a class="btn btn-secondary admin-action-btn">
                            <i class="mdi mdi-checkbox-marked-circle"></i>
                            承認された
                        </a>
                    @else
                        <a class="btn btn-success admin-action-btn" href="{{route('store.accept', $item->id)}}">
                            <i class="mdi mdi-account-plus"></i>
                            アクセプト
                        </a>
                    @endif
                        <a class="ml-2 btn btn-danger admin-action-btn" href="{{route('store.destroy', $item->id)}}">
                            <i class="mdi mdi-delete-forever"></i>
                            削除
                        </a>
                    </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2 offset-sm-5">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>