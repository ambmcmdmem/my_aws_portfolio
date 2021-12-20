@extends('layouts.app')

@section('content')

@if(session()->has('success'))
  <div class="alert alert">
    {{session('success')}}
  </div>
@endif

<form action="{{ route('production.post') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <label>
    <div>名前</div>
    <input type="text" name="name" value="{{old('name')}}" required>
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
    <input type="file" name="path">
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
    <input type="number" name="price" min="1" value="{{old('price')}}" required>
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
    <textarea name="desc" cols="30" rows="10" value="{{old('desc')}}"></textarea>
  </label>
  <button type="submit">
    送信
  </button>
</form>
@endsection