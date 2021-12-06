@extends('common.layout')

@section('content')
    @extends('common.admin_header')
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12">
            <div class="d-flex mt-3 col-4">
                <form method="GET" action="{{ route('admin.report.search') }}">
                    <div class="d-flex align-items-center">
                        <input type="text" name="query" class="form-control" placeholder="レポート名入力...." >
                        <button type="submit" class="btn btn-primary col-4">検索</button>
                    </div>
                </form>
            </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">レポート一覧</h4>
                    <p class="card-description">

                    </p>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>広告</th>
                                <th>サイト名</th>
                                <th>ビューの数</th>
                                <th>クリックの数</th>
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
                            <div>{{$item->advertisement->title}}</div>
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
                            <div class="d-flex align-items-center">
                                <a class="btn btn-secondary" href="{{route('admin.report.show', $item->id)}}">ディテール</a>
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
