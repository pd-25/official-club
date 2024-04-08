@extends('admin.layout.mainLayout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Event Details</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" name="title" value="{{ $event->title }}" class="form-control m-2"
                            placeholder="Title" required>
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        <input type="text" name="short_desc" value="{{ $event->short_desc }}" class="form-control m-2"
                            placeholder="Short Description" required>
                        @if ($errors->has('short_desc'))
                            <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                        @endif
                        <textarea name="long_desc" class="form-control m-2" placeholder="Long Description" required>{{ $event->long_desc }}</textarea>
                        @if ($errors->has('long_desc'))
                            <span class="text-danger">{{ $errors->first('long_desc') }}</span>
                        @endif
                        <input type="datetime-local" name="event_date_from" value="{{ $event->event_date_from }}"
                            class="form-control m-2" required>
                        @if ($errors->has('event_date_from'))
                            <span class="text-danger">{{ $errors->first('event_date_from') }}</span>
                        @endif
                        <input type="datetime-local" name="event_date_to" value="{{ $event->event_date_to }}"
                            class="form-control m-2" required>
                        @if ($errors->has('event_date_to'))
                            <span class="text-danger">{{ $errors->first('event_date_to') }}</span>
                        @endif
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading d-flex g-5">
                                    <h4 class="card-title">Current Image</h4>
                                    <img src="{{ asset('storage/EventImage/' . $event->image) }}" height="110px" width="150px"
                                        class="ml-5" alt="">
                                </div>
                            </div>
                        </div>
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
