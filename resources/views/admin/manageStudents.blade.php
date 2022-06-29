@extends('base')

@section('data')

       <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
       
            <div class="col-9">
            <h4 class="displat-6 text-primary"><u>Manage Students</u></h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Father_name</th>
                    <th>Mother_name</th>
                    <th>Dob</th>
                    <th>Address</th>
                    <th>Education</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                @foreach ($students as $student)
                     <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->user->name}}</td>
                        <td>{{$student->father_name}}</td>
                        <td>{{$student->mother_name}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->education}}</td>
                        <td>{{$student->gender}}</td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                @endforeach
            </table>
        </div>
       </div>
       </div>

@endsection