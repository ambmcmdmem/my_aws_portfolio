@extends('layouts.app')

@section('content')

<a href="{{ route('production.show', $production) }}">
  <div>取引情報</div>
  @empty($production->images[0])
    <img width="200" src="{{ My_func::getNoImgPath() }}" alt="Not Found">
  @else
    <img width="200" src="{{ $production->images[0]->path }}" alt="{{ $production->name }} 画像">
  @endif
  <h2>{{ $production->name }}</h2>
  <p>{{ $production->desc }}</p>
  <p><strong>{{ $production->price }}</strong>円</p>
</a>

<div>
  <div>取引相手</div>
  <h2>{{ $production->user->name }}</h2>
</div>

@endsection