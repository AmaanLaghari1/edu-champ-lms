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
                        <div class="form-group col-6">
                            <label class="col-form-label" for="role">Role<span class="text-danger">*</span></label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="">Choose an option</option>
                                <option value="admin">Admin</option>
                                <option value="student" selected>Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                        </div>
                    </div>
                    <div class="widget-inner">
                        <form id="student_form" action="{{route('user_add')}}" method="POST" class="edit-profile m-b30" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Student info</h3>
                                    </div>
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
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn">Save changes</button>
                                </div>
                            </div>
                        </form>
                        <form id="teacher_form" style="display: none" action="{{route('user_add')}}" method="POST" class="edit-profile m-b30" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Teacher info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="first_name">First Name<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="text" value="{{old('first_name')}}" name="first_name" id="first_name" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="last_name">Last Name<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="text" value="{{old('last_name')}}" name="last_name" id="last_name" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="email">Email<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="email" value="{{old('email')}}" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label" for="password">Password<span class="text-danger">*</span></label>
                                    <div>
                                        <input class="form-control" type="password" name="password" id="password" value="{{old('password')}}" required>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Picture</label>
                                    <div>
                                        <input class="form-control" type="file">
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

@push('js')
{{-- <script src="{{asset('website/assets')}}/js/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function(){

        $("#role").change(function(){
            if($(this).val() === 'admin'){
                alert("admin")
            }
            else if($(this).val() === 'teacher'){
                $("#student_form").hide()
                $("#teacher_form").show()
            }
            else {
                $("#teacher_form").hide()
                $("#student_form").show()
            }
        })

        jQuery.validator.addMethod("validRole", function(value, element){
            return element.value !== ""
        }, "Role invalid")
    
    
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
                    item: {
                        required: true,
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
                    }
                }
            })
        })
    })
</script>
@endpush('js')