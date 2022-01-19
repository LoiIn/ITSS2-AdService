@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_site' => 'active'])
    <div class="main-panel">
    <div class="content-wrapper">
        @include('common.error')
        @include('common.action-success')
        @include('common.action-fail')
        <div class="row justify-content-md-center">
            <div class="col-sm-6 text-center">
                <a class="btn btn-success " href="{{ route('site.create')}}"><i class="fas fa-plus"></i> Create new Site</a>            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <form class="forms-sample" method="GET" action="{{ route('admin.report.search') }}">
                          @csrf
                          <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="text" name="query" value="{{$query??''}}" class="form-control" placeholder="サイト名を入力してください" >
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
                        <h4 class="card-title">サイト一覧</h4>
                        <div class="pt-3">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>サイト名</th>
                                    <th>URL</th>
                                    <th>Desc</th>
                                    <th class="text-center">アクション</th>
                                </tr>
                                </thead>
                            <tbody >
                                @foreach ($sites as $site )
                                <tr>
                                    <td>{{  $site->id }}</td>
                                    <td>{{ $site->name }}</td>
                                    <td>{{ $site->url }}</td>
                                    <td>{{ $site->desc }}</td>
                                    <td width="15%" class="text-right">
                                        <div class="d-flex align-item-center">
                                            <form action="{{ route('site.destroy', $site->id) }}" method="POST" style="display: inline;"
                                                onsubmit="return confirm('Remove Team? Are you sure?');">
                                               @csrf
                                               @method("delete")
                                               <a href="{{ route('site.edit', $site->id) }}" class="btn btn-primary">編集</a>
                                               <button type="submit" class="btn  btn-danger">
                                                    <i class="mdi mdi-delete-forever"></i>
                                                    削除
                                                </button>
                                            </form>
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
        </div>
    </div>
</div>
@endsection
