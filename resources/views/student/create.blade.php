@extends('layouts.admin')

<title> ADD STUDENT </title>
@section('content')

<div class="content">
        <div class="container-fluid mt-3 bg">
            <div class="card">
                <div class="card-body">
                    <h5 class="bg3">STUDENT INFORMATION</h5>
                    <hr>
                    <form action="{{route('student.save')}}" method="post" enctype="multipart/form-data" class="bg1">                   
                    {{csrf_field()}}
                        <!-- </div> -->

                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                                <label for="Name">Name </label>
                                <input type="text" name="name" required class="form-control" data-validation="length required" data-validation-length="min2">
                            </div>
                             <div class="col-md-3 pt-3">
                                <label for="Name">Address</label>
                                <input type="text" name="address" required class="form-control" data-validation="length required" data-validation-length="min2">
                            </div> 
                            <div class="col-md-3 pt-3">
                                <label for="Name">DOB</label>
                                <input type="text" name="dob" required class="form-control" data-validation="length required" data-validation-length="min2">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                                <label for="Email">Email</label>
                                <input type="Email" name="email" class="form-control">
                            </div>

                            <div class="col-md-3 pt-3">
                                <label for="inputGender">Gender*</label>
                                <select id="inputGender" name="gender" class="form-control">
                                    <option value="male" selected><p class="gens">Male</p></option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                               
                            <div class="col-md-3 pt-3">
                                <label for="Name">Contact No.</label>
                                <input type="number" name="phone" class="form-control" data-validation="length required" data-validation-length="min2">
                            </div> 
                        </div>  
                        <div class="down">
                            <button type="submit" class="btn btn-warning btn-sm mt-3">Save</button>
                            <button type="reset" class="btn btn-dark btn-sm mt-3">Reset</button>
                        </div>
                    </form>

                    <a href="{{route('firebase.index')}}" class="btn btn-primary btn-sm btn-round btn-mini waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i> <span class="btn-label hidden-sm">Firebase </span></a>

                </div>
            </div>   
        </div><!-- /.container-fluid -->
    </div>

@endsection