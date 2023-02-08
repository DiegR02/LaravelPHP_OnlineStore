@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<!-- Popup -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <p style="text-align:center">This online store uses cookies to provide you with a personalized experience. For more information, please read our <a href="{{ route('home.privacy') }}">privacy policy</a></p>
    <div style="text-align:center">
      <button class="close-button">Aceptar</button>
    </div>
  </div>
</div>

<script>
  //Cookie comprobation
  window.onload = function() {
    if (document.cookie.replace(/(?:(?:^|.*;\s*)privacy_policy_accepted\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
      modal.style.display = "block";
    }
  }

  var modal = document.getElementById("myModal");
  var closeButton = document.querySelector('.close-button');
  
  //Cookie Accept
  closeButton.onclick = function() {
    document.cookie = "privacy_policy_accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    modal.style.display = "none";
  }
</script>

<!-- Carousell -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/image2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/image1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/image3.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<br>

<div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded">
  </div>
</div>

<br>
<br>
<br>

@endsection