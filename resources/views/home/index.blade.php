@extends('master.index')

@section('content')
<div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://frv.edu.vn/wp-content/uploads/emi-la-ai-3.jpg" alt="First slide">
      </div>
     
    </div>
  </div>

  <div class="section-intro row mg-30 mg-30">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <img src="https://gamek.mediacdn.vn/133514250583805952/2020/5/6/-15887585895041819860279.jpg" class="img-intro" alt="">
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <p class="fs-30">Giới thiệu</p>
      <p class="fs-40 color-or">Phế  liệu Bắc Nam</p>
      <p>Với 10 năm kinh nghiệm trong ngành thu mua phế liệu, Phế  liệu Bắc Nam luôn đem lại sự hài lòng của khách
        hàng. Chúng tôi cam kết cung cập dịch vụ thu mua chuyên nghiệp với mức giá cao nhất thị trường. Nhân viên tư vẫn
        và hỗ trợ tận nơi, xe chuyên chở nhanh gọn, chuyên nghiệp.</p>
    </div>
  </div>

  <section class="section-big main-color mg-30">
    <div class="container">

      <div class="row">
        <div class="col-md-12 pb-20 text-center">
          <h2 class="section-title mb-10"><span> Các dịch vụ chính
            </span></h2>
          <p class="section-sub-title">
            Chúng tôi cung cấp các dịch vụ cho khách hàng
          </p>
          <div class="exp-separator center-separator">
            <div class="exp-separator-inner">
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <ul class="i-list medium">
            <li class="i-list-item">
              <div class="icon"> <i class="fa fa-desktop"></i> </div>

              <div class="icon-content">
                <h3 class="title color-or">Thu mua phế liệu</h3>
                <p class="sub-title">
                  Thu mua phế liệu Bắc Nam nhận thu mua tất cả những loại phế liệu trên thị trường hiện này như: đồng, nhôm, inox, kẽm, sắt, phế liệu công trình, phế liệu vải……
                </p>
              </div>
              <div class="iconlist-timeline"></div>
            </li>
           
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="i-list medium">
            <li class="i-list-item">
              <div class="icon"> <i class="fa fa-diamond"></i> </div>
              <div class="icon-content">
                <h3 class="title color-or">Phá dỡ công trình</h3>
                <p class="sub-title">
                  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                  consequat vitae, eleifend Aliquam lorem ante, dapibus in.
                </p>
              </div>
              <div class="iconlist-timeline"></div>
            </li>
            
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="i-list medium">
            <li class="i-list-item">
              <div class="icon"> <i class="fa fa-codepen"></i> </div>
              <div class="icon-content">
                <h3 class="title color-or">Xử lý chất thải</h3>
                <p class="sub-title">
                  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                  consequat vitae, eleifend ac, enim. Aliquam lorem ante.
                </p>
              </div>
              <div class="iconlist-timeline"></div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section-big main-color mg-30">
    <div class="container">

      <div class="row">
        <div class="col-md-12 pb-20 text-center">
          <h2 class="section-title mb-10"><span> Tin tức
            </span></h2>
          <p class="section-sub-title">
            Chúng tôi cung cấp các dịch vụ cho khách hàng
          </p>
          <div class="exp-separator center-separator">
            <div class="exp-separator-inner">
            </div>
          </div>

        </div>
      </div>

      <div class="row">
      @foreach ($posts as $post )
      <div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-10">
        <div class="card card-image post-col"
          style="background-image: url({{asset($post->img)}});">
          <!-- Content -->
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div class="w-100">
              <h3 class="card-title pt-2"><strong>{{$post->title}}</strong></h3>
              <p>{{$post->description}}</p>
              <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>
@endsection

@section('css')
<style>

  body {
    margin-top: 20px;
  }

  .img-intro {
    max-width: 100%;
  }

  /* --------------------------------------------
    ICON LIST
-------------------------------------------- */

  ul.i-list {
    padding-left: 0;
    list-style: none;
  }

  ul.i-list .list-title {
    display: inline-block;
    position: absolute;
  }

  ul.i-list li {
    padding: 2px 0px;
  }

  ul.i-list i.fa {
    margin-right: 7px;
  }

  ul.i-list .list-item {
    margin-top: 3px;
    display: inline-block;
  }

  ul.i-list.filled i.fa {
    color: white;
    font-size: 9px;
    padding: 5px;
    border-radius: 50%;
  }

  ul.e-icon-list.filled li {
    padding: 2px 0px;
    line-height: 24px;
  }

  ul.i-list.underline li {
    padding: 6px 0px;
    border-bottom: 1px solid #eee;
  }

  ul.i-list.medium li {
    padding-bottom: 25px;
    position: relative;
  }

  ul.i-list.medium .icon {
    margin-right: 25px;
    color: white;
    font-size: 25px;
    text-align: center;
    line-height: 68px;
    width: 68px;
    height: 68px;
    border-radius: 50%;
    box-shadow: 0 5px 16px rgba(0, 0, 0, .28);
    position: relative;
    z-index: 1;
    /*background-image: url(../img/crease.svg) !important;
   -moz-background-size: 100% 100% !important;
   background-size: 100% 100% !important;
   background-position: center center !important;*/
  }

  ul.i-list.medium .icon i.fa {
    margin: 0;
  }

  ul.i-list.medium.bordered .icon {
    background: white;
    color: inherit;
    border: 2px solid #8fc135;
    font-size: 26px;
    color: #8fc135;
    position: relative;
    z-index: 1;
    box-shadow: 0 8px 22px rgba(0, 0, 0, .28);
  }

  ul.i-list.medium .list-item {
    text-transform: uppercase;
  }

  ul.i-list.large .icon {
    margin-right: 30px;
    background: #d0d0d0;
    color: white;
    font-size: 30px;
    text-align: center;
    line-height: 80px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    box-shadow: 0 8px 22px rgba(0, 0, 0, .28);
  }

  ul.i-list.large .icon i.fa {
    margin: 0;
  }

  ul.i-list.large.bordered .icon {
    background: inherit;
    color: inherit;
    border: 2px solid #8fc135;
    font-size: 30px;
    color: #8fc135;
  }

  ul.i-list.large .list-item {
    text-transform: uppercase;
  }

  ul.i-list .icon {
    float: left;
  }

  ul.i-list.right {
    text-align: right;
  }

  ul.i-list.right .icon {
    float: right;
  }

  ul.i-list.right .icon {
    float: right;
    margin-right: 0;
    margin-left: 25px;
  }

  ul.i-list.large.right .icon {
    float: right;
    margin-right: 0;
    margin-left: 30px;
  }

  ul.i-list.large li {
    margin-bottom: 25px;
  }

  ul.i-list .icon-content {
    overflow: hidden;
  }

  ul.i-list .icon-content .title {
    margin-top: 5px;
    margin-bottom: 10px;
  }

  .left-line .iconlist-timeline {
    left: auto;
    right: 35px;
  }

  .iconlist-timeline {
    position: absolute;
    top: 1%;
    left: 32px;
    width: 1px;
    height: 99%;
    border-right-width: 1px;
    border-right-style: dashed;
    height: 100%;
    border-color: #ccc;
  }

  .icon {
    background-color: #c19412;
  }

  separator,
  .testimonial-two,
  .exp-separator-inner {
    border-color: #c19412;
  }

  .exp-separator {
    border-color: #c19412;
    border-top-width: 2px;
    margin-top: 10px;
    margin-bottom: 2px;
    width: 100%;
    max-width: 55px;
    border-top-style: solid;
    height: auto;
    clear: both;
    position: relative;
    z-index: 11;
  }

  .section-sub-title {
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 400;
    font-family: Poppins;
  }

  .section-title {
    font-size: 32px;
    font-weight: 600;
    margin-top: 0.45em;
    margin-bottom: 0.35em;
    color: #303133;
    font-family: Poppins;
    letter-spacing: -0.02em;
  }

  .pb-20 {
    padding-bottom: 20px !important;
  }

  .text-center {
    text-align: center !important;
  }

  .center-separator .exp-separator-inner,
  .center-separator.exp-separator {
    margin-left: auto;
    margin-right: auto;
  }

  
</style>
@endsection