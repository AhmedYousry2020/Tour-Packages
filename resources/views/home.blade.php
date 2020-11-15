@extends('layouts.app')

@section('content')
<!-- start carousel -->
<div class="slider">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
                <div class="carousel-inner">
                <h1>Welcome IN <img src="image/img2.png" style="height: 45px;" > WEBSITE </h1>
                <div class="overlay"></div>
            <div class="carousel-item active carousel-one">
                <img src="https://images.pexels.com/photos/358319/pexels-photo-358319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-two">
                <img src="https://images.pexels.com/photos/1835712/pexels-photo-1835712.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-three">
                <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
            </div>
                </div>
        </div>
     </div>
<!-- end carousel-->
<div class="container-fluid con1" style="background-image: url(https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
    <div class="row" >
      <div class="col-sm" style="text-align: center;  " >
        <i class="fas fa-plane-departure" style="font-size: 40px; color: #fff; "></i><br>
        <div style="text-align: center;  color: #fff;" >
            <h2>LUXURY FLEET </h2><hr>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
        </div>
      </div>
      <div class="col-sm" style="text-align: center; ">
        <i class="fas fa-bed" style="font-size: 40px; color: #fff; "></i>
        <div style="text-align: center; color: rgb(255, 255, 255);" >
            <h2>PROFESSIONAL CREWS </h2><hr>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
        </div>
      </div>
      <div class="col-sm" style="text-align: center; ">
        <i class="fas fa-users" style="font-size: 40px; color: #fff; "></i>
        <div style="text-align: center; color: rgb(255, 255, 255);" >
            <h2>COMFORTABLE </h2><hr>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
        </div>
      </div>
      <div class="col-sm" style="text-align: center; ">
        <i class="fas fa-wifi" style="font-size: 40px; color: #fff;  "></i>
        <div style="text-align: center; color: rgb(255, 255, 255);" >
            <h2>WIFI ON BOARD </h2><hr>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
        </div>
      </div>
    </div>
  </div>
    <!-- start container-->
<!-- card1-->
<div class="container">

  <div class="row">

    <div class="input-group md-form form-sm form-2 pl-0 col-sm-6 search">

      <form style="width: 95%;" action="{{Route('home')}}" method="get" id="formsearch">
        <i class="fa fa-plane" aria-hidden="true" style="position: absolute;padding: 12px;color: cadetblue; "></i>

      <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search For Destination" name="search" aria-label="Search" id="search" style="font-weight:bold ;padding-left: 33px;">
      <!-- <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i>search</button> -->

      </form>

    </div>
  </div>
  <!-- @foreach($packages as $package)
  <div class="row">
    <div class="col-sm">
<div class="card mb-3" style="width:500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('storage/'.$package->Image)}}"  class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$package->Title}}</h5>
        <p class="card-text">{{$package->Description}}.</p>
        <a href="{{Route('packages.details',$package->id)}}" class="btn btn-primary">VIEW DETAILS</a>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach -->

</div>
<div class="container">
@if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>

                @endif
<h2 style="    font-size: 29px; font-weight: 700;letter-spacing: 0px;text-transform: none; margin: 20px;"><i class="fas fa-air-freshener" style="color: #007bff;margin-right: 10px; "></i>Top Packages  </h2>
</div>
@foreach($packages as $package)
<div class="container">

  <div class="row">
    <div class="col-sm">
      <div class="card mb-3" style="width: 885px; margin-left: auto;margin-right: auto;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{asset('storage/'.$package->Image)}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$package->Title}}</h5>
            <p class="card-text">{{$package->Description}}</p>

            <div class="row">
              <div class="col-sm-8"><a href="{{Route('packages.details',$package->id)}}" class="btn btn-primary">VIEW DETAILS</a></div>

              <div class="col-sm-4"><span class="price">{{$package->Price}}$</span></div>
            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- button show more- appends(request()->query())-->
{{$packages->appends(request()->query())->links()}}
  <!-- end container-->
  <!-- start main-->
  <div class="container-fluid">
  <video src="videos/video1.mp4"  id="video1" autoplay="autoplay"  muted="muted" loop style="width: 100%;"></video>
  </div>
  <!-- End main-->
@endsection

@section("scripts")


@endsection
