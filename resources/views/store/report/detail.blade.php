@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_report' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card text-center">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">チャート</h4>
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 detail-area">
                <div class="card mb-2">
                  <div class="card-body">
                    <h4 class="card-title">製品名</h4>
                    <p class="card-text">{{$report->advertisement->product->title}}</p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <h4 class="card-title">広告</h4>
                    <p class="card-text">{{$report->advertisement->title}}</p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <h4 class="card-title">見た人の数</h4>
                    <p class="card-text" id="report-views">{{$report->views}}</p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <h4 class="card-title">クリックした人の数</h4>
                    <p class="card-text" id="report-clicks">{{$report->clicks}}</p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                      <h4 class="card-title">報告プラットホーム</h4>
                      <p>広告をテストするため、このリンクをクリックして下さい:</p>
                      <a href="{{ route('site.show', $report->site->id) }}" target="_blank">{{$report->site->name}}</a>
                  </div>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 text-center mt-3">
                <a name="" id="" class="btn btn-outline-secondary btn-rounded" href="{{route('report.index')}}" role="button">
                  <i class="mdi mdi-arrow-left-drop-circle"></i>
                  バック
                </a>
              </div>
            </div>
        </div>
    </div>
@endsection