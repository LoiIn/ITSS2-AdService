@extends('common.layout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
         <div class="row mt-2">
            <div class="col-sm-12 text-center mt-3">
               @php
                  $prevPage = $agent === 'admin' ? 'admin.report.show' : 'report.show';
               @endphp
              <a name="" id="" class="btn btn-outline-info btn-rounded" href="{{route($prevPage, $ads->id)}}" role="button">
                <i class="mdi mdi-arrow-left-drop-circle"></i>
                戻る
              </a>
            </div>
          </div>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                           <h2 class="card-title text-center">
                              ページを更新するたびに、表示回数が1回増え、広告をクリックするとクリック数が1回増えます。
                           </h2>
                          
                           <a id="pannel-ads" href="{{ route('result', [$agent, $ads->id]) }}">
                              <div class="col-md-10 offset-md-1 mb-3 mb-lg-0">
                                 <div class="card test-bg  text-center">
                                    <div class="card-body pb-0">
                                       @php
                                          $image = isset($ads->advertisement->iamge) ? $ads->advertisement->image : 'product.jpg';
                                       @endphp
                                       <img src="{{ asset('asset/images/advertisement/' . $image) }}" alt="">  
                                       <h2 class="mt-3 text-white mb-3 font-weight-bold">
                                          {{$ads->advertisement->title}}
                                       </h2>
                                       <p>
                                          {{$ads->advertisement->content}}
                                       </p>
                                       <ul class="list-ticked">
                                          <li>ビュー数: {{$ads->views}}</li>
                                          <li>クリック数: {{$ads->clicks}}</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                </div>
                    
            </div>
        </div>
    </div>
@endsection