@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Activity Details</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control m-2"
                            placeholder="Title" required>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        
                        <textarea name="desc" class="form-control m-2" placeholder="Long Description" required>{{ old('desc') }}</textarea>
                        @if ($errors->has('desc'))
                            <span class="text-danger">{{ $errors->first('desc') }}</span>
                        @endif
                       
                        <input type="file" name="image" class="form-control dropzone" id="my-awesome-dropzone"
                            required>
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-xs float-right mr-2"
                    style="margin-bottom: 72px">Add Activity</button>
            </form>
        </div>
    </div>
@endsection
