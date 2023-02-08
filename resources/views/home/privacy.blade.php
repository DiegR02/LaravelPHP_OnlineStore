@extends('layouts.app')
@section('title', '$viewData["title"]')
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <h2>1. Introduction</h2>
    <p class="lead">{{ $viewData["description"] }}</p>
    <h2>2. Identify purpuses</h2>
    <p class="lead">{{ $viewData["description_2"] }}</p>
    <h2>3. Consent</h2>
    <p class="lead">{{ $viewData["description_3"] }}</p>
    <h2>4. Openness</h2>
    <p class="lead">{{ $viewData["description_4"] }}</p>
  </div>
</div>


@endsection