@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_store'=>'active'])
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12">
            <div class="d-flex mt-3 col-4">
                <form method="GET" action="{{ route('store.search') }}">
                    <div class="d-flex align-items-center">
                        <input type="text" name="query" class="form-control" placeholder="企業名を入力...." >
                        <button type="submit" class="btn btn-primary col-4">検索</button>
                    </div>
                </form>
            </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">企業一覧</h4>
                    <p class="card-description">

                    </p>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>名前</th>
                                <th>メール</th>
                                <th>アドレス</th>
                                <th>電話番号</th>
                                <th>アクセプト</th>
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
                            <div>{{$item->email}}</div>
                        </td>
                        <td>
                            <div>{{$item->address}}</div>
                        </td>
                        <td>
                            <div>{{$item->phone}}</div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                            @if ($item->is_accepted === 1)
                                <a class="btn btn-secondary">承認された</a>
                            @else
                                <a class="btn btn-success" href="{{route('store.accept', $item->id)}}">アクセプト</a>
                            @endif
                                <a class="btn btn-danger" href="{{route('store.destroy', $item->id)}}">削除</a>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
