@extends('layouts.app')

@section('content')
<form action="" enctype="multipart/form-data">
  @csrf
  <input type="text" name="name">
  <input type="file" name="image">
  <input type="number" min="0">
  <button type="submit">
    送信
  </button>
</form>
@endsection