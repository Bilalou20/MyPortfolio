@extends('layouts.app')
@section('title',$viewData["title"])
@section('subtitle',$viewData["subtitle"])
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{$viewData["description"]}}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{$viewData["author"]}}</p>
</div>
</div>
</div>
<div class="d-grid">
  <a  href="img/cv bilal.pdf" button type="button" class="btn btn-primary btn-block">Telecharger mon CV</button></a>
</div>
@endsection
