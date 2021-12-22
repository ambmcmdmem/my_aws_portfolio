@extends('layouts.app')

@section('content')

<div>
  <div>
    <img src="{{ $user->getAvatarPath() }}" alt="">
    <h2>{{ $user->name }}</h2>
  </div>
  @if($user->productions())
    <ul class="d-flex overflow-auto">
      @foreach($user->productions as $production)
        <li style="width: 200px">
          <a href="{{ route('production.show', $production) }}">
            <img width="100" src="{{ $production->getFirstImgPath() }}" alt="">
            <h3>{{ $production->name }}</h3>
          </a>
        </li>
      @endforeach
    </ul>
  @else
    <p>まだ出品物はありません。</p>
  @endif
</div>

@endsection