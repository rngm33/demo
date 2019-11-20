@extends('layouts.admin')
@section('content')

<div class="content"> 
    <div class="container-fluid pt-3"> 
    <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-xs-12 col-sm-9">
                        <h4 class="blue">
                            <span class="middle">STUDENT DETAILS</span>
                        </h4>
                        <hr>
                        </div>
                <div class="col-lg-4">
                            <div id="editor"></div>
                            <div>
                            	<table class="table table-borderless table-sm" id="student-detail">
                                <tbody>
                                 
                                    <tr>
                                        <th>Full Name: </th>
                                        <td>{{$student->name}}</td>
                                    </tr>

                                    <tr>
                                        <th>Address: </th>
                                        <td>{{$student->address}}</td>
                                    </tr>

                                    <tr>
                                        <th>Gender:</th>
                                        <td>{{$student->gender}}</td>
                                    </tr>

                                    <tr>
                                        <th>Email: </th>
                                        <td>{{$student->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone: </th>
                                        <td>{{$student->phone}}</td>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth:</th>
                                        <td>{{$student->dob}}</td>
                                    </tr>


                                 
                                    <br>
                        

                            
                                </tbody>
                            </table>
                            </div>
                        </div>


















</div>
</div>
</div>
</div>
</div>
@endsection