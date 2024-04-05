@extends('admin.layout.mainLayout')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-lg-flex flex-nowrap align-items-center">
                <div class="page-title mr-4 pr-4 border-right">
                    <h1>Dashboard</h1>
                </div>
                <div class="breadcrumb-bar align-items-center">
                    <nav>
                        <ol class="breadcrumb p-0 m-b-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="ti ti-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">
                                Default</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- Notification -->
    <div class="row">
        <div class="col-md-12">
            <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                role="alert">
                <strong>Hello {{auth()->guard('admin')->user()->name}}</strong>, Welcome to your admin panel
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-close"></i>
                </button>
            </div>
        </div>
    </div>
   
   
</div>
@endsection