@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_site' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-success')
            @include('common.action-fail')
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title"> 新しいサイトを追加する
                        </h4>
                        <div class="mt-4">
                            <form action="{{ route('site.store')}}" method="POST">
                                @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">サイト名</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="site" name= "name" placeholder="サイト名を入力してください">
                                </div>
                              </div>
                                <div class="form-group row">
                                  <label for="url" class="col-sm-2 col-form-label">URL</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="url"name="url" placeholder="URLを入力してください">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="desc" class="col-sm-2 col-form-label">サイト説明</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="desc" name="desc" placeholder="サイト説明を入力してください">
                                    </div>
                                  </div>
                                  <div class="form-group row text-center">
                                      <div class="col-sm-12 text-center">
                                          <button type="submit" class="btn btn-primary form-action-btn mr-2">登録</button>
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
