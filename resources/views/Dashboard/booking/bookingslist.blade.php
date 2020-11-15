@extends('Dashboard.layouts.app')
@section('stylesheets')

@endsection
@section('content')
<div class="container">
    <table class="table table-dark" style="color: orange;
        background-color:sienna;
        border-style:solid ">
        <thead style="background-color: chocolate;color: black">
    <tr>
      <th scope="col">#</th>
      <th scope="col">user_id</th>
      <th scope="col">address</th>
      <th scope="col">Payment</th>
      <th scope="col">Package_id</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listofbookings  as $li)
    <tr>
      <th scope="row">{{$li->id}}</th>
      <td>{{$li->user_id}}</td>
      <td>{{$li->address}}</td>
      <td>{{$li->Payment_method}}</td>
      <td>{{$li->package_id}}</td>
      <td><a href="#" class="btn  btn-sm" style="background-color: blanchedalmond">Confirm</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
  @endsection


