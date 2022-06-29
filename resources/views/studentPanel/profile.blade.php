@extends('base')

@section('title')
     Student dashboard
@endsection


@section('data')
     <div class="container">
        @if($checkStudent)
        <div class="row">
            <div class="col-3">
                <div class="card">
                <img src="https://picsum.photos/150/150?random=3" alt="" class="rounded-circle p-3">
                <div class="card-body">
                    <h5>{{auth()->user()->name}}</h5>
                    <p class="small text-muted"><i class="bi bi-phone"></i>+91{{auth()->user()->contact}}</p>
                </div>
            </div>
            <div class="col-12 text-center py-2">
                <a href="" class="btn btn-info w-100 text-center">Edit Profile</a>
            </div>

            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">Payments</a>
                <a href="" class="list-group-item list-group-item-action">Cource</a>
                <a href="" class="list-group-item list-group-item-action">Examination</a>
                <a href="" class="list-group-item list-group-item-action bg-danger text-white">Logout</a>
            </div>

            </div>
            <div class="col-9">
                <div class="card card-body bg-light">
                    <div class="container">
                        <h1 class="display-3">welcome,{{auth()->user()->name}}</h1>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, iure veniam! Modi corrupti non voluptatibus sit eaque cumque consequatur et, distinctio, veritatis blanditiis commodi, ea iste fugit sint rem placeat.</p>
                        <a href="" class="btn btn-success btn-lg">check cource</a>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-danger">
                <h2 class="alert-title">Notic</h2>
                <p class="lead">Please Apply For Admission First</p>
                 <a href="{{route('student.create')}}" class="btn btn-success">Apply For Join Us</a>
                </div>
            @endif
     </div>
 @endsection