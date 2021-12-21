@extends('layouts.app')

@section('content')

<?php
?>


<div class="d-flex">
  <div class="w-75">
    @empty($production->images[0])
      <img width="200" src="{{ My_func::getNoImgPath() }}" alt="not found">
    @else
      <?php $productImgNum = 1 ?>
      @foreach($production->images as $productImg)
        <img width="200" src="{{$productImg->path}}" alt="画像 {{$productImgNum++}}枚目">
      @endforeach
    @endif

    <h2>{{$production->name}}</h2>
    <p>{{$production->desc}}</p>
    <p><strong>{{$production->price}}</strong>円</p>
  </div>
  
  <div class="w-25">
    @if($production->purchase_user_id !== null)
      @if($production->purchase_user_id == auth()->user()->id)
        <a href="{{ route('production.chat', $production) }}">取引ページへ</a>
      @else
        <div>もうすでに落札されています。</div>
      @endif
    @elseif($production->isNowUser())
      <a href="{{route('production.edit', $production)}}">編集する</a>
    @else
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        購入する
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              本当によろしいですか？
            </div>
            <div class="modal-footer">
              <form action="{{route('production.buy', $production)}}" method="POST">
                @csrf
                <button type="submit">購入する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
</div>

@endsection