@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$viewData['product']->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
        </h5>
        <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
        <p class="card-text">
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
          <div class="row">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
              </div>
            </div>
            <div class="col-auto">
              <button class="btn btn-outline-success" type="submit">Add to cart</button>
            </div>
          </div>
        </form>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Coment section -->
<div class="card mb-3">
  <div class="card-header">Leave a Comment</div>
  <div class="card-body">
    <form method="POST" action="{{ route('comment.store', ['id' => $viewData['product']->getId()]) }}">
      @csrf
      <div class="form-group">
        <textarea class="form-control" name="content" rows="3"></textarea>
      </div>
      <br>
      <input type="hidden" value="{{$viewData['product']->getId()}}" name="product_id">
      <button type="submit" class="btn btn-outline-success">Submit</button>

    </form>
  </div>
</div>

<h3 class="text-center mb-5">Comments</h3>
  <div class="row">
    <div class="col-12">
      @if(count($viewData['product']->comments) > 0)
      @foreach($viewData['product']->comments as $comment)
      <div class="media my-4">
        <div class="media-body">
          <p class="font-weight-bold mb-1">{{ $comment->content }}</p>
          <p class="text-secondary">Commented by: {{ $comment->user->name }}</p>
        </div>
      </div>
      @endforeach
      @else
      <p class="text-center">There are no comments in this product.</p>
      @endif
    </div>
  </div>
</div>

@endsection