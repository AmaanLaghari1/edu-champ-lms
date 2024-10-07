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
            <h4 class="breadcrumb-title">All Users</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>All Users</li>
            </ul>
        </div>	
        <div class="row">
            <div>
                <a href="{{route('user_add')}}" class="btn">Add User</a>
            </div>
            <table id="myTable" class="table table-light table-striped" style="width: 100%">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>STATUS</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                            <a href="#" class="btn btn-sm">Edit</a>
                            <form action="{{route('user_delete')}}" method="POST" class="user_delete_form d-inline">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
new DataTable('#myTable');

$(".user_delete_form").each(function() {

$(this).submit(e => {
    e.preventDefault()

    Swal.fire({
        title: 'Do you want to delete this user?',
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
            Swal.fire('User not deleted', '', 'info')
        }
    })

})
})
</script>
@endpush('js')