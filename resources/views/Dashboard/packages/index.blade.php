@extends('Dashboard.layouts.app')
@section('stylesheets')
    <link href="maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><link/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        body {
            background-color: #eee;
        }

        .title {
            text-align: center;
            position: absolute;
            width: 100%;
            font-size: 27px;
            font-family: 'Roboto';
            font-weight: 600;
            z-index: -1;
        }

        .buttons {
            max-width: 92%;
            width: 900px;
            text-align: right;
            margin: 2px auto 0;
            padding-right: 3%;
        }

        button {
            height: 36px;
            width: 40px;
            margin-left: 4px;
            font-size: 24px;
            color: orange;
            text-align: center;
            line-height: 1.4;
            border-radius: 4px;
            border: none;
            outline: none;
            background-color: white;
            box-shadow: 0px 1px 2px #bbb;
        }

        button:hover {
            cursor: pointer;
            box-shadow: 0px 0px 3px #666;
        }

        button.on {
            color: white;
            background-color: #ccc;
        }

        .wrapper {
            max-width: 92%;
            width: 900px;
            margin: 0px auto 40px;
            padding: 20px 20px 0;
            background-color: #ddd;
            font-family: Roboto;
            position: relative;
            overflow: hidden;
        }

        .item {
            background-color: #fff;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0px 1px 3px #bbb;
        }

        img {
            display: inline-block;
            float: left;
            max-height: 90%;
            max-width: 90%;
            padding: 1.2%;
        }

        a {
            display: block;
            transition: 0.2s;
        }

        a:hover {
            opacity: 0.9;
            cursor: pointer;
        }

        h2 {
            transition: 0.2s;
        }

        h2:hover {
            color: #666;
            cursor: pointer;
        }

        span {
            font-size: 24px;
        }

        span.price {
            color: darkblue;
        }

        .list .item {
            width: 100%;
            margin: 0 auto 20px;
        }

        .list img {
            max-width: 30%;
        }

        .list .details {
            float: left;
            max-width: 66%;
            margin-top: 1%;
            margin-left: 2%;
        }


        .grid .item {
            width: 32%;
            margin: 0 2% 20px 0;
            float: left;
            text-align: center;
        }

        .grid .item:nth-child(3n) {
            margin-right: 0;
        }

        .grid img {
            padding-top: 0;
            max-width: 90%;
            margin: 0 auto;
            float: none;
        }

        .grid h2 {
            font-size: 20px;
            margin: 10px 0;
        }

        .grid span {
            display: inline-block;
            margin-top: -6px;
            font-size: 19px;
        }

        .grid .details {
            float: none;
            max-width: 90%;
            margin: -20px auto 0;
        }
        .grid .details p {
            margin-top: 8px;
        }



        .checked {
            color: orange;
        }

    </style>
@section('stylesheets')
@endsection
@section('content')


    <div class="wrapper list">
        @foreach($packages as $package)
            <div class="item">
                <a href="javascript:void(0);">
                    <img src="{{asset('storage/'.$package->Image)}}" style="margin-top: 3px;height: 180px" />
                </a>
                <div class="details"><h2 data-toggle="modal" data-target="#myModal{{$package->id}}">{{$package->Title}}</h2>
                    <!-- Modal -->
  <div class="modal fade" id="myModal{{$package->id}}" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header" style="background-image:  linear-gradient(632deg, #4158d0 -20%, #c850c0 50%, #ffcc70 88%)  " >

            <h4 class="modal-title">Package Details</h4>
        </div>
        <div class="modal-body">
            <p style="color:blue;font-family: cursive" >{{$package->Title}}</P>
          <p>Destination: {{$package->Destination}}</p>
          <p>Description: {{$package->Description}}</p>
          <p>Price: {{$package->Price}} EGP</p>
          <p>Returning: {{$package->Returning}}</p>
          <p>Departing: {{$package->Departing}}</p>
          <p>Passengers:{{$package->num_of_people}}</p>
        </div>
        <div class="modal-footer" style="background-image:  linear-gradient(632deg, #4158d0 -20%, #c850c0 50%, #ffcc70 88%)  ">
            <a href="#" class="btn btn-default" data-dismiss="modal" style="color:black">Close</a>
        </div>
      </div>
    </div>
  </div>


                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span></span><p>{{$package->Description}}.</p>
                    @if(auth()->user()->IsAdmin())
                    <a href="/dashboard/packages/{{$package->id}}/edit" class=" btn btn-primary" style="margin-top: 5px;width: 90px">Edit</a>
                     <a href="/dashboard/packages/{{$package->id}}/delete"  onclick="return confirm('Are you sure, you want to delete it?')" class=" btn btn-danger" style="margin-top: 5px;width: 90px">Delete</a>

                    @else
                        <a href="/booking/bookingpage/{{$package->id}}" class=" btn btn-primary" style="margin-top: 5px;width: 90px" >Book</a>


                        @endif
                        <!--<span style="float: right">Yours for only: <span class="price">${{$package->Price}}</span>-->
                </div></div>

        @endforeach

    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>

    listButton = $('button.list-view');
    gridButton = $('button.grid-view');
    wrapper = $('div.wrapper');

    //$('.wrapper').append(div);



    listButton.on('click',function(){

    gridButton.removeClass('on');
    listButton.addClass('on');
    wrapper.removeClass('grid').addClass('list');

    });

    gridButton.on('click',function(){

    listButton.removeClass('on');
    gridButton.addClass('on');
    wrapper.removeClass('list').addClass('grid');

    });

    function myFunction() {
        var txt;
        if (confirm("Are you sure to delete tis package ?")) {
        } else {
            return false;
        }

    }

</script>

@endsection
