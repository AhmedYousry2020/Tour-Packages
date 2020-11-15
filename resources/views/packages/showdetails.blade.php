@extends('layouts.app')
@section("styles")
<style>

body
{
background-color: #F2F2F2;
}
.dropdown-menu
{
top: 45px;
}
.navbar
{
height: 100px;
background-color: #000;
position: sticky;
left: 0;
top: 0;
z-index: 1000;
}
i[class="fas fa-mobile"],[class="fas fa-envelope"]
{
margin-right: 6px;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link
{
color: #ffffff;
font-weight: 800;
background-color: red;
}
.navbar-light .navbar-toggler
{
background-color: #ffffff;
}
.navbar-collapse
{
z-index: 3;
margin-top: 2px;
}
.text-muted
{
  color: #eccece!important;
    background-color: #000;
    height: 200px;
}
#upup
{
  font-size: 40px;
  color: #fff;
 /* margin-top: 100px;*/
}
  #para
  {
    font-size: 45px;
    font-weight: 500;
  }
  #spaan
  {
    font-size: 30px;
    font-weight: 350;
    color: red;
  }
  .bttnmore
  {
    margin: 30px;
  }
  .wallbackground
  {
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
  }
  .over
  {
    position: absolute;
width: 100%;
height: 100%;
z-index: 2;
top: 0;
left: 0;
background-color: rgb(0, 0, 0, 0.4);
  }
  .information
  { position: absolute;
width: 100%;
background-color: #fff;
height:300px;
z-index: 2;
top: 65%;
left: 0;
  }
  #welco
  {
    position: absolute;
z-index: 3;
color: #ffffff;
max-width: 150px;
left: 135px;
border-left: 8px solid #fff;
padding-left: 17px;
top: 30%;
  }
  .information ul li
  {
    list-style-type: none;
  }
  .information ul li i
  {
    color: #4692e7;

  }
  #foot
 {
  color: #fff;
    background-color: #1a162a;
    padding-top: 10px;
 }
 /*.links a{
padding: 0px;
  }*/
  .na{
    background-color: black;
border-bottom: 1px red solid;
height: 60px;
padding: 10px;
color: aliceblue;
  }
 .us_links {
  display: contents;
 }
 .log {
   margin-left: 112px;
}

 .log i{
  padding-right: 15px;
 }
 .reg i{
  padding-right: 15px;
 }
 .links-left i{
  padding-right: 9px;
  }
 .links-left b{
 padding-left: 3px;
 }
 .links-left{
  padding-left: 70px;
 }
 .icons{
  margin-top: 30px;
    margin-left: auto;
   }
   .icons a{
    padding-right: 18px;
   }
 .con
 {
     padding-top: 4%;
 }
 .carousel-indicators li
 {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 14px;
    height: 14px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #30c2bf;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease;
    border-radius: 50%;
 }
 .button {
  border-radius: 4px;
  background-color: red;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}
.endfooter
{
  color: #fff;
  background-color: #16171f;
  padding-top: 10px;
  }
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.bt2{
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.bt2:hover span {
  padding-right: 25px;
}

.bt2:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
@endsection

@section('content')

<!--start contain-->
<div class="wallbackground">
                <div class="over"></div>
                <h2 id="welco">Welcome IN <span style="color: rgb(255, 255, 255); background-color: rgb(255, 4, 4);">{{$package->Destination}}</span>  </h2>
                <div class="container-fluid information">
                <div class="container con">
                    <div class="row ">
                        <div class="col-sm">
                            <ul>
                                <li><i class="far fa-clock"></i>  8 Hours </li>
                                <li><i class="fas fa-plane-departure"></i> {{$package->From}}</li>
                                <li><i class="fas fa-user"></i> Min Age: {{$package->Min_Age}}+  </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> Availability :  {{date("Mj’", strtotime($package->Returning))}} - {{date("M j", strtotime($package->Departing))}}</li>
                                <li><i class="fas fa-plane-arrival"></i> {{$package->Destination}} </li>
                                <li><i class="fas fa-users"></i> Max People : {{$package->num_of_people}}</li>

                            </ul>
                        </div>
                    </div>
                    <div class="row" style="float:right;">
                       <button class="button" onclick="window.location.href='{{Route("booking.form",$package->id)}}'"><span>Book Now </span></button>
                    </div>
                </div>
                </div>
                <img src="{{asset('storage/'.$package->Image)}}" alt="..." style="width:100%;">
            </div>
            <!--start main-->
            <div style="background-color:#fdfbfb; padding-top: 20px; padding-bottom: 20px;">
            <div class="container">
              <h3> <i class="far fa-file-alt" style="color: #4692e7;"></i> Tour Details </h3>
              <br>
              <p>{{$package->Description}}.
                <br> <br>
                Aenean lacinia bibendum nulla sed consectetur. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum. </p>
                <hr>
                <div class="row">
                    <div class="col-md">
                        Departure & Return Location
                    </div>
                    <div class="col-md">
                     {{$package->plane->airport_place}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        Departure Time
                    </div>
                    <div class="col-md">
                        3 Hours Before Flight Time
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        Price Includes
                    </div>
                    <div class="col-md">

                     {!!$package->Include!!}


                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md">
                        Price Excludes
                    </div>
                    <div class="col-md">
                      {!!$package->Exclude!!}
                    </div>

                </div>
                 <hr>


                <h3> What to Expect </h3>
                <br>
                <p>
                    Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <br> <br>
                  Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <hr>
                  <h3><i class="fas fa-map-marker-alt" style="color: #4692e7;"></i> MAP</h3>
                  <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                     src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=dubai+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe></h3>
                    <hr>
            </div>
            <h3><i class="fas fa-image"></i> PHOTOS </h3>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://images.pexels.com/photos/3629227/pexels-photo-3629227.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.pexels.com/photos/2403251/pexels-photo-2403251.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.pexels.com/photos/2086765/pexels-photo-2086765.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col-sm" style="font-weight: 600;">BOOK IT NOW  </div>
                  <div class="col-sm col-lg-auto">
              <a href="{{Route('booking.form',$package->id)}}" class="btn btn-primary bt2" style="text-align: center;    background-color: red;
    color: white;">BOOK</a>
            </div>
              <div class="col-sm"></div>
            </div>
            </div>
            <hr>
            </div>

@endsection
