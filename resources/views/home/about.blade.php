@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $viewData["description"] }}</p>
      <p class="lead">{{ $viewData["description_2"] }}</p>
      <p class="lead">{{ $viewData["description_3"] }}</p>
      <p class="lead">{{ $viewData["description_4"] }}</p>
      <p class="lead">>{{ $viewData["number"] }}</p>
      <p class="lead">>{{ $viewData["email"] }}</p>
      <p class="lead">>{{ $viewData["adress"] }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d370771.4111661792!2d-1.1952800599051279!3d37.653410058644255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63819baae4321b%3A0x7a6261663713684!2sCesur%20Murcia%20Audiovisual%20-%20Formaci%C3%B3n%20Profesional!5e0!3m2!1ses!2ses!4v1675415766191!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        <p>{{ $viewData["author"] }}</p>
    </div>
  </div>
</div>
@endsection