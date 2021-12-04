<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">広告一覧</h4>
        <div class="row">
          <div class="col-sm-6">
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
          <div class="col-sm-6 text-right">
            <a name="" id="" class="btn btn-success" href="{{route('advertisement.create')}}" role="button">追加</a>
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
                    始める時間
                </th>
                <th>
                    終わり時間
                </th>
                <th>
                    様子
                </th>
                <th class="text-center" width = "18%">
                  アクション
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($advertisements as $key=>$item)
                <tr>
                  <td>
                    {{$key+1}}
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
                    <div class="row">
                      <div class="col-sm-6">
                        <a name="" id="" class="btn btn-light action-btn mr-2" href="{{route('advertisement.edit', $item->id)}}" role="button">編集</a>
                      </div>
                      <div class="col-sm-6">
                        <a href="">
                          <form action="{{route('advertisement.remove', $item->id)}}" method="post"  >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger action-btn" role="button">削除</button>
                          </form>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>