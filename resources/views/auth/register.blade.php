<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link  rel="icon" href="">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">
    <link  rel="icon" href="{{asset('image/img1.png')}}">
    <!-- Bootstrap core CSS -->


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
        #login
{
    text-align: center;
    font-weight: 500;
    margin-top: 50px;
    width: 120px;
    background-color: #ff1616;
    height: 43px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 6px;
    color: #ffffff;
}
        .text-muted
        {
          color: #eccece!important;
            background-color: #000;
            height: 200px;
        }
        .endfooter
{
  color: #fff;
  background-color: #16171f;
  padding-top: 10px;
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
          .links a{
padding: 10px;
  }
  .na{
    background-color: black;
border-bottom: 1px red solid;
height: 50px;
padding: 10px;
color: aliceblue;
  }
 .us_links {
  display: contents;
 }
 .log {
   margin-left: 267px;
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
    color: #007bff;
 }
 .icons{
  margin-top: 30px;
    margin-left: auto;
   }
   .icons a{
    padding-right: 18px;
   }
 .formal
 {
    margin-top:20px;
    margin-bottom: 100px;
    margin-left: auto;
    margin-right: auto;
    width: 400px;
    padding: 20px;
    border-radius: 15px;
    background-color: black;
    color: #fff;
    box-shadow: 0px 0px 20px #f00;
 }

 .foot
 {
     background-color:#303030;
    padding: 40px 20px;
    isolation: isolate;
 }
.imge
{
    width: 80px;
    background-size: 100%;
    background-position: center;
    transition: 1.5s;
    color: #fff;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    font-family: cursive;
    font-weight: bolder;
    cursor: pointer;
    text-align: center;
    margin-bottom: 10px;
    isolation: isolate;
}
#img1
{
    background-image: url(https://images.pexels.com/photos/1109896/pexels-photo-1109896.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
#img2
{
    background-image: url(https://images.pexels.com/photos/378570/pexels-photo-378570.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
#img3
{
    background-image: url(https://images.pexels.com/photos/315191/pexels-photo-315191.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
#img4
{
    background-image: url(https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
#img5
{
    background-image: url(https://images.pexels.com/photos/460672/pexels-photo-460672.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
#img6
{
    background-image: url(https://images.pexels.com/photos/3879067/pexels-photo-3879067.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
.imge:hover
{
    background-size: 150%;
    background-position: center;
}

    </style>
     </head>
  <body>
     <!-- start upper bar-->
 <nav id="nav1">
    <div class="container-fluid">
        <div class="row na">
          <div class="col-sm-5 ml-auto links-left">
            <i class="fas fa-phone"></i> <b>514-485-7958</b>  &nbsp;<i class="fas fa-envelope"></i><b>A.T@outlook.sa</b>
            </div>
            <div class="col-sm-6 links" >
              <a href="{{Route('login')}}" class="log"><i class="fas fa-user-lock"></i><b>Login</b></a>
              <a href="{{Route('register')}}" class="reg"><i class="fas fa-user"></i><b>Sign Up</b></a>

          </div>
        </div>
      </div>
  </nav>
<!-- end upper bar-->
          <!-- start navbar-->
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divoption" aria-controls="divoption" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
                   <a class="navbar-brand"><img alt="logo" id="logoo" src="{{asset('image/img1.png')}}" style="height: 80px;" ></a>
                     <div class="collapse navbar-collapse" id="divoption">
                       <ul class="navbar-nav  ml-auto">
                         <li class="nav-item active">
                           <a class="nav-link" href="{{Route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                     </ul>
                   </div>
                </div>
            </nav>
            <!-- end navbar-->
            <h2 id="login">Sgin Up</h2>
      <div class="container">


<form action="{{ route('register') }}" method="POST" class="form-signin col-ml-auto formal">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
        <div class="form-label-group">
            <label for="inputEmail">Name</label>
          <input type="text" id="inputEmail" class="form-control" name="name" placeholder="User Name"  autofocus>
        </div>
         <div class="form-label-group">
      <label for="inputEmail">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"  autofocus>
  </div>
  <div class="form-label-group">
       <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
  </div>
  <div class="form-label-group">
    <label for="inputPassword">Confirm Password</label>
 <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Confirm Password" >
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Country</label>
      <input type="text" class="form-control" name="country" id="inputCity" placeholder="Country">
    </div>
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" name="city"  id="inputCity" placeholder="City">
    </div>
    </div>
  <br>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
</form>
</div>
  <!--start footer-->

<div class="container-fluid foot">
  <div class="row">
      <div class="col-sm"><i class="fab fa-aviato" style="color: #fff; font-size: 50px;"></i>
      <br>
      <span style="color: #4c91ef;">AVIATO</span>  <span style="color:#fff;">TOUR </span>
      <br>
      <br>
      <p style="color: #7c7c7c;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <div class="row">
          <div class="col-sm"><img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2017/01/award-1.png" style="width: 140px; margin: 10px;" alt="" > </div>
          <div class="col-sm"> <img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2017/01/award-2.png" style="width: 65px;  margin: 10px;" alt="" > </div>
      </div>
      </div>
      <div class="col-sm" style="min-width: 420px;">
          <h3 style="color: #fff;">TOP DESTINATIONS</h3>
          <div class="row">
              <div class="col-sm">
                  <div class="col-sm"><div class="imge" id="img1" >Africa</div></div>
                  <div class="col-sm"><div class="imge"  id="img2" >America</div></div>

              </div>
              <div class="col-sm">
                  <div class="col-sm"><div class="imge"  id="img3" >Asia</div></div>
                  <div class="col-sm"><div class="imge"  id="img4" >Eastern Europe</div></div>
              </div>
              <div class="col-sm">
                  <div class="col-sm"><div class="imge"  id="img5" >Europe</div></div>
                  <div class="col-sm"><div class="imge"  id="img6" >South America</div></div>
              </div>
          </div>
      </div>
      <div class="col-sm">
          <h3 style="color: #ffffff;">CONTACT INFO</h3>
          <div style="color: #7c7c7c;">
          <div>Address : 12 Main Street cairo. Egypt</div>
          <div>  Phone : 514-485-7958</div>
          <div> A.T@outlook.sa</div>
          </div>
          <div>
              <div class="row icons">
                  <a href="#" class="ic"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="ic"><i class="fab fa-flickr"></i></a>
                  <a href="#" class="ic"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#" class="ic"><i class="fab fa-twitter"></i></a>

                  </div>
          </div>
      </div>
  </div>
</div>
  <footer class="endfooter">
    <div class="container-fluid">
      <div class="row">
       <p class="col-sm-11" style="text-align: center;">COPYRIGHT &copy; 2020  AHMED EL-SAYED & AHMAD YOUSRY , ALL RIGHT RESERVED</p>
       <!-- <a class="col-sm-1"  href="#"><i class="fas fa-chevron-circle-up" id="upup"></i></a> -->
    </div>

  </div>
  </footer>
<!--End footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- start javascript-->

<!-- end javascript-->
</body>
</html>
