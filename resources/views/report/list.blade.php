<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">レポート一覧</h4>
      <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form class="forms-sample" method="GET" action="">
              @csrf
              <div class="form-group row">
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="search">
                </div>
                <div class="col-sm-3">
                  <button type="submit" class="btn btn-primary">
                    検索
                  </button>
                </div>
              </div>              
            </form>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  広告
                </th>
                <th>
                  サイト
                </th>
                <th>
                  見た人の数
                </th>
                <th>
                  クリックした人の数
                </th>
                <th class="text-center">
                  アクション
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key=>$item)
                  
              @endforeach
              <tr>
                <td>
                  {{$key+1}}
                </td>
                <td>
                  {{$item->advertisement->title}}
                </td>
                <td>
                  {{$item->site->name}}
                </td>
                <td>
                  {{$item->clicks}}
                </td>
                <td>
                    {{$item->views}}
                </td>
                <td class="text-center">
                  <a name="" id="" class="btn btn-light" href="{{route('report.show', $item->id)}}" role="button">詳しく</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>