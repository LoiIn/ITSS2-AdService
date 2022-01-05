@if (Auth::check())
@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_product' => 'active'])
    @php
        if(isset($product)) {
            $formAction = route('product.update', $product->id);
            $cardTitle = '商品編集';
        } else {
            $formAction = route('product.store');
            $cardTitle = '商品追加';
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
                                            value="{{old('title', isset($product->title) ? $product->title : '')}}"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">種類</label>
                                    @foreach ($categories as $item)
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                @php
                                                    if(isset($product)){
                                                        $sameId = $product->categories()->get()->pluck('id')[0];
                                                    } else {
                                                        $sameId = 1;
                                                    }
                                                @endphp
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="categories[]" id="cate-{{$item->id}}" value="{{$item->id}}"
                                                        {{$item->id == $sameId ? "checked"  : ""}}
                                                    >
                                                    {{$item->title}}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 col-form-label">他の情報</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" rows="5" class="form-control" name="content" id="ad-content" placeholder="内容を入力して下さい。">
                                            {{old('content', isset($product->info) ? $product->info : '')}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">イメージ</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control mb-2" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
                                        @php
                                            $img = isset($product->image) ? ('product/' . $product->image) : 'not-found.png';
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
                                        <a name="" id="" class="btn btn-danger form-action-btn" href="{{route('product.index')}}" role="button">キャンセル</a>
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
@endif
