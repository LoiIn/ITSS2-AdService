<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form class="forms-sample" method="GET" action="{{ route('admin.report.search') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-9">
                    <input type="text" name="query" class="form-control" placeholder="広告タイトルや企業名などの情報入力...." >
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
            <h4 class="card-title">レポート一覧</h4>
            <div class="pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>広告</th>
                        <th>企業名</th>
                        <th>サイト名</th>
                        <th>クリックの数</th>
                        <th>ビューの数</th>
                        <th class="text-center">アクション</th>
                        </tr>
                    </thead>
                <tbody >
                @foreach($data as $key=>$item)
                <tr>
                <td>
                    <div>{{$key+1}}</div>
                </td>
                <td>
                    <div>{{$item->advertisement->title}}</div>
                </td>
                <td>
                    <div>{{$item->advertisement->store->name}}</div>
                </td>
                <td>
                    <div>{{$item->site->name}}</div>
                </td>
                <td>
                    <div>{{$item->clicks}}</div>
                </td>
                <td>
                    <div>{{$item->views}}</div>
                </td>
                <td>
                    <div class="text-center">
                        <a class="btn btn-secondary" href="{{route('admin.report.show', $item->id)}}">詳しく</a>
                    </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <div class="row mt-2">
                    <div class="col-sm-2 offset-sm-5">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>