<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <form class="forms-sample" method="GET" action="{{route('admin.advertisement.search') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-9">
                    <input type="text" name="query" value="{{$query??''}}" class="form-control" placeholder="広告タイトルや企業名などの情報入力...." >
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
            <h4 class="card-title">広告一覧</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>タイトル</th>
                        <th>企業</th>
                        <th>イメージ</th>
                        <th>開始日</th>
                        <th>終了日</th>
                        <th>内容</th>
                        <th class="text-center" width="200px">アクション</th>
                        </tr>
                    </thead>
                <tbody >
                @foreach($data as $key=>$item)
                <tr>
                <td>
                    <div>{{isset($data) ? (($data->currentPage()-1) * $data->perPage() + $key+1) : ($key + 1)}}</div>
                </td>
                <td>
                    <div>{{$item->title}}</div>
                </td>
                <td>
                    <div onmousemove="storeDetails(event, 'details',{{$item->store}})"
                        onmouseleave="hideDetail('details')">
                        {{$item->store?$item->store->name:''}}
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        @php
                            $url = $item->image != '' ? $item->image : 'product.jpg';
                        @endphp
                        <img src="{{asset('asset/images/advertisement/' . $url)}}" alt="image"/>
                        <div >
                            <div>{{$item->product?$item->product->title:''}}</div>
                            <p class="mb-0"><small>{{$item->product?$item->product->info:''}}</small></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div>{{$item->started_date}}</div>
                </td>
                <td>
                    <div>{{$item->ended_date}}</div>
                </td>
                <td>
                    <div>{{$item->content}}</div>
                </td>

                <td class="text-center">
                   <div class="d-flex align-item-center">
                        @if ($item->published_flag === 1)
                            <a class="btn btn-secondary admin-action-btn disabled">
                                <i class="mdi mdi-checkbox-marked-circle"></i>
                                承認済
                            </a>
                        @else
                            <a class="btn btn-success admin-action-btn" href="{{route('admin.advertisement.accept', $item->id)}}">
                                <i class="mdi mdi-note-plus"></i>
                                アクセプト
                            </a>
                        @endif
                        <a class="btn btn-danger admin-action-btn ml-2" href="{{route('admin.advertisement.destroy', $item->id)}}">
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