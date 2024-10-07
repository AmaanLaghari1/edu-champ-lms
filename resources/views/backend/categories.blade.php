@extends('layouts.backend.master')

@push('title')
Users
@endpush('title')

@push('css')
@endpush('css')

@section('main')


<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Course Categories</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Course Categories</li>
            </ul>
        </div>	
        <div class="row">
            <div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#category_add" class="btn ms-auto">Add New</button>
            </div>
            <table id="myTable" class="table table-light table-striped" style="width: 100%">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th class="w-50">NAME</th>
                        <th>COURSE COUNT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->course_count}}</td>
                            <td>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#edit_category_modal_{{$category->id}}" class="btn btn-sm mx-1">Edit</button>
                                <form class="category_delete_form d-inline" action="{{route('category_delete')}}" cat-id="{{$category->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <button type="submit" class="btn btn-sm mx-1">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="edit_category_modal_{{$category->id}}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3>Edit Category</h3>
                                        <form action="{{route('category_update')}}" method="post">
                                            @csrf
                                            <div class="form-group my-2">
                                                <input type="hidden" name="id" value="{{$category->id}}">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{old('name', $category->name)}}">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<div class="modal fade" id="category_add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('category_add')}}" method="POST" class="edit-profile m-b30">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
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
</div>

@endsection('main')

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
<script>
new DataTable('#myTable');

$(".category_delete_form").each(function() {

    $(this).submit(e => {
        e.preventDefault()

        Swal.fire({
            title: 'Do you want to delete this category?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: 'No',
            customClass: {
                actions: 'my-actions',
                cancelButton: 'order-1 right-gap',
                confirmButton: 'order-2',
                denyButton: 'order-3',
            },
            }).then((result) => {
            if (result.isConfirmed) {
                e.target.submit()
            } else if (result.isDenied) {
                Swal.fire('Category not deleted', '', 'info')
            }
        })
    
        // id = $(this).attr('cat-id')
    
    })
})

</script>
@endpush('js')