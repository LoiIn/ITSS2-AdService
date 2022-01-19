<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">広告一覧</h4>
        <div class="row">
          <div class="col-sm-6">
              <form class="forms-sample" method="GET" action="{{route('advertisement.search')}}">
                <div class="form-group row">
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$search??''}}" placeholder="広告タイトル入力...." name="search">
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
          <div class="col-sm-6 text-right">
            <a name="" id="" class="btn btn-success" href="{{route('advertisement.create')}}" role="button">
              <i class="mdi mdi-plus-circle-outline"></i>
              追加
            </a>
          </div>
        </div>
        <div class="table-responsive mt-4">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  イメージ
                </th>
                <th>
                  商品名
                </th>
                <th>
                  タイトル
                </th>
                <th>
                    内容
                </th>
                <th>
                    開始日
                </th>
                <th>
                    終了日
                </th>
                <th>
                    状態
                </th>
                <th class="text-center" width = "200px">
                  アクション
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($advertisements as $key=>$item)
                <tr>
                  <td>
                    {{isset($advertisements) ? (($advertisements->currentPage()-1) * $advertisements->perPage() + $key+1) : ($key + 1)}}
                  </td>
                  <td class="py-1">
                    @php
                        $url = $item->image != '' ? $item->image : 'product.jpg';
                    @endphp
                    <img src="{{asset('asset/images/advertisement/' . $url)}}" alt="image"/>
                    </td>
                  <td>
                    {{$item->product->title}}
                  </td>
                  <td>
                    {{$item->title}}
                  </td>
                  <td>
                    {{$item->content}}
                  </td>
                  <td>
                    {{$item->started_date}}
                  </td>
                  <td>
                    {{$item->ended_date}}
                  </td>
                  <td>
                      @php
                        $status = $item->published_flag == 1 ? "承認済み" : "承認待ち";
                        $className =  $item->published_flag == 1 ? "success" : "danger";
                      @endphp
                    <label class="badge badge-{{$className}}">{{$status}}</label>
                  </td>
                  <td class="text-center">
                    <div class="d-flex align-item-center">
                      <a name="" id="" class="btn btn-light admin-action-btn" href="{{route('advertisement.edit', $item->id)}}" role="button">
                        <i class="mdi mdi-grease-pencil"></i>
                         編集
                       </a>
                      <a class="btn btn-danger admin-action-btn ml-2" href="{{route('advertisement.remove', $item->id)}}">
                          <i class="mdi mdi-delete-forever"></i>
                          削除
                      </a>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{$advertisements->links()}}
        </div>
      </div>
    </div>
  </div>
