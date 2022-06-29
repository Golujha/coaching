@extends('base')

@section('data')

       <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
       
            <div class="col-9">
                <h4 class="displat-6"><u>Manage User</u></h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Delete</th>
                    <th>Action</th>
                </tr>
                @foreach ($users as $user)
                     <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->contact}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="" class="btn btn-danger">x</a>
                        </td>
                     </tr>
                @endforeach
            </table>
        </div>
       </div>
       </div>

@endsection