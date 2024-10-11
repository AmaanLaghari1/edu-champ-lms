@extends('layouts.backend.master')

@push('title')
Add User
@endpush('title')

@push('css')
<style>
    .error {
        color: red;
    }
</style>
@endpush('css')

@section('main')
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add User</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add User</li>
            </ul>
        </div>	
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Add User</h4>
                    </div>
                    <div class="widget-inner">
                        <form id="form" action="{{route('user_add')}}" method="POST" enctype="multipart/form-data" class="edit-profile m-b30" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Basic info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="role">Role<span class="text-danger">*</span></label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="student" selected>Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="s_first_name">First Name<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="text" value="{{old('first_name')}}" name="first_name" id="s_first_name" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="s_last_name">Last Name<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="text" value="{{old('last_name')}}" name="last_name" id="s_last_name" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="s_email">Email<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="email" value="{{old('email')}}" name="email" id="s_email" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="s_password">Password<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="password" name="password" id="s_password" value="{{old('password')}}" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Picture</label>
                                    <div>
                                        <input class="form-control" type="file" name="profile_picture" value="{{old('s_profile_pic')}}">
                                    </div>
                                </div>

                                
                            </div>
                            <div class="row" id="teacher_fields" style="display: none">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>2. Qualifications</h3>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="university" class="col-form-label">University</label>
                                    <input type="text" class="form-control" name="university" id="university">
                                </div>
                                <div class="col-12">
                                    <label for="degree" class="col-form-label">Degree</label>
                                    <input type="text" class="form-control" name="degree" id="degree">
                                </div>
                                <div class="col-12">
                                    <label for="city" class="col-form-label">City</label>
                                    <input type="text" class="form-control" name="city" id="city">
                                </div>
                                <div class="col-12">
                                    <label for="expertise" class="col-form-label">Expertise</label>
                                    <input type="text" class="form-control" name="expertise" id="expertise">
                                </div>
                                <div class="col-12">
                                    <label for="about" class="col-form-label">About</label>
                                    <textarea name="about" id="about" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 py-2">
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

@push('js')
{{-- <script src="{{asset('website/assets')}}/js/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function(){

        $("#role").change(function(){
            if($(this).val() === 'teacher'){
                $("#teacher_fields").show()
            }
            else {
                $("#teacher_fields").hide()
            }
        })    
    
        $(function(){
            $("#form").validate({
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    role: {
                        required: true,
                        validRole: ""
                    },
                    university: {
                        required: function(element){
                            return $("#role").val() === 'teacher'
                        },
                    },
                    degree: {
                        required: function(element){
                            return $("#role").val() === 'teacher'
                        },
                    },
                    city: {
                        required: function(element){
                            return $("#role").val() === 'teacher'
                        },
                    },
                    expertise: {
                        required: function(element){
                            return $("#role").val() === 'teacher'
                        },
                    },
                    about: {
                        required: function(element){
                            return $("#role").val() === 'teacher'
                        },
                    },
                },
                messages: {
                    first_name: {
                        required: "First Name is required"
                    },
                    last_name: {
                        required: "Last Name is required"
                    },
                    email: {
                        required: "Email is required",
                        email: "Invalid email"
                    },
                    password: {
                        required: "Password is required",
                        minlength: "Password is too short"
                    },
                    role: {
                        required: "Please select a role"
                    },
                    university: {
                        required: "University is required"
                    },
                    degree: {
                        required: "Degree is required"
                    },
                    city: {
                        required: "City is required"
                    },
                    expertise: {
                        required: "Expertise is required"
                    },
                    about: {
                        required: "About is required"
                    }
                }
            })
        })
    })
</script>
@endpush('js')