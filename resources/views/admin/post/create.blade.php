@extends('dashboard.layout.master')
@section('content')
<div class="col main pt-5 mt-3">
  <div class="row my-4">
    <div class="col-lg-12 col-md-12">
      <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tiêu đề</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Nhập tiêu đề">
            @if($errors->has('title'))
            <div class="error">{{$errors->first('title')}}</div>
            @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả</label>
          <input type="text" class="form-control"  name="description" id="exampleInputPassword1" placeholder="Nhập mô tả">
          @if($errors->has('description'))
            <div class="error">{{$errors->first('description')}}</div>
            @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Hình ảnh</label>
          <input type="file" class="form-control" name="file" id="exampleInputPassword1" placeholder="Password">
          @if($errors->has('title'))
            <div class="error">{{$errors->first('description')}}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Tạo mới</button>
      </form>
    </div>
  </div>
</div>
@endsection