@extends('layouts.admin')
@section('content')

<div class="content">
        <div class="container-fluid mt-3 bg">  

        <form action="{{route('student.update', ['id'=>$students->id])}}" method="post" enctype="multipart/form-data" class="bg1">                   
                    {{csrf_field()}}
                    <!-- {{ method_field('PATCH') }}                        -->
                     <!-- </div> -->
                        <div class="form-row">

                            <div class="col-md-3 pt-3">
                                <label for="Name">Name </label>
                                <input type="text" name="name" class="form-control" value="{{old('name',$students->name)}}">
                            </div>
                             <div class="col-md-3 pt-3">
                                <label for="Name">Address</label>
                                <input type="text" name="address" class="form-control" value="{{old('address', $students->address)}}">
                            </div> 
                            <div class="col-md-3 pt-3">
                                <label for="Name">DOB</label>
                                <input type="text" name="dob" class="form-control" value="{{old('dob',$students->dob)}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3 pt-3">
                                <label for="Email">Email</label>
                                <input type="Email" name="email" class="form-control" value="{{old('email',$students->email)}}">
                            </div>

                            <div class="col-md-3 pt-3">
                                <label for="inputGender">Gender*</label>
                                <select id="inputGender" name="gender" class="form-control">
                                    <option value="male" {{$students->gender=='male'? 'selected' : ''}}><p class="gens">Male</p></option>
                                    <option value="female" {{$students->gender=='female'? 'selected': ''}}>Female</option>
                                    <option value="others" {{$students->gender=='others'? 'selected': ''}}>Others</option>
                                </select>
                            </div>
                               
                            <div class="col-md-3 pt-3">
                                <label for="Name">Contact No.</label>
                                <input type="number" name="phone" class="form-control" value="{{old('phone', $students->phone)}}">
                            </div> 
                        </div>  
                        <div class="down">
                            <button type="submit" class="btn btn-warning btn-sm mt-3">UPDATE</button>
                            <button type="reset" class="btn btn-dark btn-sm mt-3">Reset</button>
                        </div>
                    </form>


</div>
</div>
@endsection