@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
  <div class="card-header">
    Manage Comments
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Content</th>
          <th scope="col">User</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["comment"] as $comment)
        <tr>
          <td>{{ $comment->id }}</td>
          <td>{{ $comment->content }}</td>
          <td>{{ $comment->user_id }}</td>
          <td>
            <a class="btn btn-primary" href="{{route('admin.comment.edit', ['id'=> $comment->id])}}">
              <i class="bi-pencil"></i>
            </a>
          </td>
          <td>
            <form action="{{ route('admin.comment.delete', $comment->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                <i class="bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      
    </table>
  </div>
</div>
@endsection