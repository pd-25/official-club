@extends('admin.layout.mainLayout')
@section('content')
    <style>
        .delete-icon {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            outline: none;
        }

        .delete-icon i {
            color: red;
            /* Change color as needed */
            font-size: 18px;
            /* Adjust size as needed */
        }

        /* Optional: Tooltip styles */
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-header justify-content-between d-flex">
                    <div class="card-heading">
                        <h4 class="card-title">Gallery List</h4>
                       
                    </div>
                    <a href="{{ route('gallery-management.create') }}" class="btn btn-primary btn-xs">Add Image</a>
                </div>
                @if (Session::has('msg'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                            role="alert">
                            <strong>{{ Session::get('msg') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ti ti-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
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
                                            <th scope="row">{{ $loop->iteration }}</th>
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
                                            <td>{{ $category }}</td>
                                            <td><img src="{{ asset('storage/GalleryImage/' . $gallerie->image) }}"
                                                    height="110px" width="150px" alt=""></td>
                                            <td> <a class="mr-3"
                                                    href="{{ route('gallery-management.edit', $gallerie->id) }}"><i
                                                        class="fe fe-edit"></i>
                                                </a>
                                                <form method="POST"
                                                    action="{{ route('gallery-management.destroy', $gallerie->id) }}"
                                                    class="action-icon d-inline-block pl-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-icon show_confirm"
                                                        data-toggle="tooltip" title='Delete'>

                                                        <i class="fe fe-trash-2"></i>

                                                    </button>
                                                </form>
                                            </td>
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
