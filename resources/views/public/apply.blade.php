@extends('base')

@section('title')
    apply for admission
@endsection

@section('data')
     <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header text-primary fw-bold" style="font-size:23px;"><u>Apply For Addmission</u></div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Your Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="">Father name</label>
                                <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control">
                                @error('father_name')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Mother name</label>
                                <input type="text" name="mother_name" value="{{old('mother_name')}}" class="form-control">
                                @error('mother_name')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Dob</label>
                                <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                @error('dob')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                @error('address')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Education</label>
                                <input type="text" name="education" value="{{old('education')}}" class="form-control">
                                @error('education')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                </select>
                                @error('gender')
                                <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Apply for CWS" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection