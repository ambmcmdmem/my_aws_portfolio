@extends('layouts.app')

@section('content')

@if(session()->has('success'))
  <div class="alert alert">
    {{session('success')}}
  </div>
@endif

<?php

$isEditPage = !empty($production->name);
$formRoute = $isEditPage ? route('production.update') : route('production.post');

?>

<form action="{{ $formRoute }}" method="POST" enctype="multipart/form-data">
  @csrf
  @if($isEditPage)
    @method('PUT')
  @endif
  <label>
    <div>名前</div>
    <input type="text" name="name" value="{{My_func::retFormInputVal($production, 'name')}}" required>
    @if($errors->get('name'))
    <ul>
      @foreach($errors->get('name') as $errorName)
        <li>{{$errorName}}</li>
      @endforeach
    </ul>
    @endif
  </label>
  <label>
    <div>画像</div>
    @unless(empty($production->images[0]->path))
      <div>
        <div>以前の画像</div>
        <img width="100" src="{{$production->images[0]->path}}" alt="以前の画像">
      </div>
    @endif
    <div>
      <input id="pathSelect" class="d-block" type="file" name="path">
      <img width="100" id="displayImg" src="" alt="">
    </div>
    @if($errors->get('path'))
    <ul>
      @foreach($errors->get('path') as $errorPath)
        <li>{{$errorPath}}</li>
      @endforeach
    </ul>
    @endif
  </label>
  <label>
    <div>値段</div>
    <input type="number" name="price" min="1" value="{{My_func::retFormInputVal($production, 'price')}}" required>
    @if($errors->get('price'))
    <ul>
      @foreach($errors->get('price') as $errorPrice)
        <li>{{$errorPrice}}</li>
      @endforeach
    </ul>
    @endif
  </label>
  <label>
    <div>説明文</div>
    <textarea name="desc" cols="30" rows="10">{{My_func::retFormInputVal($production, 'desc')}}</textarea>
  </label>
  <button type="submit">
    送信
  </button>
</form>
@endsection

@section('scripts')
<script src="{{ asset('js/common.js') }}" type="module"></script>
<script src="{{ asset('js/productions/production.js') }}"></script>
@endsection