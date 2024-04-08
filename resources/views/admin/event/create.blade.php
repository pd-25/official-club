@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Event Details</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control m-2"
                            placeholder="Title" required>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        <input type="text" name="short_desc" value="{{ old('short_desc') }}" class="form-control m-2"
                            placeholder="Short Description" required>
                        @if ($errors->has('short_desc'))
                            <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                        @endif
                        <textarea name="long_desc" class="form-control m-2" placeholder="Long Description" required>{{ old('long_desc') }}</textarea>
                        @if ($errors->has('long_desc'))
                            <span class="text-danger">{{ $errors->first('long_desc') }}</span>
                        @endif
                        <input type="datetime-local" name="event_date_from" value="{{ old('event_date_from') }}"
                            class="form-control m-2" required>
                        @if ($errors->has('event_date_from'))
                            <span class="text-danger">{{ $errors->first('event_date_from') }}</span>
                        @endif
                        <input type="datetime-local" name="event_date_to" value="{{ old('event_date_to') }}"
                            class="form-control m-2" required>
                        @if ($errors->has('event_date_to'))
                            <span class="text-danger">{{ $errors->first('event_date_to') }}</span>
                        @endif
                        <input type="file" name="image" class="form-control dropzone" id="my-awesome-dropzone"
                            required>
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-xs float-right mr-2"
                    style="margin-bottom: 72px">Add Image</button>
            </form>
        </div>
    </div>
@endsection
