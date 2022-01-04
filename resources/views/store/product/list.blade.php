<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">商品一覧</h4>
      <div class="row">
        <div class="col-sm-6">
            <form class="forms-sample" method="GET"  action="{{ route('product.search') }}">
              <div class="form-group row">
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="{{$search??''}}" placeholder="製品名を入力...." name="search">
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
        <div class="col-sm-6 text-right mt-1">
          <a name="" id="" class="btn btn-success" href="{{route('product.create')}}" role="button">
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
                タイトル
              </th>
              <th>
                種類
              </th>
              <th>
                他の情報
              </th>
              <th class="text-center" width = "200px">
                アクション
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $key=>$item)
              <tr>
                <td>
                  {{isset($products) ? (($products->currentPage()-1) * $products->perPage() + $key+1) : ($key + 1)}}
                </td>
                <td class="py-1">
                  <img src="{{asset('asset/images/product/'.$item->image)}}" alt="image"/>
                </td>
                <td>
                  {{$item->title}}
                </td>
                <td>
                  {{$item->categories()->get()->pluck('title')[0]}}
                </td>
                <td>
                  {{$item->info}}
                </td>
                <td class="text-center">
                  <div class="d-flex align-item-center">
                    <a name="" id="" class="btn btn-light admin-action-btn" href="{{route('product.edit', $item->id)}}" role="button">
                      <i class="mdi mdi-grease-pencil"></i>
                       編集
                     </a>
                    <a class="btn btn-danger admin-action-btn ml-2" href="{{route('product.remove', $item->id)}}">
                        <i class="mdi mdi-delete-forever"></i>
                        削除
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$products->links()}}
      </div>
    </div>
  </div>
</div>
