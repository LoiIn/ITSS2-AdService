@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_advertisement' => 'active'])
    @php
        if(isset($advertisement)) {
            $formAction = route('advertisement.update', $advertisement->id);
            $cardTitle = '広告編集';
        } else {
            $formAction = route('advertisement.store');
            $cardTitle = '広告追加';
        }                    
    @endphp
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-success')
            @include('common.action-fail')
    
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">{{$cardTitle}}</h4>
                        <div class="mt-4">
                            <form class="form-sample" method="POST" action="{{$formAction}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">タイトル</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" id="ad-title" placeholder="タイトルを入力して下さい。"
                                            value="{{old('title', isset($advertisement->title) ? $advertisement->title : '')}}"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">商品名</label>
                                    @foreach ($products as $item)
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                @php
                                                    if(isset($advertisement)){
                                                        $sameId = $advertisement->product->id;
                                                    } else {
                                                        $sameId = 0;
                                                    }
                                                @endphp
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="product_id" id="product-{{$item->id}}" value="{{$item->id}}"
                                                        {{$item->id == $sameId ? "checked"  : ""}}
                                                    >
                                                    {{$item->title}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="from-group row mb-4">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <label for="time" class="col-sm-4 col-form-label">開始日</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="started_date" id="ad-start-time" placeholder="始める時間を入力して下さい。"
                                                    value="{{old('started_date', isset($advertisement->started_date) ? $advertisement->started_date : '')}}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <label for="time" class="col-sm-4 col-form-label">終了日</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="ended_date" id="ad-end-time" placeholder="終わり時間を入力して下さい。"
                                                    value="{{old('ended_date', isset($advertisement->ended_date) ? $advertisement->ended_date : '')}}"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 col-form-label">内容</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" rows="10" class="form-control" name="content" id="ad-content" 
                                        placeholder="内容を入力して下さい。">{{old('content', isset($advertisement->content) ? $advertisement->content : '')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">イメージ</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control mb-2" accept="image/png, image/jpeg" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
                                        @php
                                            $img = isset($advertisement->image) ? ('advertisement/' . $advertisement->image) : 'not-found.png';
                                        @endphp
                                        <span id="preview-image-before-upload">
                                            <img 
                                                src="{{ asset('asset/images/' . $img) }}" 
                                                alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary form-action-btn mr-2">登録</button>
                                        <a name="" id="" class="btn btn-danger form-action-btn" href="{{route('advertisement.index')}}" role="button">キャンセル</a>
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