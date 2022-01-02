@extends('common.layout')

@section('content')
<div class="profile-update-form" >
    @include('common.error')
    @include('common.action-success')
    @include('common.action-fail')
    <div class="col-md-8 offset-md-2 grid-margin stretch-card mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">プロフィール</h4>
                <form class="forms-sample" method="POST" action="{{ route('store.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @foreach($info as $key=>$value)
                        <div class="form-group row">
                            <label for="{{$key}}" class="col-sm-3 col-form-label d-flex justify-content-end">
                                <span class="font-weight-bold">{{$value['label']}}</span>
                            </label>
                            <div class="col-sm-9">
                                @if ($key == 'email')
                                    <input type="text" class="form-control" name="{{$key}}" id="{{$key}}" value="{{$value['value']}}" disabled>
                                @else
                                    <input type="text" class="form-control" name="{{$key}}" id="{{$key}}" value="{{$value['value']}}" >
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <div class="form-group row">
                        <label for="{{$key}}" class="col-sm-3 col-form-label d-flex justify-content-end">
                            <span class="font-weight-bold">{{isset($logo['label']) ? $logo['label'] : 'イメージ'}}</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control mb-2" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
                            @php
                                $img = isset($logo['value']) ? ('store/' . $logo['value']) : 'not-found.png';
                            @endphp
                            <span id="preview-image-before-upload">
                                <img 
                                    src="{{ asset('asset/images/' . $img) }}" 
                                    alt=""
                                    class="rounded"
                                >
                            </span>
                        </div>
                    </div>
                                
                    <div class="form-group row text-center">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary form-action-btn">保存</button>
                            <a href="{{route('store.profile.index')}}" class="btn btn-secondary form-action-btn">キャンセル</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection