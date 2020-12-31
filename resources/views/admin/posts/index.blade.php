@extends('admin.layout')

@section('header')
    <h1>

   All Post
    <small>List </small>
  </h1>

@stop


@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">List Post</h3>
    </div>
    <div class="box-body">
      <table id="postTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $post as $posts )
            <tr>
                <td>{{$posts->id }}</td>
                <td>{{$posts->title}}</td>
                <td>
                    <a href="" class="btn btn-info"><i class="fa fa-pencil mr-3"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
</div>

@endsection
