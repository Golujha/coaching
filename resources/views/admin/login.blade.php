@extends('base')

@section('data')
<div class="container">
    <div class="col-4 mx-auto">
        @if (session("error"))
            <div class="alert alert-danger">
            {{session("error")}}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-primary fw-bold" style="font-size:23px;">Admin Login Here</div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">password</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="send" value="Admin Login Here" class="btn btn-danger mt-2" style="margin-left: 120px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection