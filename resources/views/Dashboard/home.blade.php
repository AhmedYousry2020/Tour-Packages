@extends('Dashboard.layouts.app')

@section('content')
    @if(auth()->user()->IsAdmin())
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white text-center bg-info">
                                <div class="card-header">Users</div>
                                <div class="card-body">{{$users->count()}}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white text-center bg-danger">
                                <div class="card-header">Packages</div>
                                <div class="card-body">{{$packages->count()}}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white text-center bg-dark">
                                <div class="card-header">Bookings</div>
                                <div class="card-body">{{$bookings->count()}}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>


    @else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
@endsection
