@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('activities.update', $activity->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Event Details</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" name="title" value="{{ $activity->title }}" class="form-control m-2"
                            placeholder="Title" required>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        <textarea name="desc" class="form-control m-2" placeholder="Long Description" required>{{ $activity->desc }}</textarea>
                        @if ($errors->has('desc'))
                            <span class="text-danger">{{ $errors->first('desc') }}</span>
                        @endif
                        
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading d-flex g-5">
                                    <h4 class="card-title">Current Image</h4>
                                    <img src="{{ asset('storage/ActivityImage/' . $activity->image) }}" height="110px" width="150px"
                                        class="ml-5" alt="">
                                </div>
                            </div>
                        </div>
                        <input type="file" name="image" class="form-control dropzone" id="my-awesome-dropzone">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-xs float-right mr-2"
                    style="margin-bottom: 72px">Save Activity</button>
            </form>
        </div>
    </div>
@endsection
