@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif
            <form action="{{ route('gallery-management.update', $gallery->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Select Category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select name="category_name" id="" class="form-control" required>
                            <option {{ $gallery->category_name == 1 ? 'selected' : '' }} value="1">Category 1</option>
                            <option {{ $gallery->category_name == 2 ? 'selected' : '' }} value="2">Category 2</option>
                            <option {{ $gallery->category_name == 3 ? 'selected' : '' }} value="3">Category 3</option>
                            <option {{ $gallery->category_name == 4 ? 'selected' : '' }} value="4">Category 4</option>
                        </select>

                    </div>
                    @if ($errors->has('category_name'))
                        <span class="text-danger">{{ $errors->first('category_name') }}</span>
                    @endif
                </div>

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading d-flex g-5">
                            <h4 class="card-title">Current Image</h4>
                            <img src="{{ asset('storage/GalleryImage/' . $gallery->image) }}" height="110px" width="150px"
                                class="ml-5" alt="">
                        </div>
                    </div>
                </div>

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Drop Zone</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="file" name="image" class="form-control dropzone" id="my-awesome-dropzone">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-xs float-right mr-2"
                    style="margin-bottom: 72px">Save Image</button>
            </form>
        </div>
    </div>
@endsection
