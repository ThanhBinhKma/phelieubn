@extends('dashboard.layout.master')
@section('content')
<div class="col main pt-5 mt-3">
  <div class="row my-4">
    <div class="col-lg-12 col-md-12">
      <div class="table-responsive">
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Create</a>
        <table class="table table-striped">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Tiêu đề</th>
              <th>Nội dung</th>
              <th>Hình ảnh</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post )
            <tr>
            <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td>
                <img src="{{asset('public/storage/profile/'. $post->img)}}" alt=""></td>
                <td> 
                  <a href="{{route('admin.post.edit', ['id' => $post->id])}}" class="btn btn-primary">Sửa</a>
                  <a href="{{route('admin.post.delete', ['id' => $post->id])}}" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            @endforeach
            

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/row-->

</div>
@endsection