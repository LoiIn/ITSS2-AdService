@extends('common.layout')

@section('content')
    @extends('common.admin_header')
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12">   
            <div class="d-flex mt-3 col-4 float-left">
                <form method="GET" action="{{ route('admin.advertisement.search') }}">
                    <div class="d-flex align-items-center">
                        <input type="text" name="query" class="form-control" placeholder="広告タイトル入力...." >
                        <button type="submit" class="btn btn-primary col-4">検索</button>
                    </div>
                </form>
            </div>
            <div class="d-flex mt-3 col-4 float-left">
                <form method="GET" action="{{ route('admin.advertisement.search') }}">
                    <div class="d-flex align-items-center">
                        <input type="text" name="company" class="form-control" placeholder="企業名入力...." >
                        <button type="submit" class="btn btn-primary col-4">検索</button>
                    </div>
                </form>
            </div>
       
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">広告一覧</h4>
                    <p class="card-description">

                    </p>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>タイトル</th>
                                <th>企業</th>
                                <th>イメジ</th>
                                <th>スタートデート</th>
                                <th>エンドデート</th>
                                <th>内容</th>
                                <th>アクセプト</th>
                                </tr>
                            </thead>
                        <tbody >
                        @foreach($data as $key=>$item)
                        <tr>
                        <td>
                            <div>{{$key+1}}</div>
                        </td>
                        <td>
                            <div>{{$item->title??''}}</div>
                        </td>
                        <td>
                            <div>
                                {{$item->store->name??''}}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span>
                                    <img src="{{$item->product?$item->product->image:''}}"
                                        class="img-fluid rounded avatar-50" title="" alt="image">
                                </span>
                                <div >
                                    <div>{{$item->product->title??''}}</div>
                                    <p class="mb-0"><small>{{$item->product->info??''}}</small></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>{{$item->started_date??''}}</div>
                        </td>
                        <td>
                            <div>{{$item->ended_date??''}}</div>
                        </td>
                        <td>
                            <div>{{$item->content??''}}</div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                @if ($item->published_flag === 1)
                                    <a class="btn btn-secondary disabled">承認された</a>
                                @else
                                    <a class="btn btn-success" href="{{route('admin.advertisement.accept', $item->id)}}">アクセプト</a>
                                @endif
                                <a class="btn btn-danger" href="{{route('admin.advertisement.destroy', $item->id)}}">削除</a>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-2">{{$data->links()}}</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

