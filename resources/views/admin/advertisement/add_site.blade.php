@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_advertisement' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-success')
            @include('common.action-fail')
            <div class="row mt-2">
                <div class="col-md-6 offset-sm-3 grid-margin stretch-card">
                    <div class="card pt-3">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h4 class="card-title">サイトに広告を追加する</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form class="forms-sample" method="GET" action="{{ route('admin.advertisement.accept.sites.search', $id) }}">
                                  @csrf
                                  <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="text" name="query" class="form-control" placeholder="サイト名入力...." >
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
                        <div class="row mt-3">
                            <div class="col-md-10 offset-md-1">
                                <form class="forms-sample" method="POST" 
                                    action="{{ route('admin.advertisement.accept', $id) }}"
                                    enctype="multipart/form-data"
                                >
                                    @csrf
                                    @foreach ($data as $item)
                                        <div class="form-group row">
                                            <div class="form-check">
                                                <input type="checkbox" name="site[]" class="form-check-input" value="{{ $item->id }}">
                                                {{ $item->name }}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="form-group row text-center">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                承認
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection