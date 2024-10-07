@extends('layouts.backend.master')

@push('title')
Add Category
@endpush('title')

@section('main')
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add Category</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add Category</li>
            </ul>
        </div>	
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Add Category</h4>
                    </div>
                    <div class="widget-inner">
                        <form action="{{route('category_add')}}" method="POST" class="edit-profile m-b30">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Basic info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="name">Category Name</label>
                                    <div>
                                        <input class="form-control" name="name" id="name" type="text" value="{{old('name')}}">
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <button type="submit" class="btn">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection('main')