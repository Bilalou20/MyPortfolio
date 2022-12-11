@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <main class="px-3">
    <h1>Cover your page.</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages.Here I will introduce myself in picture.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>
</div>
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{asset('/img/bilal1.jpeg')}}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{asset('/img/bilal2.jpeg')}}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{asset('/img/bilal3.jpeg')}}" class="img-fluid rounded">
</div>
</div>
@endsection