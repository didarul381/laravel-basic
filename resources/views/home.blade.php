@extends('master')
@section('title')
Home page

@endsection

@section('content')

<!-- card start -->
<section class="container my-3">
<div class="row row-cols-1 row-cols-md-4 g-4">
@foreach($data as $value)
  <div class="col">
    <div class="card">
      <img src="{{$value['blog-img']}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$value['tilte']}}</h5>
        <p class="card-text">{{$value['desc']}}</p>
      </div>
    </div>
  </div>
  @endforeach

</div>
</section>
<!-- card end -->
@endsection