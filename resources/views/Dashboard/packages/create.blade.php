@extends('Dashboard.layouts.app')
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="card card-default">
        <div class="card-header">
            Add a new Package:
            <div class="card-body">
                <form action="{{route('package.create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="post title">Title:</label>
                        <input type="text" name="Title"  class="form-control"  placeholder="Add a title" class="@error('title') is-invalid @enderror" >

                    </div>
                    <div class="form-group">
                        <label for="post title">Destination:</label>
                        <input type="text" name="Destination"  class="form-control"  placeholder="Add a destination" class="@error('title') is-invalid @enderror" >

                    </div>

                    <div class="form-group">
                        <label for="post description">Description:</label>
                        <textarea  name="Description" class="form-control" rows="2" placeholder="Add a description" class="@error('description') is-invalid @enderror">
                </textarea>
                   </div>
                    <div class="form-group">
                        <label for="post title">Price:</label>
                        <input type="text" name="Price"  class="form-control"  placeholder="Add a price" class="@error('title') is-invalid @enderror" >

                    </div>

                    <div class="form-group">
                        <label for="post title">Passengers:</label>
                        <input type="text" name="num_of_people"  class="form-control"  placeholder="Add a num of passengers" class="@error('title') is-invalid @enderror" >
                    </div>

                    <div class="form-group">
                        <label for="post image">Image:</label>
                        <input type="file" name="Image"  class="form-control" style="padding-top: 3px" class="@error('title') is-invalid @enderror" >
                    </div>

                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Returning</label>
                            <input class="form-control" id="date" name="Returning" placeholder="YYYY-MM-DD" type="date"/>
                        </div>

                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Departing</label>
                            <input class="form-control" id="date" name="Departing" placeholder="YYYY-MM-DD" type="date"/>
                        </div>
                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Include</label>
                            <textarea class="form-control" id="summary-ckeditor" name="Include"></textarea>
                        </div>
                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Exclude</label>
                            <textarea class="form-control" id="summary-ckeditor1" name="Exclude"></textarea>
                        </div>


                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Hotel</label>
                            <select name="hotel_id" class="form-control">
                            <option value="">Select Hotel</optipn>
                            @foreach($hotels as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->hotel_name}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Plane</label>
                            <select name="plane_id" class="form-control">
                            <option value="">Select Plane</optipn>
                            @foreach($planes as $plane)
                            <option value="{{$plane->id}}">{{$plane->plane_number}}</option>
                            @endforeach
                            </select>
                        </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endsection
        @section('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.tags').select2();
                });
            </script>
@endsection
