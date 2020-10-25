@extends('layouts.site')

@section('content')

<div class="container">
  <div class="row">
@if($list && sizeof($list) > 0)
@foreach($list as $k =>$v)


<div class="card d-inline-block margin_10" style="width: 18rem;">
  <img src="{{ $v->avatar }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $v->title }}</h5>
    <p class="card-text">{{ $v->content }}</p>
    <a href="{{ url('/article/').'/'.$v->id }}" class="btn btn-primary">نمایش</a>
  </div>
</div>

@endforeach
@else
<p class="alert aleert-warning d-block w-100 p-3 text-center">
مقاله ای وجو ندارد.
</p>

@endif
   </div>
</div>
@endsection