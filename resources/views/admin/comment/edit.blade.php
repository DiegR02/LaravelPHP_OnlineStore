@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Edit Comment
  </div>
  <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
      @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('admin.comment.update', ['id'=> $viewData['comment']->id]) }}"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Content:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="content" value="{{ $viewData['comment']->content }}" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary">Edit</button>
    </form>
  </div>
</div>
@endsection