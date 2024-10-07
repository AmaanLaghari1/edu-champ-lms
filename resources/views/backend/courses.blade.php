@extends('layouts.backend.master')

@push('title')
Courses
@endpush('title')

@push('css')
@endpush('css')

@section('main')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">All Courses</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>All Course</li>
            </ul>
        </div>	
        <div class="row">
            <div>
                <a href="{{route('course_add')}}" class="btn">Add New</a>
            </div>
            <table id="courses" class="table table-light table-striped" style="width: 100%">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DURATION</th>
                        <th>COST</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Python</td>
                        <td>2 months</td>
                        <td>3000</td>
                        <td>
                            <a href="#" class="btn btn-sm">Edit</a>
                            <a href="#" class="btn btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PHP</td>
                        <td>6 months</td>
                        <td>6000</td>
                        <td>
                            <a href="#" class="btn btn-sm">Edit</a>
                            <a href="#" class="btn btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection('main')

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
<script>
new DataTable('#courses');
</script>
@endpush('js')