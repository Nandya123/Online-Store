@extends('layouts.app')

@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/baju2.jfif') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/baju3.jfif') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">

<img src="{{ asset('/img/baju4.jfif') }}" class="img-fluid rounded"> </div>
</div>
@endsection
