@extends('layouts.app')

@section('content')

<div>
  <img src="{{ $user->getAvatarPath() }}" alt="">
</div>

@endsection