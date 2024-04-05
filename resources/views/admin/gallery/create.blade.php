@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('gallery-management.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Select Category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <select name="category_name" id="" class="form-control" required>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                            <option value="4">Category 4</option>
                        </select>
                        
                    </div>
                    @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif
                </div>

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Drop Zone</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="file" name="image" class="form-control dropzone" id="my-awesome-dropzone" required>
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-xs float-right mr-2">Add Image</button>
            </form>
        </div>
    </div>
@endsection
