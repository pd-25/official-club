@extends('admin.layout.mainLayout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-header justify-content-between d-flex">
                    <div class="card-heading">
                        <h4 class="card-title">Gallery List</h4>
                    </div>
                    <a href="{{ route('gallery-management.create') }}" class="btn btn-primary btn-xs">Add Image</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($galleries->count() > 0)
                                    @foreach ($galleries as $gallerie)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            @php
                                                if ($gallerie->category_name == '1') {
                                                    $category = 'Category 1';
                                                }
                                                if ($gallerie->category_name == '2') {
                                                    $category = 'Category 2';
                                                }
                                                if ($gallerie->category_name == '3') {
                                                    $category = 'Category 3';
                                                }
                                                if ($gallerie->category_name == '4') {
                                                    $category = 'Category 4';
                                                }
                                            @endphp
                                            <td>{{$category}}</td>
                                            <td><img src="{{asset('storage/GalleryImage/'.$gallerie->image)}}" height="110px" width="150px" alt=""></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i
                                                        class="fe fe-edit"></i></a><a href="javascript:void(0);"><i
                                                        class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
